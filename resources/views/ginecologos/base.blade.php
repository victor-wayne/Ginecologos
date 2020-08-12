<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('title')</title>

        <!-- styles -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap-responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/docs.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/prettyPhoto.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/js/google-code-prettify/prettify.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/sequence.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/color/default.css') }}" rel="stylesheet">

        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">

        <!-- =======================================================
        Theme Name: Serenity
        Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
        ======================================================= -->

    </head>
    <body>
        <header>
        <!-- Navbar
        ================================================== -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <!-- logo -->
                        <a class="brand logo" href="index.html"><img src="{{ asset('assets/img/logo-colegio.png') }}" alt=""></a>
                        <!-- end logo -->
                        <!-- top menu -->
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    <li class="dropdown {{Request::is('/') ? 'active':''}}" >
                                        <a href="{{url('/')}}">Inicio</a>
                                    </li>
                                    <li class="{{Request::is('nosotros') ? 'active':''}}">
                                        <a href="{{url('nosotros')}}">Nosotros</a>
                                        <!--<ul class="dropdown-menu">
                                            <li><a href="overview.html">Presentación</a></li>
                                            <li><a href="scaffolding.html">Mesa Diretiva</a></li>
                                            <li><a href="base-css.html">Reglamento</a></li>
                                            <li><a href="components.html">Historia</a></li>
                                        </ul>-->
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Eventos</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">Entrada al Evento</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Blog</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('contacto') }}">Contacto</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Acción Social</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#">Afiliate</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="overview.html">Beneficios</a></li>
                                            <li><a href="scaffolding.html">Requisitos</a></li>
                                            <li><a href="base-css.html">Pago</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="contact.html">Login</a>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                        <!-- end menu -->
                    </div>
                </div>
            </div>
        </header>

        <div id="seccion1">
            @yield('seccion1')
        </div>

        <div id="seccion2">
            @yield('seccion2')
        </div>

        <div id="seccion3">
            @yield('seccion3')
        </div>
        
        

        <!-- Footer
================================================== -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="widget">
                            <h5>Browse pages</h5>
                            <ul class="regular">
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Eventos</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contacto</a></li>
                                <li><a href="#">Acción Social</a></li>
                                <li><a href="#">Afiliate</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget">
                            <h5>Recent blog posts</h5>
                            <ul class="regular">
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Mea malis nominavi insolens ut</a></li>
                                <li><a href="#">Minim timeam has no aperiri sanctus ei mea per pertinax</a></li>
                                <li><a href="#">Te malorum dignissim eos quod sensibus</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget">
                            <!-- logo -->
                            <a class="brand logo" href="index.html">
                                <img src="{{ asset('assets/img/logo-dark.png') }}" alt="">
                            </a>
                            <!-- end logo -->
                            <address>
                                <strong>Registered Companyname, Inc.</strong><br>
                                8895 Somename Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="verybottom">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <p>
                                &copy; Serenity - All right reserved
                            </p>
                        </div>
                        <div class="span6">
                            <div class="credits">
                                <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Serenity
                                -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JavaScript Library Files -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
        <script src="{{ asset('assets/js/google-code-prettify/prettify.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.elastislide.js') }}"></script>
        <script src="{{ asset('assets/js/sequence/sequence.jquery-min.js') }}"></script>
        <script src="{{ asset('assets/js/sequence/setting.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('assets/js/application.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('assets/js/hover/jquery-hover-effect.js') }}"></script>
        <script src="{{ asset('assets/js/hover/setting.js') }}"></script>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0" nonce="rXSaaB0i"></script>

        <!-- Template Custom JavaScript File -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

    </body>
</html>