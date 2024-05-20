<!-- resources/views/mail/mailContacto.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto de Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Contacto de Cliente</h2>
        </div>
        <div class="content">
            <p>Hola,</p>
            <p>Un usuario está interesado en nuestros servicios. A continuación se detallan sus datos de contacto:</p>
            <p><strong>Nombre:</strong> {{ $nombre_cliente }} {{ $apellido_cliente }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Celular:</strong> {{ $celular }}</p>
            <p><strong>Consulta:</strong> {{ $consulta }}</p>
            <p><strong>Mensaje:</strong> {{ $mensaje }}</p>
            <p>Por favor, póngase en contacto con esta persona lo antes posible para darle seguimiento a su solicitud.</p>
            <p>Gracias,</p>
            <p>Equipo de soporte - KPP</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} KPP. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>
