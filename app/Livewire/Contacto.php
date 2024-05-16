<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;
use Anhskohbo\NoCaptcha\NoCaptcha;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contacto extends Component
{

    #[Validate('required', message: 'El campo nombre es obligatorio.')]
    public $nombre_cliente;
    #[Validate('required', message: 'El campo apellido es obligatorio.')]
    public $apellido_cliente;
    #[Validate('required', message: 'El campo correo electrónico es obligatorio.')]
    public $email;
    #[Validate('required', message: 'El campo celular es obligatorio.')]
    public $celular;
    #[Validate('required', message: 'El campo naturaleza de la consulta es obligatorio.')]
    public $consulta = 'General';
    #[Validate('required', message: 'El campo mensaje es obligatorio.')]
    public $mensaje;
    #[Validate('required', message: 'Debe aceptar los términos y condiciones para enviar la solicitud')]
    public $condiciones;
    public $mensajes_codigos;
    public $mensajes_titulos;
    #[Validate('required', message: 'El campo reCAPTCHA es obligatorio')]
    public $gRecaptchaResponse;

    public function mount()
    {
        // Establecer la opción 'General' como seleccionada por defecto
        $this->consulta = 'General';
    }

    public function render()
    {
        return view('livewire.contacto');
    }

    public function recaptcha()
    {
        $captchaSecret = '6LddQzUpAAAAAEr94IXoAwdPzvv6qcGbnnJLiVCM';
        $captchaSiteKey = '6LddQzUpAAAAADb2-Zv25F_N-K0j9wBbHF1LMifo';

        $captcha = new NoCaptcha($captchaSecret, $captchaSiteKey);
        $captcha->verifyResponse($this->gRecaptchaResponse);
        if ($captcha->verifyResponse($this->gRecaptchaResponse)) {
            return true;
        } else {
            return false;
        }
    }

    public function EnviarDatos()
    {

        $this->recaptcha();

        if (!$this->isInternetConnected()) {
            $this->dispatch('showModalcodigos');
            $this->mensajes_titulos = 'Error de conexión';
            $this->mensajes_codigos = 'No hay conexión a Internet. Verifica tu conexión e intenta de nuevo.';
            return;
        }

        $this->validate();

        // crdenciales y lista guardar info
        $tenantId = "881321sd5-f65c-4e4f-ae3a-e5d89e491ddd";
        $clientId = "9be96231-bbac-42d6-b67f-5b72da3348a9";

        $siteId = "kpplat.sharepoint.com,aea39e9b-9c36-4411-85b8-7c49434ae7cb,cc30657c-5f09-4fac-9236-68f11e056a01";
        $listId = "0a8ce149-598c-4acc-a751-73e4e91ebbbf";

        // Url para obtener token de validación.
        $tokenUrl = "https://login.microsoftonline.com/$tenantId/oauth2/v2.0/token";

        // Definir los parametors que la estructura json de la api recibira.
        $tokenParams = [
            "client_id" => $clientId,
            "scope" => "https://graph.microsoft.com/.default",
            "client_secret" => $clientSecret,
            "grant_type" => "client_credentials",
        ];

        // Realizar peticion de token de validación usando cliente HTTP.
        $tokenResponse = Http::asForm()->post($tokenUrl, $tokenParams);

        // Verifica errores al obtener el token de verificación.
        if ($tokenResponse->failed()) {
            return "Error al obtener token de verificación";
        }

        // Analizar respuesta JSON para obtener el token de verificación.
        $tokenData = $tokenResponse->json();
        $accessToken = $tokenData["access_token"];

        // Definimos URL de sharepoint para crear nuevos items en una lista sharepoint.
        $createSharePointItemUrl = "https://graph.microsoft.com/v1.0/sites/$siteId/lists/$listId/items";

        $newItemData = [
            "fields" => [
                "Title" => "$this->nombre_cliente",
                "Apellidos" => "$this->apellido_cliente",
                "Correo_electronico" => "$this->email",
                "Celular" => "$this->celular",
                "Naturaleza" => "$this->consulta",
                "Mensaje" => "$this->mensaje",
            ],
        ];

        try {

            // Peticion de creacion de items en sharepoint usando cliente HTTP.
            $response = Http::withHeaders([
                "Authorization" => "Bearer $accessToken",
                "Content-Type" => "application/json",
            ])->post($createSharePointItemUrl, $newItemData);

            // Verificamos errores en la peticion HTTP

            $statusCode = $response->getStatusCode();

            switch ($statusCode) {
                case '504':
                    $this->dispatch('showModalcodigos');
                    $this->mensajes_titulos = 'Tiempo de espera agotado';
                    $this->mensajes_codigos = 'Ha ocurrido un error al intentar enviar el formulario, por favor intentelo más tarde';
                    break;

                case '201':
                    $this->dispatch('showModalcodigos');
                    $this->mensajes_titulos = 'Solicitud enviada';
                    $this->mensajes_codigos = 'Su solicitud se envío correctamente, pronto un asesor se comunicará con usted.';
                    // Mail::to('contacto@kpp.lat')->send(new correoContacto($this->nombre_cliente, $this->apellido_cliente, $this->email, $this->celular, $this->consulta, $this->mensaje));
                    // Mail::to('dago.bedoya@kpp.lat')->send(new correoContacto($this->nombre_cliente, $this->apellido_cliente, $this->email, $this->celular, $this->consulta, $this->mensaje));
                    $this->reset();
                    $this->dispatch('resetRecaptcha');
                    break;

                case '404':
                    $this->dispatch('showModalcodigos');
                    $this->mensajes_titulos = 'No se ha encontrado';
                    $this->mensajes_codigos = 'No se ha encontrado la página, por favor intentelo más tarde';
                    break;
            }
        } catch (\Exception $e) {
            // Capturar cualquier excepción y manejarla
            $this->dispatch('showModalcodigos');
            $this->mensajes_titulos = 'Error de conexión';
            $this->mensajes_codigos = 'No se pudo resolver el host, verifica tu conexión a Internet, he intente de nuevo.';
            // También puedes loguear el error para un seguimiento interno
            error_log("Error en la solicitud de seguro: " . $e->getMessage());
        }
    }

    private function isInternetConnected()
    {
        $checkUrl = "https://www.google.com";

        try {
            $response = Http::get($checkUrl);
            return $response->successful();
        } catch (\Exception $e) {
            return false;
        }
    }



    public function otraSolicitud()
    {
        sleep(1);
    }

    private function resetForm()
    {
        // Reset the form fields to their initial state
        $this->nombre_cliente = '';
        $this->apellido_cliente = '';
        $this->email = '';
        $this->celular = '';
        $this->consulta = 'General';
        $this->mensaje = '';
        $this->condiciones = '';
    }

    public function abrirModalCodigos()
    {
        $this->dispatch('showModalcodigos');
    }
}
