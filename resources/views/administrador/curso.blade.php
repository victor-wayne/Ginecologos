@extends('administrador.base')
@section('seccion1')
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <!--<h3>Overview</h3>
              <p>
                Overview of the template, its contents, and how to get started with serenity template..
              </p>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('seccion2')
<section id="breadcrumb">
  <div class="container">
    <div class="row">
      <div class="span12">
        <ul class="breadcrumb notop">
          <li><a href="/admin">Cursos</a><span class="divider">/</span></li>
          <li class="active">{{$curso->nombre}}</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="maincontent">
  <div class="container" style="border: 0px solid red;padding:10px;">


    <div class="row">
      <div class="span4">
        <div class="well" style="background: #fff;">
          <div class="centered">
            <img src="{{ asset('assets/img/'.$curso->uri_miniatura) }}" alt="Portada" width="250px" style="border: 0px solid;border-radius:10px;"/>
            <h4>{{$curso->nombre}}</h4>
            <div class="dotted_line">
            </div>
            <ul>
              <li><strong>Total videos del curso:</strong> {{count($curso->temas)}}</li>
              <li><strong>Total visitas:</strong> {{count($curso->temas)}}</li>
            </ul>
            <p>
              {{$curso->descripcion}}
            </p>
          </div>
        </div>
      </div>
      <div class="span8">
        <div class="well" style="background: #fff;">
          <div class="">            
            <h4>Detalle Curso</h4>
            <a href="#modal" style="float: right;" role="button" class="btn btn-success" 
            data-toggle="modal" onclick="getFormTema('{{ url('/admin/curso/'.$curso->id.'/tema/0/form/') }}');">
              Agregar Video
            </a><br>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <div class="dotted_line">
            </div>
            <div class="row-fluid" style="">
                @foreach ($curso->temas as $tema)
                <div class="span4 centered" style="">                  
                  <ul style="text-align: left;">
                  <li><img src="{{ asset('assets/img/'.$tema->uri_miniatura) }}" alt="tema" width="150px" style="border: 0px solid;border-radius:10px;"/></li>
                  <li><strong>Nombre:</strong> {{$tema->nombre}}</li>
                  <li><strong>Autor:</strong> {{$tema->autor}}</li>
                  <li><strong>Duracion:</strong> {{$tema->duracion}}</li>
                  <li><strong>Descripcion:</strong>{{$tema->descripcion}}</li>
                  <li><a href="#modal" onclick="getFormTema('{{ url('/admin/curso/'.$curso->id.'/tema/'.$tema->id.'/form/') }}');" role="button" data-toggle="modal">Detalles</a></li>
                  </ul>
                </div>
                @endforeach                
            </div>
          </div>
        </div>
      </div>      
    </div>
    
  </div>
</section>
@endsection

@section('modal-title')
{{'Agregar Video'}}
@endsection
@section('modal-content')
<div id="modal-content">
<form class="form-horizontal" method="POST" action="{{ route('savetema') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="curso_id" value="{{$curso->id}}" />
  <div class="control-group">
    <label class="control-label" for="inputNombre">Nombre:</label>
    <div class="controls">
      <input class="input-xlarge" type="text" name="nombre" placeholder="Nombre del tema" required/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputNombre">Autor:</label>
    <div class="controls">
      <input class="input-xlarge" type="text" name="autor" placeholder="Nombre del autor" required/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputNombre">Duracion:</label>
    <div class="controls">
      <input class="input-xlarge" type="text" name="duracion" placeholder="Duracion del video" required/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Descripcion</label>
    <div class="controls">
      <textarea class="input-xlarge" name="descripcion" placeholder="Descripcion del curso" required></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPortada">Portada:</label>
    <div class="controls">      
      <input class="input-xlarge" type="file" name="uri_miniatura" />      
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPortada">Video:</label>
    <div class="controls">      
      <input class="input-xlarge" type="file" name="uri_multimedia" />      
    </div>
  </div>
  <div class="control-group">
    <div class="controls">                  
      <button type="submit" class="btn btn-success" onclick="modalLoading.show();">Guardar</button>
    </div>
  </div>
</form>
</div>
@endsection