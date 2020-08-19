@extends('ginecologos.base')
@section('title','Nosotros')
@section('seccion1')
<section id="subintro" style="background:#53a575;">
    <div class="jumbotron subhead" id="overview">
      <!--<div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              
            </div>
          </div>
        </div>
      </div>-->
    </div>
</section> 
@endsection
@section('seccion2')
<section id="breadcrumb">
  <div class="container">
    <div class="row">
      <div class="span12">
        <ul class="breadcrumb notop">
          <li><a href="#">Inicio</a><span class="divider">/</span></li>
          <li class="active">Nosotros</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<div class="container" style="border: 0px solid;">
    <!-- Docs nav
    ================================================== -->
    <div class="row" style="border: 0px solid;">

      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#header"><i class="icon-chevron-right"></i> General</a></li>
          <li><a href="#mvv"><i class="icon-chevron-right"></i>Misión, Visión y Valores</a></li>          
          <li><a href="#historia"><i class="icon-chevron-right"></i> Nosotros</a></li>
        </ul>
      </div>

      <div class="span9">
        <!-- Download
        ================================================== -->

        <section id="nosotros" class=""> 
          <div class="page-header">
            <h4 style="color:#bc7475 ;">¿Quienes Somos?</h4>
          </div>
                 
          <div class="row">
            <div class="span8">
              <!-- start flexslider -->
              <div class="flexslider">
                  <ul class="slides">
                      <li>
                        <img src="{{ asset('assets/img/slides/nosotros/img4.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('assets/img/slides/nosotros/img2.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('assets/img/slides/nosotros/img3.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('assets/img/slides/nosotros/img1.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('assets/img/slides/nosotros/img5.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('assets/img/slides/nosotros/img6.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('assets/img/slides/nosotros/img7.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('assets/img/slides/nosotros/img8.jpg') }}" alt="" />
                      </li>
                      <li>
                        <img src="{{ asset('assets/img/slides/nosotros/img9.jpg') }}" alt="" />
                      </li>
                  </ul>
              </div>
              <!-- end flexslider -->
              <p>
                <span style="color:#bc7475;font-weight:bold; ">Colegio de Ginecología y Obstetricia de Celaya</span>
                <br>Desde el año 1984 hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad. 
                <br><strong><a href="#">#JuntosSomosMejores</a></strong>
              </p>                        
          </div>
          </div>
        </section>


        <section id="mvv" class="doc">
          <div class="page-header">
            <h3 style="color:#bc7475 ;">Filosofia</h3>
          </div>
          <div class="row">
            <div class="span3">
              <div class="well">
                <div class="centered">
                  <i class="icon-circled icon-64 icon-suitcase active"></i>
                  <h4>Mision</h4>
                  <div class="dotted_line">
                  </div>              
                </div>
                <div style="height: 220px;">
                  <span style="text-align: left;">
                    Fomentar la educación continua de los médicos Gineco-Obstetras de Celaya, así como promover actividades en favor de la salud de la mujer.
                  </span>              
                </div>
              </div>
            </div>
    
            <div class="span3">
              <div class="well">
                <div class="centered">
                  <i class="icon-circled icon-64 icon-leaf active"></i>
                  <h4>Vision</h4>
                  <div class="dotted_line">
                  </div>              
                </div>
                <div style="height: 220px;">
                  <span class="text-justify" style="text-align: left;">
                    Ser una institución que se caracterice por su innovación, ética y que promueva la excelencia en el ejercicio profesional de sus miembros para contribuir a la sociedad.
                  </span>              
                </div>
              </div>
            </div>
    
            <div class="span3">
              <div class="well">
                <div class="centered">
                  <i class="icon-circled icon-64 icon-coffee active"></i>
                  <h4>Valores</h4>
                  <div class="dotted_line">
                  </div>              
                </div>
                <div style="height: 220px;text-align: justify;">
                  <ul>
                    <li>
                      <strong>Trabajo en equipo:</strong> Estamos seguros que juntos somos mejores, por ello el trabajo en equipo es parte fundamental de nuestro actuar.
                    </li>
                    <li>
                      <strong>Compromiso:</strong> Simpre trabajando en pro de la sociedad, porque tenemos un compromiso con la misma.
                    </li>
                    <li>
                      <strong>Responsabilidad:</strong> Somos profesionales con una responsabilidad social que va más allá de la afiliación al grupo.
                    </li>
                    <li>
                      <strong>Empatía:</strong> Ponernos en el lugar del otro nos ayuda a tener una mejor percepción y a realizar acciones en pro de la Sociedad.
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </section>

        <!-- Contents
        ================================================== -->
        <section id="historia" class="doc">
          <div class="page-header">
            <h4 style="color:#bc7475 ;">Nosotros</h4>
          </div>          
          <div class="row">
            <div class="span9">              
              <!-- start: Accordion -->
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                    <i class="icon-minus"></i> Historia</a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse">
                    <div class="accordion-inner" style="text-align: justify;">                
                    El Actual Colegio De Ginecología Y Obstetricia De Celaya Gto. A. C. Nació En La Mente De Un Grupo De Ginecólogos Liderados Por El Dr. Raúl Barrón Vega Y El Dr. Rubén Medina Martínez. De Acuerdo A Los Registros Existentes, De Manera Informal Se Iniciaron Pláticas Con La Idea De Formar Una Agrupación Médica De Galenos Especialistas En Ginecología Que Radicaran En La Ciudad De Celaya Con Un Objetivo Académico Y Social. El Interés Fue Creciente Mientras Que La Motivación Existente, Coincidía En Formalizar Una Asociación Con El Objetivo De Abrirse Las Puertas A La Femego (federación Mexicana De Asociaciones De Ginecología Y Obstetricia A. C. ), Que Hasta Esa Fecha Era El Organismo Que Integraba Las Sociedades Que Consagraban Sus Actividades De Estudio De La Ginecología Y Obstetricia En La República Mexicana. La Labor De Logística Para Formar La Asociación, Así Como La Academia Continuó En Diversos Sanatorios De La Ciudad Revisando Casos Clínicos Y Realizando Sesiones Bibliográficas Entre Los Especialistas Para Intercambiar Puntos De Vista En Los Manejos Instaurados A Las Pacientes. Poco A Poco La Formalidad En Las Sesiones Académicas Fue Siendo Mayor Al Punto De Realizar Conferencias Magistrales Impartidas Por Los Maestros De Los Médicos Gineco-obstetras Que En Ese Momento Se Encontraban Con El Entusiasmo De Ver Consolidado Este Sueño Y Quienes Provenían De La Ciudad De México Y Que Muchos De Ellos Incluso Eran Parte Del Comité Ejecutivo De La Femego. Fue Un 13 De Abril Del Año 1984 Con Sede En El Sanatorio Guadalupano  de Celaya Cuando Un Grupo Conformado Por Diecinueve Médicos Dedicados Al Cuidado De La Salud De La Mujer Se Reunieron Y Se Instauró La Primera Mesa Directiva De La Asociación Por Votación Resultando Como Presidente El Dr. Juan Antonio Jiménez González, Vicepresidente Dr. Raúl Barrón Vega, Secretario Dr. Rubén Medina Martínez, Tesorero El Dr. Jaime Araiza Acevedo, Primer Vocal Dr. Francisco Velásquez Vera, Segundo Vocal El Dr. Juan Carlos Tamayo Flores, 3er Vocal El Dr. Antonio De La Peña Rocha, La Comisión De Honor Y Justicia Fue Integrada Por El Dr. Ernesto Aranda Gómez, El Dr. Arturo Durán Guzmán, El Dr. David Reynoso Simroth, El Dr. Luis Fernando Trigo Moreno Y El Dr. Ramón Vega Aboytes, Siendo El Dr. Raúl Barrón Merino Galardonado Por Parte De La Asociación Con El Título De Socio Honorario Por Su Trayectoria Médica En La Ciudad. El 27 De Abril Del Año 1984, El Entonces Presidente De La Asociación Dr. Juan Antonio Jiménez González, Acompañado Del Secretario Dr. Rubén Medina Martínez, Acudieron A Protocolizar El Acta Ante El Notario Público Lic. Carlos Vázquez, Quedando De Esta Manera Formalmente Conformada La Asociación. Posteriormente A Sugerencia De Propios Miembros De La Femego Que Con Anterioridad Habían Visitado Nuestra Ciudad Con El Fin De Otorgar Pláticas Magistrales A Los Socios, Se Hizo La Petición De Ingreso A La Federación Mexicana De Asociaciones De Ginecología Y Obstetricia A. C. En La Ciudad De México Por Parte Del Dr. Juan Antonio Jiménez González, Quien Fue Comisionado Para Ello. En La Relatoría Se Expone Que Durante La Reunión De Ingreso A La Federación Existió Cierto Impedimento Ya Que Existían Otras Asociaciones Que Tenían Muchos Años Solicitando Su Ingreso Y No Entendían Por Qué A Una Asociación Tan Joven Se Le Daría Oportunidad De Ingresar A Tan Poco Tiempo De Haber Sido Creada. Ante Esta Disyuntiva, Hubo Médicos Que Previamente Nos Habían Visitado Que Hablaron A Nuestro Favor Como El Dr. Carlos Macgregor, El Dr. Samuel Katcmer, El Dr. Carlos Hinojosa Ríos, El Dr. José Roberto Ahued Ahued, Hasta Que El Dr. Efraín Vázquez Benítez Tomó La Palabra Y Aludiendo A Las Visitas Que Muchos De Los Maestros De La Federación Habían Realizado Previamente A Nuestra Ciudad, Reconoció La Preparación Docente Y El Gran Interés Académico Existente Por Parte De Los Socios, Por Lo Que Solicitó Una Votación Para De Esta Manera Decidir El Ingreso A La Federación. Fue De Esta Manera Que Al Resultar Favorecidos, Nuestra Asociación Ingresó A La Femego En El Mes De Mayo De 1984. En El Mes De Diciembre Del Año 1989, El Nombre De La Agrupación Fue Cambiado A Colegio De Ginecología Y Obstetricia De Celaya Gto. A. C. De Acuerdo A Las Actas Existentes Ante El Notario Público De La Ciudad El Lic. Jorge Chaurand Arzate. Es Así Como Las Actividades Académicas Y Sociales Continuaron Y Se Han Perpetuado Hasta Esta Fecha Entre Los Socios Agremiados Siempre Con Un Espíritu De Humanismo Y Academia Que Han Permitido El Crecimiento De Nuestro Colegio Para Ser Hoy Por Hoy, Uno De Los Más Importantes De La V Región De La Femecog (federación Mexicana De Colegios De Obstetricia Y Ginecología, A. C. )
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                  <i class="icon-plus"></i>Objetivos</a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner text-justify">
                      
                    </div>
                  </div>
                </div>                
              </div>
              <!--end: Accordion -->
            </div>
          </div>
        </section>               
      </div>
    </div>
  </div>
@endsection