@extends('ginecologos.base')
@section('title','Nosotros')
@section('seccion1')
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <!--<div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Nosotros</h3>
              <p>
                Somos una empresa comprometida con brindar el mejor servicio de Ginecologia en la region.
              </p>
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
            <li><a href="#">Home</a><span class="divider">/</span></li>
            <li class="active">Nosotros</li>
          </ul>
           
        </div>
      </div>
    </div>
  </section>

  <section id="maincontent">
    <div class="container">

      <div class="row">
        <div class="span12">
          <!--<ul class="breadcrumb notop">
            <li><a href="#">Home</a><span class="divider">/</span></li>
            <li class="active">Blog right sidebar</li>
          </ul>-->
           <h4>Nosotros</h4>
        </div>
      </div>

      <div class="row">
        <div class="span4">
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

        <div class="span4">
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

        <div class="span4">
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
      </div>-
      <div class="row">
        <div class="span12">
          <div class="divider">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <h4>¿Quines somos?</h4>
          <!-- start: Accordion -->
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						    <i class="icon-minus"></i> Historia</a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  Fomentar la educación continua de los médicos Gineco-Obstetras de Celaya, así como promover actividades en favor de la salud de la mujer.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
						<i class="icon-plus"></i>Objetivos</a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  Ser una institución que se caracterice por su innovación, ética y que promueva la excelencia en el ejercicio profesional de sus miembros para contribuir a la sociedad.
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
						<i class="icon-plus"></i>Otros</a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  
                </div>
              </div>
            </div>
          </div>
          <!--end: Accordion -->
        </div>
      </div>
    </div>
  </section>
@endsection