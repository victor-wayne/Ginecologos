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
                                        <a class="btn btn-success" href="#">Learn more &raquo;</a>
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
                                            Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                        </p>
                                        <a class="btn btn-success" href="#">Learn more &raquo;</a>
                                    </div>
                                    <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos.jpeg') }}" alt="">
                                </li>
                                <!-- Layer 3 -->
                                <li>
                                    <div class="info">
                                        <h2>Far from ugly</h2>
                                        <br>
                                        <h3>Latest technology</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                        </p>
                                        <a class="btn btn-success" href="#">Learn more &raquo;</a>
                                    </div>
                                    <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos1.jpeg') }}" alt="">
                                </li>

                                <!-- Layer 4 -->
                                <li>
                                    <div class="info">
                                        <h2>Smart and fresh</h2>
                                        <br>
                                        <h3>Rich of features</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                        </p>
                                        <a class="btn btn-success" href="#">Learn more &raquo;</a>
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
                <i class="icon-circled icon-32 icon-suitcase left active"></i>
                <h4>Responsive bootstrap</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                </p>
                <a href="#">Learn more</a>
            </div>
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-plane left"></i>
                <h4>Lot of features</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                </p>
                <a href="#">Learn more</a>
            </div>
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-leaf left"></i>
                <h4>Multipurpose template</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                </p>
                <a href="#">Learn more</a>
            </div>
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-wrench left"></i>
                <h4>With latest technology</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                </p>
                <a href="#">Learn more</a>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="tagline centered">
                    <div class="row">
                        <div class="span12">
                            <div class="tagline_text">
                                <h2>Don't miss this special offer for limited time only!</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, vix ceteros noluisse intellegat ne, ex nec insolens liberavisse, no adhuc causae nominati duo.
                                </p>
                            </div>
                            <div class="btn-toolbar cta">
                                <a class="btn btn-large btn-color" href="#">
                                    <i class="icon-plane icon-white"></i> Try free version </a>
                                <a class="btn btn-large btn-inverse" href="#">
                                    <i class="icon-shopping-cart icon-white"></i> Buy license </a>
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
                    <h3>Recent blog posts</h3>
                </div>
                <div class="span3">
                    <div class="post-image">
                        <a href="post_right_sidebar.html">
                            <img src="{{asset('assets/img/dummies/blog1.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="entry-meta">
                        <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
                        <span class="date">Sep 17 <br>
					2013</span>
                    </div>
                    <!-- end .entry-meta -->
                    <div class="entry-body">
                        <a href="post_right_sidebar.html">
                            <h5 class="title">This is a standard post</h5>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
                        </p>
                    </div>
                    <!-- end .entry-body -->
                    <div class="clear">
                    </div>
                </div>
                <div class="span3">
                    <div class="post-image">
                        <a href="#"><img src="{{ asset('assets/img/dummies/blog2.jpg') }}" alt=""></a>
                    </div>
                    <div class="entry-meta">
                        <a href="#"><i class="icon-square icon-48 icon-pencil left"></i></a>
                        <span class="date">Sep 17 2013</span>
                    </div>
                    <!-- end .entry-meta -->
                    <div class="entry-body">
                        <a href="post_right_sidebar.html">
                            <h5 class="title">Example post image format</h5>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
                        </p>
                    </div>
                    <!-- end .entry-body -->
                    <div class="clear">
                    </div>
                </div>
                <div class="span3">
                    <div class="post-image">
                        <a href="#"><img src="{{ asset('assets/img/dummies/blog2.jpg') }}" alt=""></a>
                    </div>
                    <div class="entry-meta">
                        <a href="#"><i class="icon-square icon-48 icon-facetime-video left"></i></a>
                        <span class="date">Sep 17 2011</span>
                    </div>
                    <!-- end .entry-meta -->
                    <div class="entry-body">
                        <a href="post_right_sidebar.html">
                            <h5 class="title">Amazing video post format</h5>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
                        </p>
                    </div>
                    <!-- end .entry-body -->
                    <div class="clear">
                    </div>
                </div>
                <div class="span3">
                    <div class="post-slider">
                        <!-- start flexslider -->
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <a href="post_right_sidebar.html"><img src="{{ asset('assets/img/dummies/work1.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="post_right_sidebar.html"><img src="{{ asset('assets/img/dummies/work2.jpg') }}" alt=""></a>
                                </li>
                                <li>
                                    <a href="post_right_sidebar.html"><img src="{{ asset('assets/img/dummies/work3.jpg') }}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <!-- end flexslider -->
                    </div>
                    <div class="entry-meta">
                        <a href="#"><i class="icon-square icon-48 icon-picture left"></i></a>
                        <span class="date">Sep 17 2011</span>
                    </div>
                    <!-- end .entry-meta -->
                    <div class="entry-body">
                        <a href="post_right_sidebar.html">
                            <h5 class="title">Slider post format with flexslider</h5>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
                        </p>
                    </div>
                    <!-- end .entry-body -->
                </div>
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
                        <li><a href="#">Work for us</a></li>
                        <li><a href="#">Creative process</a></li>
                        <li><a href="#">Case study</a></li>
                        <li><a href="#">Scaffold awwards</a></li>
                        <li><a href="#">Meet the team</a></li>
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

<!-- Template Custom JavaScript File -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>