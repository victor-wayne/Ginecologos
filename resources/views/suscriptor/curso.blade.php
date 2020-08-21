@extends('suscriptor.base')
@section('seccion1')
<?php //dump($curso->temas) ?>
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
            <li><a href="/suscriptor">Home</a><span class="divider">/</span></li>
          <li class="active">{{$curso->nombre}}</li>
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
            <h4></h4>
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="span8">
                <video
                  id="my-video"
                  class="video-js"
                  controls
                  preload="auto"
                  
                  poster=""
                  data-setup="{}"
                >
                  <source src="http://demo.codesamplez.com/html5/video/sample" type="video/mp4" />
                  <!--<source src="http://demo.codesamplez.com/html5/video/sample" type="video/webm" />-->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                      >supports HTML5 video</a
                    >
                  </p>
                </video>
                <!-- start flexslider -->
                <!--<div class="flexslider">
                  <ul class="slides">
                    <li>
                      <img src="assets/img/slides/flexslider/img1.jpg" alt="" />
                    </li>
                    <li>
                      <img src="assets/img/slides/flexslider/img2.jpg" alt="" />
                    </li>
                    <li>
                      <img src="assets/img/slides/flexslider/img3.jpg" alt="" />
                    </li>
                  </ul>
                </div>-->
                <!-- end flexslider -->
                <p>
                  {{$curso->descripcion}}
                </p>
              </div>
              <div class="span4">
                <div class="project-widget">
                <h4><i class="icon-48 icon-beaker"></i>{{$curso->nombre}}</h4>
                  <ul class="project-detail">
                    @foreach ($curso->temas as $tema) 
                    <li><i class="icon-play"></i><a href="#">{{$tema->nombre}}</a></li>
                    @endforeach
                     
                  </ul>
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