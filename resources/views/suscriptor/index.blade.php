@extends('suscriptor.base')

@section('seccion1')
<?php //dump($cursos) ?>
<section id="subintro">
    <div class="jumbotron subhead" id="overview">            
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">              
              <h4 style="color:#fff;">
                @if (session('status'))
                  <i class="icon-warning-sign"></i>{{session('status')}}
                @endif
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection

@section('seccion2')

@if (isset(Auth::user()->transaction_id) && 
     isset(Auth::user()->transaction_status) &&
     Auth::user()->transaction_status == 'approved'
    )
    

<section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="#">Home</a><span class="divider">/</span></li>
            <li class="active">Cursos</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="filter">
            <li class="all active"><a href="#" class="btn btn-color">Categorias</a></li>            
          </ul>
        </div>
      </div>
      <div class="row">
        <ul class="portfolio-area da-thumbs">
          @foreach ($cursos as $curso)            
            <li class="portfolio-item2" data-id="id-0" data-type="web">
              <div class="span3">
                <div class="thumbnail">
                  <div class="image-wrapp">                                      
                    <img src="{{ asset('assets/img/'.$curso->uri_miniatura) }}" alt="Curso" style="width: 100%;height:170px;" />                    
                    <article class="da-animate da-slideFromRight" style="display: block;">
                    <h4>{{ $curso->nombre }}</h4>
                      <a href="{{url('/suscriptor/curso/'.$curso->id)}}"><i class="icon-rounded icon-48 icon-link"></i></a>                   
                    </article>
                  </div>
                </div>
              </div>
            </li>
          @endforeach                    
        </ul>
      </div>
      <div class="row">
        <div class="span12">
          <div class="pagination">
            <ul>
              <li><a href="#">Prev</a></li>              
              <li class="active"><a href="#">1</a></li>              
              <li><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
@else
@include('suscriptor.unsuscriptor')  
@endif
@endsection
