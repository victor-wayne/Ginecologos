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
                                    <li>
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

        <script>
            function mostrarModal(numero) {
                switch (numero) {
                    case 1:

                        Swal.fire({
                            title: '<strong><h2>Mesa Directiva</h2></strong><br>',
                            width: '50%',
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
                            title: '<strong><h2>Oncología Urológica</h2></strong>',
                            width: '90%',
                            heightAuto: true,
                            html: '<div class="row">' +
                                '<div class = "col-md-6 "><i class="icon-circled icon-32 icon-group left active" src="' + "{{asset('assets/img/doctor.png')}}" + '>' +
                                ' </div> <div class = "col-md-5" >' +
                                '<p align = "justify" >Nos enfocamos en el diagnóstico y estudio de tumores en el sistema urinario, este abarca próstata, Riñón, Vejiga tanto de hombres como mujeres y cáncer de testículos.</p>' +
                                '<ul align="justify"> ' +
                                '<li><strong>Cáncer de próstata:</strong>Es uno de los más comunes y de las principales causas de' +
                                ' muerte entre los hombres, la detección oportuna es primordial.</li>' +
                                ' <li> <strong>Cáncer de vejiga:</strong> Los síntomas de este cáncer incluyen sangrado al orinar, urgencia' +
                                ' frecuente para orinar, dolor al orinar, dolor en parte baja de la espalda.</li>' +
                                ' <li> <strong>Cáncer de Riñón:</strong>Es probable que en el inicio de esta enfermedad no se presenten' +
                                ' síntomas, pero aparecerán mediante la enfermedad evolucione, debes estar atento' +
                                ' si se presenta Sangre en la orina, bulto en el abdomen, pérdida de peso sin razón,' +
                                ' dolor en costado que no desaparece, pérdida de apetito.</li>' +
                                ' <li> <strong>Cáncer testicular:</strong>Es más común en hombres entre los 15 y 40 años, los síntomas' +
                                ' incluyen inflamación, crecimiento sin dolor y alteraciones en la estructura del testículo.</li>' +
                                ' </ul> </div ></div > ',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText: 'Cerrar',
                        });
                        break;
                    case 3:

                        Swal.fire({
                            title: '<strong><h2>Beneficios</h2></strong><br>',
                            width: '50%',
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
                                '</div>',
                            showCloseButton: true,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText: 'Cerrar',
                        });
                        break;
                    case 4:
                        Swal.fire({
                            title: '<strong><h2>Cirugía endoscópica de próstata</h2></strong>',
                            width: '90%',
                            heightAuto: true,
                            html: '<div class="row">' +
                                '<div class = "col-md-6 "><img class="img-responsive" src="' + "{{ asset('img/970x647/endoscopia1.jpeg') }}" + '" width="435px" alt="Latest Products Image">' +
                                ' </div> <div class = "col-md-5" >' +
                                '<p align = "justify" > Usando la mejor tecnología para brindarte una pronta recuperación. </p>' +
                                '<ul align="justify">' +
                                ' <li><strong>Enucleación Prostática con Láser Holmio: </strong>Esta cirugía ayuda a reducir los síntomas' +
                                ' urinarios por la hiperplasia prostática benigna mediante un láser que corta el exceso' +
                                ' de tejidos para luego ser extraídos. < /li>' +
                                ' <li><strong>Resección bipolar prostática: </strong>Técnica quirúrgica mediante energía eléctrica usando' +
                                ' solución salina con la misma osmolaridad de la sangre disminuyendo las' +
                                ' complicaciones del agua destilada.</li>' +
                                '</ul> </div ></div > ',
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


    </body>
</html>