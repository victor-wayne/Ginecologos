<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Colegio de Ginecología y Obstetricia de Celaya, A.C.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.ico') }}">
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
                <a class="brand logo" href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                <!-- end logo -->
                <!-- top menu -->
                <div class="navigation">
                    <nav>
                        <ul class="nav topnav">
                            <li class="dropdown active">
                                <a href="index.html">Inicio</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Nosotros</a>
                                <ul class="dropdown-menu">
                                    <li><a href="overview.html">Presentación</a></li>
                                    <li><a href="scaffolding.html">Mesa Diretiva</a></li>
                                    <li><a href="base-css.html">Reglamento</a></li>
                                    <li><a href="components.html">Historia</a></li>
                                </ul>
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
                                <a href="#">Contacto</a>
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
<section id="intro">
    <div class="jumbotron masthead">
        <div class="container">
            <!-- slider navigation -->
            <div class="sequence-nav">
                <div class="prev">
                    <span></span>
                </div>
                <div class="next">
                    <span></span>
                </div>
            </div>
            <!-- end slider navigation -->
            <div class="row">
                <div class="span12">
                    <div id="slider_holder">
                        <div id="sequence">
                            <ul>
                                <!-- Layer 1 -->
                                <li>
                                    <div class="info animate-in">
                                        <h2>Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                                        <br>
                                        <h3>#JuntosSomosMejores</h3>
                                        <p>
                                            Desde 19XX hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
                                        </p>
                                        <a class="btn btn-success" href="#">Únete al Colegio</a>
                                    </div>
                                    <img class="slider_img animate-in" src="{{ asset('assets/img/slides/sequence/banner-ginecologos2.jpeg') }}" alt="">
                                </li>
                                <!-- Layer 2 -->
                                <li>
                                    <div class="info">
                                        <h2>Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                                        <br>
                                        <h3>#JuntosSomosMejores</h3>
                                        <p>
                                            Desde 19XX hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
                                        </p>
                                        <a class="btn btn-success" href="#">Únete al Colegio</a>
                                    </div>
                                    <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos.jpeg') }}" alt="">
                                </li>
                                <!-- Layer 3 -->
                                <li>
                                    <div class="info">
                                        <h2>Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                                        <br>
                                        <h3>#JuntosSomosMejores</h3>
                                        <p>
                                            Desde 19XX hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
                                        </p>
                                        <a class="btn btn-success" href="#">Únete al Colegio</a>
                                    </div>
                                    <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos1.jpeg') }}" alt="">
                                </li>

                                <!-- Layer 4 -->
                                <li>
                                    <div class="info">
                                        <h2>Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                                        <br>
                                        <h3>#JuntosSomosMejores</h3>
                                        <p>
                                            Desde 19XX hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
                                        </p>
                                        <a class="btn btn-success" href="#">Únete al Colegio</a>
                                    </div>
                                    <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos3.jpeg') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sequence Slider::END-->
                </div>
            </div>
        </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">
        <div class="row">
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-comments-alt left active"></i>
                <h4>Mesa Directiva</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Nuestra Mesa Directiva 2020-2021 tiene múltiples objetivos, tales como:
                </p>
                <a href="#">Ver más</a>
            </div>
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-plane left"></i>
                <h4>Reglamento</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Pendiente info
                </p>
                <a href="#">Ver más</a>
            </div>
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-leaf left"></i>
                <h4>Beneficios y documentación</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Conoce los beneficios de formar parte de nuestro Colegio, así como la documentación necesaria para integrarte.
                </p>
                <a href="#">Ver más</a>
            </div>
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-wrench left"></i>
                <h4>Acción Social</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Conoce nuestras acciones sociales en pro de la Sociedad
                </p>
                <a href="#">Ver más</a>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="tagline centered">
                    <div class="row">
                        <div class="span12">
                            <div class="tagline_text">
                                <h2>No te pierdas ningún evento del Colegio de Ginecología <br> y Obstetricia de Celaya, A.C.</h2>

                            </div>
                            <div class="btn-toolbar cta">
                                <a class="btn btn-large btn-color" href="#">
                                    <i class="icon-plane icon-white"></i> Próximos Eventos </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tagline -->
            </div>
        </div>
        <div class="row">
            <div class="home-posts">
                <div class="span12">
                    <h3>Entradas al Blog</h3>
                </div>

                <div class="fb-post" data-href="https://www.facebook.com/victorwatsdj.riverahernandez/posts/10223640960757930" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223640960757930" class="fb-xfbml-parse-ignore"><p>🥰😍</p>Publicado por <a href="https://www.facebook.com/victorwatsdj.riverahernandez">Victor Enterprice</a> en&nbsp;<a href="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223640960757930">Lunes, 27 de julio de 2020</a></blockquote></div>
                <div class="fb-post" data-href="https://www.facebook.com/victorwatsdj.riverahernandez/posts/10223640960757930" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223640960757930" class="fb-xfbml-parse-ignore"><p>🥰😍</p>Publicado por <a href="https://www.facebook.com/victorwatsdj.riverahernandez">Victor Enterprice</a> en&nbsp;<a href="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223640960757930">Lunes, 27 de julio de 2020</a></blockquote></div>
                <div class="fb-post" data-href="https://www.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334" data-show-text="true" data-width=""><blockquote cite="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/victorwatsdj.riverahernandez">Victor Enterprice</a> en&nbsp;<a href="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334">Miércoles, 8 de julio de 2020</a></blockquote></div>
                <hr>
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fvictorwatsdj.riverahernandez%2Fposts%2F10223399363118140&show_text=false&width=552&height=497&appId" width="100%" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <div class="fb-post" data-href="https://www.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334" data-show-text="true" data-width="100px"><blockquote cite="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/victorwatsdj.riverahernandez">Victor Enterprice</a> en&nbsp;<a href="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334">Miércoles, 8 de julio de 2020</a></blockquote></div>
                <div class="fb-post" data-href="https://www.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334" data-show-text="true" data-width="100px"><blockquote cite="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/victorwatsdj.riverahernandez">Victor Enterprice</a> en&nbsp;<a href="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334">Miércoles, 8 de julio de 2020</a></blockquote></div>
                <div class="fb-post" data-href="https://www.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334" data-show-text="false" data-width="100px"><blockquote cite="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334" class="fb-xfbml-parse-ignore">Publicado por <a href="https://www.facebook.com/victorwatsdj.riverahernandez">Victor Enterprice</a> en&nbsp;<a href="https://developers.facebook.com/victorwatsdj.riverahernandez/posts/10223466532557334">Miércoles, 8 de julio de 2020</a></blockquote></div>
            </div>
        </div>
    </div>

</section>




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
                    <h5>Entradas al Blog</h5>
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
