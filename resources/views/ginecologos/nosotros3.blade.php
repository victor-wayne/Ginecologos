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
<div class="container">
    <div class="row">
        <div class="span12">
          <div class="divider">
              <h4>Nosotros</h4>
          </div>
        </div>
    </div>
<div class="row-fluid" style="">
    <div class="span8 well" style="float:left;padding:1%;">
        
            <div style="width: 65%;float: left;">
                <img src="{{ asset('assets/img/slides/nosotros/img4.jpg') }}" alt=""/>
            </div>
            
            
            <div style="width: 32%;float: left;margin-left:1%;;margin-bottom:1%;">
                    <img src="{{ asset('assets/img/slides/nosotros/img1.jpg') }}" alt=""/>
            </div>
            <div style="width: 32%;float: left;margin-left:1%;">
                <img src="{{ asset('assets/img/slides/nosotros/img10.jpg') }}" alt="" />
            </div>
            
        
    </div>
    <div class="span4 well" style="float:left;padding:1%;">
        <div class="centered">
            <i class="icon-circled icon-64 icon-leaf active"></i>
            <h4><span style="color:#bc7475;font-weight:bold; ">Colegio de Ginecología y Obstetricia de Celaya</span></h4>
            <div class="dotted_line">
            </div>              
          </div>
          <div style="height: 195px;">
           
                <br>Desde el año 1984 hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad. 
                <br><strong><a href="#">#JuntosSomosMejores</a></strong>              
        </div>
    </div>
</div>





<div class="row">
    <div class="span12">
      <div class="divider">
          
      </div>
    </div>
</div>

<div class="row">
    <div class="span12">
      <div class="divider">
          <h4>¿Quienes Somos?</h4>
      </div>
    </div>
</div>

<div class="row-fluid">

    <div class="span4 well" style="float:left;">
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

    <div class="span8 well" style=";float:left;">
        <div style="width: 65%;float: left;">
            <img src="{{ asset('assets/img/slides/nosotros/img2.jpg') }}" alt=""/>
        </div>
        
        
        <div style="width: 32%;float: left;margin-left:1%;;margin-bottom:1%;">
                <img src="{{ asset('assets/img/slides/nosotros/img3.jpg') }}" alt=""/>
        </div>
        <div style="width: 32%;float: left;margin-left:1%;">
            <img src="{{ asset('assets/img/slides/nosotros/img5.jpg') }}" alt="" />
        </div>            
    </div>
    
</div>

<div class="row">
    <div class="span12">
      <div class="divider">
          <hr>
      </div>
    </div>
</div>

<div class="row">
    <div class="span12">
      <div class="divider">
          <h4>Historia</h4>
      </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span8 well" style="float:left;padding:1%;">
        
            <div style="width: 96%;float: left;">
                <img src="{{ asset('assets/img/slides/nosotros/img9.jpg') }}" alt=""/>
            </div>                                                       
    </div>
    <div class="span4 well" style="float:left;">
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
</div>
@endsection