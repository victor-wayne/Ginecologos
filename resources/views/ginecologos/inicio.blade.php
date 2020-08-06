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
                           <h2>Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                           <br>
                           <h3>#JuntosSomosMejores</h3>
                           <p>
                              Desde 19XX hemos formado un grupo de médicos enfocados en la actualización y el conocimiento científico para brindar atención médica de calidad.
                           </p>
                           <a class="btn btn-success" href="#">Learn more &raquo;</a>
                        </div>
                        <img class="slider_img animate-in" src="{{ asset('assets/img/slides/sequence/banner-ginecologos2.jpeg') }}" alt="">
                     </li>
                     <!-- Layer 2 -->
                     <li>
                        <div class="info">
                           <h2>Colegio de Ginecología <br>y Obstetricia de Celaya</h2>
                           <br>
                           <h3>#JuntosSomosMejores</h3>
                           <p>
                              Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                           </p>
                           <a class="btn btn-success" href="#">Learn more &raquo;</a>
                        </div>
                        <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos.jpeg') }}" alt="">
                     </li>
                     <!-- Layer 3 -->
                     <li>
                        <div class="info">
                           <h2>Far from ugly</h2>
                           <br>
                           <h3>Latest technology</h3>
                           <p>
                              Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                           </p>
                           <a class="btn btn-success" href="#">Learn more &raquo;</a>
                        </div>
                        <img class="slider_img" src="{{ asset('assets/img/slides/sequence/banner-ginecologos1.jpeg') }}" alt="">
                     </li>
                     <!-- Layer 4 -->
                     <li>
                        <div class="info">
                           <h2>Smart and fresh</h2>
                           <br>
                           <h3>Rich of features</h3>
                           <p>
                              Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                           </p>
                           <a class="btn btn-success" href="#">Learn more &raquo;</a>
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
</seccion>
@endsection