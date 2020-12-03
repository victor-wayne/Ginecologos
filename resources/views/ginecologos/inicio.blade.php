@extends('ginecologos.base')
@section('title','Ginecologos')
@section('seccion1')
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
                           <h2 style="text-transform: capitalize;">Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                           <br>
                           <h3 style="text-transform: capitalize;">#JuntosSomosMejores</h3>
                           <p>
                              Desde 1984 hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
                           </p>
                           <a class="btn btn-success" href="#">Únete al Colegio</a>
                        </div>
                        <img class="slider_img animate-in" src="{{ asset('assets/img/slides/sequence/banner-ginecologos2.jpeg') }}" alt="">
                     </li>
                     <!-- Layer 2 -->
                     <li>
                        <div class="info">
                           <h2 style="text-transform: capitalize;">Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                           <br>
                           <h3 style="text-transform: capitalize;">#JuntosSomosMejores</h3>
                           <p>
                              Desde 1984 hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
                           </p>
                           <a class="btn btn-success" href="#">Únete al Colegio</a>
                        </div>
                        <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos.jpeg') }}" alt="">
                     </li>
                     <!-- Layer 3 -->
                     <li>
                        <div class="info">
                           <h2 style="text-transform: capitalize;">Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                           <br>
                           <h3 style="text-transform: capitalize;">#JuntosSomosMejores</h3>
                           <p>
                              Desde 1984 hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
                           </p>
                           <a class="btn btn-success" href="#">Únete al Colegio</a>
                        </div>
                        <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos1.jpeg') }}" alt="">
                     </li>

                     <!-- Layer 4 -->
                     <li>
                        <div class="info">
                           <h2>Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                           <br>
                           <h3 style="text-transform: capitalize;">#JuntosSomosMejores</h3>
                           <p>
                              Desde 1984 hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
                           </p>
                           <a class="btn btn-success" href="#">Únete al Colegio</a>
                        </div>
                        <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos3.jpeg') }}" alt="">
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
 </div>
</section>

<section id="maincontent">
   <div class="container">
      <div class="row">
         <div class="span3 features">
            <i class="icon-circled icon-32 icon-group left active"></i>
            <h4>Mesa Directiva</h4>
            <div class="dotted_line">
            </div>
            <p class="left">
                Conoce cómo está conformada nuestra Mesa Directiva 2020-2022
            </p>
            <a class="link" onclick="mostrarModal(1);">Ver más</a>
         </div>
         <div class="span3 features">
            <i class="icon-circled icon-32 icon-book left"></i>
            <h4>Consentimiento Informado.</h4>
            <div class="dotted_line">
            </div>
            <p class="left">
               Descarga aquí los formatos de consentimientos informados.
            </p>
            <a class="link" onclick="mostrarModal(4);">Ver más</a>
         </div>
         <div class="span3 features">
            <i class="icon-circled icon-32 icon-check left"></i>
            <h4>Beneficios</h4>
            <div class="dotted_line">
            </div>
            <p class="left">
                Algunos de los beneficios de formar parte del Colegio de Ginecología y Obstetricia de Celaya, A.C. son:
            </p>
            <a class="link" onclick="mostrarModal(3);">Ver más</a>
         </div>
         <div class="span3 features">
            <i class="icon-circled icon-32 icon-heart left"></i>
            <h4>Acción Social</h4>
            <div class="dotted_line">
            </div>
            <p class="left">
               Conoce nuestras acciones sociales en pro de la Sociedad
            </p>
            <a class="link" onclick="mostrarModal(2);">Ver más</a>
         </div>
      </div>
      <div class="row">
         <div class="span12">
            <div class="tagline centered">
               <div class="row">
                  <div class="span12">
                     <div class="tagline_text">
                        <h2>No te pierdas ningún evento del Colegio de Ginecología <br> y Obstetricia de Celaya, A.C.</h2>

                     </div>
                      <br>
                     <div class="btn-toolbar cta">
                        <a class="btn btn-large btn-color" href="#">
                           <i class="icon-calendar icon-white"></i> Próximos Eventos </a>

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
               <h3>Entradas al Blog</h3>
            </div>

            <div
                    class="fb-post"
                    data-width="495"
                    data-href="https://www.facebook.com/ColegiodeGinecologiadeCelaya/posts/180786256992128">
            </div>

            <div
                    class="fb-post"
                    data-width="495"
                    data-href="https://www.facebook.com/ColegiodeGinecologiadeCelaya/posts/174305144306906">
            </div>
         </div>
      </div><hr>

      <h2 align="center">Reconocimiento de la FEMECOG </h2><br>
      <div class="row-fluid">
         <div class="span12 well" style="float:left;padding:1%;">

            <div style="width: 96%;float: right;">
               <img src="{{ asset('assets/img/constancia.jpeg') }}" alt=""/>
            </div>
         </div>
      </div>
   </div>

</section>






@endsection