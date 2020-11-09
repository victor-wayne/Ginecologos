@extends('ginecologos.base')
@section('title','Blog')
@section('seccion1')
<section id="subintro" style="background:#53a575;">
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
            <li><a href="/">Inicio</a><span class="divider">/</span></li>
            <li class="active">Blog</li>
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
              <h4>Nuestro blog en Facebook</h4>
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="span5">
                
                <div class="">

                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0" nonce="UFDVkeKD"></script>
    
                    <div class="fb-page" data-href="https://www.facebook.com/ColegiodeGinecologiadeCelaya/" data-tabs="timeline" data-width="450" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ColegiodeGinecologiadeCelaya/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ColegiodeGinecologiadeCelaya/">Colegio de Ginecología y Obstetricia de Celaya A.C.</a></blockquote></div>
                </div>

              </div>
              <div class="span7">
                <video controls loop width="100%" height="400px;">
                    <source src="{{ asset('assets/videos/blog_video.mp4') }}" type="video/mp4">                    
                    Your browser does not support the video tag.
                  </video> 
              </div>
            </div>
          </article>
          <!-- end article full post -->
        </div>
      </div>
    </div>
  </section>

@endsection

@section('custom_sccript')
<script>
    $(document).ready(function(){        
    });    
</script>    
@endsection