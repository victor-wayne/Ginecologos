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
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet"> 
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
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
        <!--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">-->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

        <!-- =======================================================
        Theme Name: Serenity
        Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
        ======================================================= -->
        @yield('custom_css')
    </head>
    <body data-spy="scroll" data-target=".bs-docs-sidebar" id="body-page">
        <header id="header">
        <!-- Navbar
        ================================================== -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <!-- logo -->
                        <a class="brand logo" href="{{url('/')}}"><img src="{{ asset('assets/img/logo-ginecologos.png') }}" alt=""></a>
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
                                    </li>
                                    <li>
                                        <a href="#">Eventos</a>                                        
                                    </li>
                                    <li class="{{Request::is('blog') ? 'active':''}}">
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="{{Request::is('contacto') ? 'active':''}}">
                                        <a href="{{ route('contacto') }}">Contacto</a>
                                    </li>                                    

                                    <li class="{{Request::is('register') ? 'active':''}}">
                                        <a href="{{url('register')}}">Registro</a>                                        
                                    </li>

                                    <li class="{{Request::is('login') ? 'active':''}}">
                                        <a href="{{url('login')}}">Login</a>
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
                            <h5>Páginas más Buscadas</h5><br>
                            <ul class="regular">
                                <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                                <li><a href="#">Eventos</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('contacto') }}">Contacto</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
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


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <script src="{{ asset('assets/js/jssor.slider-28.0.0.min.js') }}" type="text/javascript"></script><!--Galeria-->
        <script>
            function mostrarModal(numero) {
                switch (numero) {
                    case 1:

                        Swal.fire({
                            title: '<strong><h2>Mesa Directiva</h2></strong><br>',
                            width: '80%',
                            heightAuto: true,
                            html: '<div class="row">' +
                                '<div class = "col-md-6 "><img class="icon-circledg icon-64" src="' + "{{asset('assets/img/doctor.png')}}" + '" width="435px" alt="Latest Products Image" <br>' +
                                ' </div> <div class = "col-md-5" >' +
                                '<p align = "center" ><h4>Dr. Arturo Durán Guzmán <br> </h4> <h1> Presidente Honorario </h1> </p>' +
                                '<div class = "col-md-6 "><img class="icon-circledg icon-64" src="' + "{{asset('assets/img/doctor.png')}}" + '" width="435px" alt="Latest Products Image">' +
                                ' </div> <div class = "col-md-5" >' +
                                '<p align = "center" ><h4>Dr. Emmanuel Castro Almanza <br> </h4> <h1> Presidente </h1> </p>' +
                                '<div class = "col-md-6 "><img class="icon-circledg icon-64" src="' + "{{asset('assets/img/doctor.png')}}" + '" width="435px" alt="Latest Products Image">' +
                                ' </div> <div class = "col-md-5" >' +
                                '<p align = "center" ><h4>Dr. Jorge Dueñas Riaño <br> </h4> <h1> Secretrio </h1> </p>' +
                                '<div class = "col-md-6 "><img class="icon-circledg icon-64" src="' + "{{asset('assets/img/doctor.png')}}" + '" width="435px" alt="Latest Products Image">' +
                                ' </div> <div class = "col-md-5" >' +
                                '<p align = "center" ><h4>Dr. Eduardo Mariano González Gállego <br> </h4> <h1> Tesorero </h1>  </p>' +
                                '<div class = "col-md-6 "><img class="icon-circledg icon-64" src="' + "{{asset('assets/img/doctor.png')}}" + '" width="435px" alt="Latest Products Image">' +
                                ' </div> <div class = "col-md-5" >' +
                                '<p align = "center" ><h4>Dr. Mario Alberto Godinez Guerrero<br>Dr. Luis Israel Arredondo Maldonado<br> Dr. Sergio Cruz Pérez <br> </h4> <h1> Vocales </h1>  </p>' +
                                '<div class = "col-md-6 "><img class="icon-circledg icon-64" src="' + "{{asset('assets/img/doctor.png')}}" + '" width="435px" alt="Latest Products Image">' +
                                ' </div> <div class = "col-md-5" >' +
                                '<p align = "center" ><h4>Dr. Claude Alain Paire Serrier<br>Dr. Julio Rafael Velázquez Velasco<br>Dr. Ramón Martín del Campo Maldonado<br></h4> <h1> Comosión de Honor y Justicia </h1> </p>' +
                                '<div class = "col-md-6 "><img class="icon-circledg icon-64" src="' + "{{asset('assets/img/doctor.png')}}" + '" width="435px" alt="Latest Products Image">' +
                                ' </div> <div class = "col-md-5" >' +
                                '<p align = "center" ><h4>Dr. Eduardo Rivas Larrauri<br> </h4> <h1> Representante ante la Femecog </h1> </p>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText: 'Cerrar',
                        });
                        break;

                    case 2:
                        Swal.fire({
                            title: '<strong><h2>Accion Social</h2></strong><br>',
                            width: '80%',
                            heightAuto: true,
                            html:'<div class="row">' +
                                '<div class = "col-md-6 "><img class="img-responsive" src="' + "{{ asset('assets/img/mono.jpg') }}" + '" width="100%" alt="Latest Products Image">' +
                                ' </div> <div class = "col-md-5" >' +
                                '<a href="https://www.facebook.com/MonologosdelaV">Monólogos de la vaginita adolescente</a> <br> <br>'+
                                '<p align = "justify" >Monólogos de la vaginita adolescente es una obra de teatro que busca guiar a los jóvenes hacia una sexualidad responsable. Funciones en toda la República. </p> <br>'+
                                '<strong><h2>Accion Social 2 </h2></strong><br>'+
                                '<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FColegiodeGinecologiadeCelaya%2Fvideos%2F360701031955662%2F&show_text=0&width=560" width="100%" height="500px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe><br><br>'+
                                '<p align = "justify">Como parte de los esfuerzos realizados en esta pandemia, donamos 300 cubrebocas de tela a la Jurisdicción Sanitaria No. 3 del Estado de Guanajuato. </p>' +
                                '<strong><h2>Accion Social 3 </h2></strong><br>'+
                                '<img class="img-responsive" src="' + "{{ asset('assets/img/gine2.jpg') }}" + '" width="100%" alt="Latest Products Image">'+
                                '<a href="https://www.facebook.com/ColegiodeGinecologiadeCelaya">Colegio de Ginecología en Celaya</a> <br> <br>'+
                                '<p align = "justify">Con el objetivo de promover la salud de la mujer ofrecemos información de interés en nuestras redes sociales del Colegio de Ginecología de manera semanal, así como conferencias gratuitas para la actualización médica continua. </p>'+
                                ' </div ></div > ',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText: 'Cerrar',
                        });
                        break;
                    case 3:

                        Swal.fire({
                            title: '<strong><h2>Beneficios</h2></strong><br>',
                            width: '80%',
                            heightAuto: true,
                            html: '<div class="row">' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/moneda.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Costos Preferenciales a Congresos </h1> </div> ' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/kit.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Fortalecimiento de tu ejercicio profesional </h1> </div> ' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/ordenador-portatil.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Acceso a publicaciones electrónicas  </h1> </div> ' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/tesis.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Actualización médica continua  </h1> </div> ' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/porcentaje.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Sesiones mensuales de actualización médica continua  </h1> </div> ' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/porcentaje.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Conferencias Femecog </h1> </div> ' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/porcentaje.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Obtención de Puntaje Anual para Recertificación por pertenecer a la Federación a\n' +
                                'través de nuestro Colegio </h1> </div> ' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/porcentaje.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Asesoría legal  </h1> </div> ' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/porcentaje.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Costo preferente al inscribirse a UpToDate </h1> </div> ' +
                                '<div class = "col-md-6 "><h1><img class="img-responsive" src="' + "{{ asset('assets/img/porcentaje.png') }}" + '" width="30px" alt="Latest Products Image">' +
                                ' Costo de ingreso y anual preferencial en asociaciones internacionales como el\n' +
                                'Colegio americano de ginecología y obstetricia (ACOG), FIGO, FLASOG, RCOG, etc. </h1> </div> ' +
                                '<h2>¡Y muchos más! </>'+
                                '</div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText: 'Cerrar',
                        });
                        break;
                    case 4:
                        Swal.fire({
                            title: '<strong><h2>Consentimiento Informado</h2></strong><br>',
                            width: '80%',
                            heightAuto: true,
                            html: '<div class="row">' +
                                '<div class = "col-md-6 ">' +
                                ' <ul align="center">' +
                                ' <li><h4>Cerclaje <a href="{{ asset('assets/docs/cerclaje.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Cesárea <a href="{{ asset('assets/docs/cesarea.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Cirugía <a href="{{ asset('assets/docs/cirugia.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Cirugía como tratamiento de infertilidad <a href="{{ asset('assets/docs/cirugiacomotratamientodeinfertilidad.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Cirugía de cervix <a href="{{ asset('assets/docs/cirugiadecervix.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Cirugía de incontinencia urinaria <a href="{{ asset('assets/docs/cirugiadeincontinenciaurinaria.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Cirugía de relajación de piso pélvico <a href="{{ asset('assets/docs/cirugiaderelajaciondelpisopelvico.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Cirugía Laparoscopica <a href="{{ asset('assets/docs/cirugialaparoscopica.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Consulta y estudio de infertilidad <a href="{{ asset('assets/docs/consultayestudiodeinfertilidad.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Control prenatal <a href="{{ asset('assets/docs/controlprenatal.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Histerectomia <a href="{{ asset('assets/docs/histerectomia.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Inducción del parto <a href="{{ asset('assets/docs/inducciondelparto.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Inducción de ovulación <a href="{{ asset('assets/docs/inducciondeovulacion.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Inseminación artificial <a href="{{ asset('assets/docs/inseminacionartificial.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Laparotomía explorada <a href="{{ asset('assets/docs/laparotomiaexploradora.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Legrado uterino <a href="{{ asset('assets/docs/legradouterino.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Miomectomía <a href="{{ asset('assets/docs/miomectomia.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Oclusión tubaria <a href="{{ asset('assets/docs/oclusiontubaria.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                ' <li><h4>Resección de masa de seno <a href="{{ asset('assets/docs/resecciondemasaenseno.pdf') }}"><i class="icon-download-alt"></i></a></h4></li><br>' +
                                '</ul></div> ' +
                                ' </div > ',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText: 'Cerrar',
                        });
                        break;

                    default:
                        break;
                }
            }
        </script>

        
        @yield('custom_sccript')
        

        <style type ="text/css"> ul {list-style-type: none;} </style>
    </body>
</html>