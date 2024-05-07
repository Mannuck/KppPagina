<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- ========== Page Title ========== -->
    <title>KPP</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('storage/assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('storage/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="assets/js/html5/html5shiv.min.js"></script>
          <script src="assets/js/html5/respond.min.js"></script>
        <![endif]-->

</head>
<body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area inc-pad bg-gradient text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i> Cra. 17a # 116-15, Oficina 302, Bogotá.
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i> comercial@kpp.lat
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right item-flex">
                    {{-- <div class="info">
                        <ul>
                            <li>
                                <i class="fas fa-clock"></i> Office Hours: 8:00 AM – 7:45 PM
                            </li>
                        </ul>
                    </div> --}}
                    <div class="social">
                        <ul>
                            <li>
                                <a target="_blanc" href="https://www.facebook.com/people/Kpp-Lat/100063763283997/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li> --}}
                            <li>
                                <a target="_blanc" href="https://www.linkedin.com/in/corporaci%C3%B3n-kpp-4615ba235/?originalSubdomain=co">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->


    <!-- Header
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-bg navbar-fixed dark no-background bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Búsqueda">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                    <ul>
                        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('storage/assets/img/logo.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Inicio</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart bussines</a>
                            <ul class="dropdown-menu">
                                <li><a href="">Automatización de procesos</a></li>
                                <li><a href="">Desarrollo a la medida</a></li>
                                <li><a href="">Robotización de procesos</a></li>
                                <li><a href="">Inteligencia Artificial</a></li>
                                <li><a href="">Portales y colaboración</a></li>
                                <li><a href="">Tableros de indicadores</a></li>
                                <li><a href="">Desarrollo web y móviles</a></li>
                                <li><a href="">Aprovechamiento de la plataforma O365</a></li>
                                <li><a href="">Capacitación en tecnologías disruptivas</a></li>
                                <li><a href="">Soporte técnico en TI para empresas</a></li>
                                <li><a href="">Proveedor de expertos para desarrollo</a></li>
                                <li><a href="">Consultores en tecnología</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart education</a>
                            <ul class="dropdown-menu">
                                <li><a href="">Microsoft education</a></li>
                                <li><a href="">LMS</a></li>
                                <li><a href="">Eproctoring</a></li>
                                <li><a href="">Optimizador de admisiones</a></li>
                                <li><a href="">IA para retención de estudiantes</a></li>
                                <li><a href="">Contenidos a la medida</a></li>
                                <li><a href="">Formación por cualificaciones</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aliados</a>
                            <ul class="dropdown-menu">
                                <li><a href="">Microsoft</a></li>
                                <li><a href="">CCC - Cableado y conectividad</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nosotros</a>
                            <ul class="dropdown-menu">
                                <li><a href="">Propósito</a></li>
                                <li><a href="">Como lo hacemos</a></li>
                                <li><a href="">Valores</a></li>
                                <li><a href="">Experiencia</a></li>
                                <li><a href="">Ecosistema</a></li>
                                <li><a href="">Somos expertos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Contáctenos</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    {{-- Inicio Renderizado de componentes livewire --}}
    {{ $slot }}
    {{-- Fin de Renderizado de componentes livewire --}}

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="{{ asset('storage/assets/img/shape/bg-3.png') }}" alt="Shape">
        </div>
        <!-- Fixed Shape -->

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-content">
                    <div class="row align-center">
                        <div class="col-lg-7">
                            <ul>
                                <li><a href="#">Membership</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-5">
                            <form action="#">
                                <input type="email" placeholder="Registra tu correo para recibir las ultimas novedades" class="form-control" name="email">
                                <button type="submit"> <i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{ asset('storage/assets/img/logo-light.png') }}" alt="Logo">
                            <p>
                                Acelerarnos la transformación de las organizaciones.
                            </p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a target="blank" href=" https://www.facebook.com/people/Kpp-Lat/100063763283997/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="blank" href="https://www.linkedin.com/in/corporaci%C3%B3n-kpp-4615ba235/?originalSubdomain=co">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Company</h4>
                            <ul>
                                <li>
                                    <a href="#">Propósito</a>
                                </li>
                                <li>
                                    <a href="#">Como lo hacemos</a>
                                </li>
                                <li>
                                    <a href="#">Valores</a>
                                </li>
                                <li>
                                    <a href="#">Experiencia</a>
                                </li>
                                <li>
                                    <a href="#">Ecosistema</a>
                                </li>
                                <li>
                                    <a href="#">Somos expertos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Soluciones</h4>
                            <ul>
                                <li>
                                    <a href="#">Sistema Integrado de Gestión Comercial</a>
                                </li>
                                <li>
                                    <a href="#">Sistema Integrado de Turismo Inteligente</a>
                                </li>
                                <li>
                                    <a href="#">Sistema de Indicadores para Seguridad y Salud en el Trabajo</a>
                                </li>
                                <li>
                                    <a href="#">Cotizador de seguros online</a>
                                </li>
                                <li>
                                    <a href="#">Gestión documental integrada a O365</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item">
                            <h4 class="widget-title">Contáctenos</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <strong>Dirección :</strong>
                                        Cra. 17a # 116-15,  Oficina 302, Bogotá.
                                    </li>
                                    <li>
                                        <strong>Correo electrónico :</strong>
                                        <a href="mailto:comercial@kpp.lat">comercial@kpp.lat</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Derechos de autor &copy; 2021. Diseñado por <a href="#">KPP</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('storage/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('storage/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('storage/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('storage/assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('storage/assets/js/main.js') }}"></script>

</body>
</html>
