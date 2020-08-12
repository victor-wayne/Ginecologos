@extends('ginecologos.base')
@section('title','Afiliate con Nosotros')

@section('seccion1')
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <!--<div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Afiliate con nosotros</h3>
              <p>
                Lorem ipsum dolor sit amet, modus salutatus honestatis ex mea. Sit cu probo putant. Nam ne impedit atomorum.
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
            <li class="active">Suscripcion</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">

        <div class="row">
            <div class="span12">
                <article>
                    <div class="heading">
                        <h4>Planes</h4>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="row">
                        <div class="span8">
                            <!-- start flexslider -->
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                    <img src="{{ asset('assets/img/slides/sequence/banner-ginecologos2.jpeg') }}" alt="" />
                                    </li>
                                    <li>
                                    <img src="{{ asset('assets/img/slides/sequence/banner-ginecologos.jpeg') }}" alt="" />
                                    </li>
                                    <li>
                                    <img src="{{ asset('assets/img/slides/sequence/banner-ginecologos1.jpeg') }}" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <!-- end flexslider -->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non ultricies 
                                libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer 
                                fringilla, ipsum placerat ultrices elementum, felis nisi finibus urna, vitae 
                                ultrices tellus sapien vitae massa. Suspendisse cursus luctus felis, in condimentum
                                 tortor laoreet quis. Ut posuere vitae ligula vel venenatis. Vestibulum a tortor 
                                 eget purus hendrerit luctus. Ut sed quam sit amet ligula imperdiet consequat. 
                                 Duis est lorem, mattis at enim gravida, congue dapibus elit. Nam et venenatis 
                                 lorem. Donec facilisis condimentum imperdiet. 
                            </p>                        
                        </div>
                        <div class="span4">
                            <div class="project-widget">
                            <h4><i class="icon-circled icon-48 icon-film active"></i><span style="color:#d98880;"><strong>Planes de Suscripcion</strong></span></h4>
                            <ul class="project-detail">
                                <li><label>Tipo Plan :</label> Premium </li>
                                <li><label>Beneficios :</label> Acceso a contenido exclusivo</li>
                                <li><label>Precio :</label> <span style="color:#239b56;"><strong>$999.99 MXN</strong></span> !Por tiempo limitado¡</li>                    
                                <li class="text-center">
                                    <a href="#"><img src="assets/img/paypal.png" alt="Pago" width="96px" /></a> 
                                </li>
                                <li class="text-justify" style="font-size:10px;">
                                    <strong>TODOS LOS CURSOS</strong> incluyen una <strong>
                                    Garantía de devolución de dinero al 100%</strong> durante sus primeros 30 días de servicio. ¡Obtenga su suscripcion ahora!
                                    <a href="#">Apilca terminos y condiciones </a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </article>          
            </div>    
        </div><!--end row-->
        
        <div class="row">
            <div class="span12">
                <h4>Contenido</h4>
                <!-- start: Accordion -->
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                <i class="icon-minus"></i> Cursos
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-body in collapse" style="height: auto;">
                            <div class="accordion-inner">
                                <ol>
                                    <li>Curso Basico</li>
                                    <li>Curso Intermedio</li>
                                    <li>Curso Avanzado</li>
                                    <li>Examen</li>
                                </ol>
                            </div>
                        </div>
                    </div>                                        
                </div>
                <!--end: Accordion -->
            </div>
        </div> <!--end row-->  

    </div>
</section>
@endsection