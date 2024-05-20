<div>
    {{-- Success is as dangerous as failure. --}}
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url({{ asset('assets/img/contactenos.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contacto</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area bg-gray default-padding">
        <div class="container">
            <div class="contact-box">
                <div class="row align-center">
                    <div class="col-lg-5 left-info">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h5>Ubicación</h5>
                                <p>
                                    Cra. 17a # 116-15, <br> Oficina 302, <br> Bogotá.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info">
                                <h5>Telefono</h5>
                                <p>
                                    (601) 642 95 25 <br>(+57) 310 306 85 60
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="info">
                                <h5>Correo</h5>
                                <p>
                                    comercial@kpp.lat
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="content">
                            <div class="heading">
                                <h2>¿Listo para comenzar una colaboración?</h2>
                                <p>Estamos emocionados por la posibilidad de trabajar en conjunto para lograr resultados excepcionales.</p>
                            </div>
                            <form wire:submit="EnviarDatos" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input wire:model.blur="nombre_cliente" class="form-control @error('nombre_cliente') is-invalid @enderror" id="name" name="nombre_cliente" placeholder="Nombre" type="text">
                                            @error('nombre_cliente')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input wire:model.blur="apellido_cliente" class="form-control @error('apellido_cliente') is-invalid @enderror" id="name" name="apellido_cliente" placeholder="Apellidos" type="text">
                                            @error('apellido_cliente')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" wire:model.blur="email" placeholder="Correo electrónico">
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="tel" class="form-control @error('celular') is-invalid @enderror" id="celular" maxlength="25" name="celular" wire:model.blur="celular" placeholder="Telefono">
                                            @error('celular')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="required-field" for="consulta"><strong>Tipo consulta</strong></label><br>
                                            <div class="form-check form-check-inline">
                                                <input placeholder="" class="form-check-input @error('consulta') is-invalid @enderror" type="radio" name="consulta" wire:model.blur="consulta" id="General" value="General">
                                                <label class="form-check-label" for="General">
                                                    General
                                                </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('consulta') is-invalid @enderror" type="radio" name="consulta" wire:model.blur="consulta" id="Ventas" value="Ventas">
                                                <label class="form-check-label" for="Ventas">
                                                    Ventas
                                                </label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('consulta') is-invalid @enderror" type="radio" name="consulta" wire:model.blur="consulta" id="Soporte" value="Soporte">
                                                <label class="form-check-label" for="Soporte">
                                                    Soporte
                                                </label>
                                            </div>
                                            @error('consulta')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control @error('mensaje') is-invalid @enderror" id="mensaje" maxlength="255" name="mensaje" wire:model.blur="mensaje" placeholder="Mensaje"></textarea>
                                            @error('mensaje')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-check-inline">
                                            <input class="form-check-input @error('condiciones') is-invalid @enderror" type="checkbox" value="" id="condiciones" name="condiciones" wire:model.blur="condiciones">
                                            <label class="form-check-label" for="condiciones"><a target="_blank" href="#">Acepta
                                                    los términos y condiciones</a>
                                            </label>
                                            @error('condiciones')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div id="captcha" class="col-md-12 d-flex justify-content-center" wire:ignore>
                                        {!! NoCaptcha::renderJs('es') !!}
                                        {!! NoCaptcha::display(['data-callback' => 'onloadCallback']) !!}
                                    </div>

                                    <div class="col-md-12 d-flex justify-content-center">
                                        @if ($errors->has('gRecaptchaResponse'))
                                        <span>
                                            <span class="text-danger" style="color: #dc3545">{{ $errors->first('gRecaptchaResponse') }}</span>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-md-6 mb-3">
                                            <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div wire:loading wire:target="EnviarDatos" class="col-12">
                            <div class="alert alert-info d-flex align-items-center justify-content-center my-3">Enviando formulario....</div>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger d-flex align-items-center justify-content-center my-3">
                            Por favor, completa todos los campos requeridos  y verifica la información ingresada.
                        </div>
                        @endif
                        <div class="alert-notification mb-3 my-3">
                            <!-- Mensaje Flash -->
                            @foreach (['correcto' => 'success', 'error' => 'danger'] as $key => $tipo)
                            @if (session()->has($key))
                            <div id="flash-message-{{ $tipo }}" class="alert alert-msg alert-{{ $tipo }} alert-dismissible fade show" role="alert">
                                {{ session($key) }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Google Maps
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=kpp+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->
    <script>
        var onloadCallback = function() {
            @this.set('gRecaptchaResponse', grecaptcha.getResponse());
            var recaptchaResponse = grecaptcha.getResponse();

            Livewire.on('resetRecaptcha', function() {
                grecaptcha.reset();
            });

        }

    </script>
</div>
