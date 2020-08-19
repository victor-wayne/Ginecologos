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
                           <h3>#JuntosSomosMejores</h3>
                           <p>
                              Desde 19XX hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
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
               Nuestra Mesa Directiva 2020-2021 tiene múltiples objetivos, tales como:
            </p>
            <a href="#">Ver más</a>
         </div>
         <div class="span3 features">
            <i class="icon-circled icon-32 icon-book left"></i>
            <h4>Reglamento</h4>
            <div class="dotted_line">
            </div>
            <p class="left">
               Pendiente info
            </p>
            <a href="#">Ver más</a>
         </div>
         <div class="span3 features">
            <i class="icon-circled icon-32 icon-check left"></i>
            <h4>Beneficios y documentación</h4>
            <div class="dotted_line">
            </div>
            <p class="left">
               Conoce los beneficios de formar parte de nuestro Colegio, así como la documentación necesaria para integrarte.
            </p>
            <a href="#">Ver más</a>
         </div>
         <div class="span3 features">
            <i class="icon-circled icon-32 icon-heart left"></i>
            <h4>Acción Social</h4>
            <div class="dotted_line">
            </div>
            <p class="left">
               Conoce nuestras acciones sociales en pro de la Sociedad
            </p>
            <a href="#">Ver más</a>
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
                    data-width="500"
                    data-href="https://www.facebook.com/victorwatsdj.riverahernandez/posts/10223640960757930">
            </div>
            <div
                    class="fb-post"
                    data-width="500"
                    data-href="https://www.facebook.com/victorwatsdj.riverahernandez/posts/10223738739482337">
            </div>
            <div
                    class="fb-post"
                    data-width="500"
                    data-href="https://www.facebook.com/victorwatsdj.riverahernandez/posts/10223532411724272">
            </div>



         </div>
      </div>
   </div>

</section>






@endsection