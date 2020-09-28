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


        <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
        <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

        <!-- =======================================================
        Theme Name: Serenity
        Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
        ======================================================= -->

    </head>
    <body data-spy="scroll" data-target=".bs-docs-sidebar" id="body-page">
        <header id="header">
        <!-- Navbar
        ================================================== -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <!-- logo -->
                        <a class="brand logo" href="{{url('/suscriptor')}}"><img src="{{ asset('assets/img/logo-ginecologos.png') }}" alt=""></a>
                        <!-- end logo -->
                        <!-- top menu -->
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">

                                    <li class="dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <i class="icon-user"></i>{{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{url('/suscriptor/user')}}"><i class="icon-cog"></i>Ajustes</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    <i class="icon-off"></i>{{ __('Cerrar Sessión') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
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

        <!-- === Modal ==== -->

        <div id="modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="modalLabel">@yield('modal-title')</h3>
            </div>
            <div class="modal-body">
                @yield('modal-content')
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" onclick="cleanModal();" aria-hidden="true">Cancelar</button>
            </div>
        </div>

        <!-- Footer
================================================== -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="widget">
                            <h5>Browse pages</h5><br>
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


                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget">
                            <!-- logo -->
                            <a class="brand logo" href="index.html">
                                <img src="{{ asset('assets/img/logo-ginecologosa.png') }}" alt="">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="widget">

                </div>
            </div>
            <div class="span4">
                <div class="widget">
                    <!-- logo -->
                    <a class="brand logo" href="index.html">
                        <img src="{{ asset('assets/img/logo-ginecologosa.png') }}" alt="">
                    </a>
                    <!-- end logo -->

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
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0" nonce="rXSaaB0i"></script>
        <!-- Template Custom JavaScript File -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
    </body>
</html>
