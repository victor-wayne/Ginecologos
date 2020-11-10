@extends('ginecologos.base')

@section('custom_css')
<style>
  /*jssor slider loading skin spin css*/
  .jssorl-009-spin img {
      animation-name: jssorl-009-spin;
      animation-duration: 1.6s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
  }

  @keyframes jssorl-009-spin {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
  }

  /*jssor slider arrow skin 106 css*/
  .jssora106 {display:block;position:absolute;cursor:pointer;}
  .jssora106 .c {fill:#fff;opacity:.3;}
  .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
  .jssora106:hover .c {opacity:.5;}
  .jssora106:hover .a {opacity:.8;}
  .jssora106.jssora106dn .c {opacity:.2;}
  .jssora106.jssora106dn .a {opacity:1;}
  .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

  /*jssor slider thumbnail skin 101 css*/
  .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
  .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
  .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
  .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
  .jssort101 .p:hover{padding:2px;}
  .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
  .jssort101 .p:hover.pdn{padding:0;}
  .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
  .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
  .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
  .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
  .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
</style>
@endsection

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
          <h4>¿Quiénes Somos?</h4>
      </div>
    </div>
</div>

<div class="row-fluid">

    <div class="span4 well" style="float:left;">
        <div class="centered">
            <i class="icon-circled icon-64 icon-suitcase active"></i>
            <h4>Misión</h4>
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
            <h4>Visión</h4>
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

<div class="row">
  <div class="span12">
    <div class="divider">    
      <h4>Galería</h4>
    </div>
  </div>
</div>

<div class="row-fluid">
  <div class="span12 well" style="float:left;padding:1%;">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
      <!-- Loading Screen -->
      <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
          <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
      </div>
      <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
          
          @foreach ($galeria as $img)                        
          <div>                        
            <img data-u="image" src="{{ asset('assets/img/galeria/'.$img)}}" />
            <img data-u="thumb" src="{{asset('assets/img/galeria/'.$img)}}" />
          </div>
          @endforeach
        
          
      </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation</a>
      <!-- Thumbnail Navigator -->
      <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
          <div data-u="slides">
              <div data-u="prototype" class="p" style="width:190px;height:90px;">
                  <div data-u="thumbnailtemplate" class="t"></div>
                  <svg viewbox="0 0 16000 16000" class="cv">
                      <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                      <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                      <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                  </svg>
              </div>
          </div>
      </div>
      <!-- Arrow Navigator -->
      <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
              <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
              <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
          </svg>
      </div>
      <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
          <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
              <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
              <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
              <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
          </svg>
      </div>
  </div>                                                                
  </div>
</div>
</div>
@endsection

@section('custom_sccript')
<script type="text/javascript">
  window.jssor_1_slider_init = function() {

      var jssor_1_SlideshowTransitions = [
        {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
        {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
      ];

      var jssor_1_options = {
        $AutoPlay: 1,
        $SlideshowOptions: {
          $Class: $JssorSlideshowRunner$,
          $Transitions: jssor_1_SlideshowTransitions,
          $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
          $Class: $JssorThumbnailNavigator$,
          $SpacingX: 5,
          $SpacingY: 5
        }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

      /*#region responsive code begin*/

      var MAX_WIDTH = 980;

      function ScaleSlider() {
          var containerElement = jssor_1_slider.$Elmt.parentNode;
          var containerWidth = containerElement.clientWidth;

          if (containerWidth) {

              var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

              jssor_1_slider.$ScaleWidth(expectedWidth);
          }
          else {
              window.setTimeout(ScaleSlider, 30);
          }
      }

      ScaleSlider();

      $Jssor$.$AddEvent(window, "load", ScaleSlider);
      $Jssor$.$AddEvent(window, "resize", ScaleSlider);
      $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
      /*#endregion responsive code end*/
  };
</script>
<script type="text/javascript">jssor_1_slider_init();
</script>
@endsection