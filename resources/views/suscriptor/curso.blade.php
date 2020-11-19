@extends('suscriptor.base')
@section('title',$curso->nombre)
@section('seccion1')
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <!--<div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Portfolio 4 columns</h3>
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
          <li><a href="/suscriptor">Inicio</a><span class="divider">/</span></li>
          <li class="active">{{$curso->nombre}}</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="maincontent">
  <div class="container">
    <div class="row" style="border: 0px solid;">
      <div class="span12">
        <article>
          <div class="heading">
            <h4>{{$curso->nombre}}</h4>
          </div>
          <div class="clearfix">
          </div>
          <div class="row">
            <div class="span8" style="">
              <!-- start flexslider -->
              <div class="">
                <iframe 
                  id="video"
                  width="100%"     
                  height="400px"              
                  class="video-js"
                  src="#" 
                  frameborder="0" 
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                  allowfullscreen
                  onload="frameLoaded()">
                </iframe>
                <!--video-->
                <!--<video
                  id="video"
                  class="video-js"
                  controls
                  preload="auto"                  
                  poster=""    
                  width="100%"              
                >                  
                  <source src="#" type="video/webm" />
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that                    
                  </p>
                </video>-->
              </div>
              <!-- end flexslider -->
              <div id="tdescripcion" style="border: 0px solid;overflow:hidden;overflow-wrap: break-word;padding:1%;">
                Suscribite al mejor contenido, con mas de 100 horas de video, mas de 50 manuales y cientos de tutoriales.
              </div>
            </div>
            <div class="span4">
              <div class="vjs-playlist">                
                  <!--contenedor de la playlist creado en tiempo de ejecucion-->                               
              </div>
            </div>
          </div>
        </article>
        <!-- end article full post -->
      </div>
    </div>
  </div>
</section>
@endsection

@section('custom_js')
<script>
modalLoading.show();
var obj=[];
@foreach ($curso->temas as $tema)   
  obj.push(
    //JSON.parse("{\"name\":\"{{$tema->nombre}}\",\"duracion\":\"{{$tema->duracion}}\",\"sources\":[{\"src\":\"{{asset('assets/videos/'.$tema->uri_multimedia)}}\",\"type\":\"video/mp4\"}],\"descripcion\":\"{{str_replace('+',' ',urlencode ($tema->descripcion))}}\"}")
    JSON.parse("{\"name\":\"{{$tema->nombre}}\",\"duracion\":\"{{$tema->duracion}}\",\"sources\":[{\"src\":\"{{'https://www.youtube.com/embed/'.$tema->uri_multimedia}}\",\"type\":\"video/mp4\"}],\"descripcion\":\"{{str_replace('+',' ',urlencode ($tema->descripcion))}}\"}")
  );
@endforeach
  
  $(document).ready(function(){  
            
    var player = videojs('video');
    player.playlist(obj);
    //player.playlist.autoadvance(0);
    player.playlistUi();
    $(".video-dimensions").css({"width":"100%","height":"400px"});

    player.on('playlistitem', function() {

      var i= player.playlist.currentItem();
      var item = obj[i];

      var nodo_titulo = document.createElement("h3");                
      var textnode_titulo = document.createTextNode(item.name);   
      nodo_titulo.style.fontWeight="bold";
      nodo_titulo.appendChild(textnode_titulo);       
      
      var nodo_desc = document.createElement("p");
      var textnode_desc = document.createTextNode(item.descripcion);    
      nodo_desc.appendChild(textnode_desc);     
      
      var contenedor = document.getElementById("tdescripcion");                                   
      while (contenedor.hasChildNodes()) {  
        contenedor.removeChild(contenedor.firstChild);
      } 

      contenedor.appendChild(nodo_titulo);
      contenedor.appendChild(nodo_desc);

      //$( ".vjs-playlist-item" ).first().css( "color", "#53a575" );

      $(".vjs-playlist-item").on("click",function(){          
          modalLoading.show();
          $(".vjs-playlist-item").css({"color":"#fff"});
          $(this).css({"color":"#53a575"});
          setTimeout(function(){ frameLoaded(); }, 5000);
      });

    });

});

function frameLoaded(){
  modalLoading.hidden();
}

</script>
@endsection