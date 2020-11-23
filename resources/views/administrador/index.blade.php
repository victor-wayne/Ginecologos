@extends('administrador.base')
@section('seccion1')
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">              
              <p><strong>
                Panel de Administración de cursos
              </p></strong>                
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('seccion2')
<div class="container" style="border: 0px solid;">
    <div class="row">
      
        <div class="span3 bs-docs-sidebar" style="background: #fff;">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#body-page" onclick="document.body.scrollTop = 0;document.documentElement.scrollTop = 0;" class="active"><i class="icon-bookmark-empty"></i>General</a></li>                
                <li><a href="https://conferencias.cgocelaya.com/" target="_blank"><i class="icon-comment-alt"></i>Agregar Conferencía</a></li>
            </ul>
        </div>
      <div class="span9" style="background: #fff;">
        <!-- Download
        ================================================== -->
        <!--Cursos--->
        <section id="curso-template" class="doc" style="background: #fff;">
          <div class="page-header">
            <h3>Cursos</h3>
            <a href="#modal" style="float: right;" role="button" class="btn btn-success" 
               data-toggle="modal" onclick="getForm('{{ url('/admin/curso/0/form/') }}');">Agregar Curso</a>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif

            @if (session('status'))
              <div class="alert">                                    
                <p><i class="icon-warning-sign"></i>{{session('status')}}</p>
              </div>                  
            @endif

          </div>
          <div class="row">
            @foreach ($cursos as $curso)  
            <div class="span2 features">
              <i class="icon-circled icon-32 icon-suitcase left active"></i>
            <h6>{{ $curso->nombre }}</h6>
              <div class="dotted_line">                
              </div>
                        
              <div style="">
                <ul class="portfolio-area da-thumbs">                         
                    <li class="portfolio-item2" data-id="id-0" data-type="web">
                      <div class="centered">
                        <div class="thumbnail">
                          <div class="image-wrapp">                            
                              <img src="{{ asset('assets/img/'.$curso->uri_miniatura) }}" alt="Curso" style="width: 100%;height:170px;" />                            
                            <article class="da-animate da-slideFromRight" style="display: block;">                                                          
                              <a href="#modal" role="button" data-toggle="modal" title="Editar"
                                 onclick="getForm('{{ url('/admin/curso/'.$curso->id.'/form/') }}');">
                                <i class="icon-32 icon-edit btn-warning" style="border-radius: 5px;"></i>
                              </a>                              
                              <a href="#" data-toggle="tooltip" title="Eliminar"
                                 onclick="event.preventDefault(); confirm('¿Desea borrar el curso seleccionado?') ? document.getElementById('delete-curso-form-{{$curso->id}}').submit() : console.log('No se borro el curso');">

                                 <i class="icon-32 icon-trash btn-danger" style="border-radius: 5px;"></i>

                              </a>
                              <form id="delete-curso-form-{{$curso->id}}" action="{{route('cursodel', [$curso->id])}}" method="POST" style="display: none;">
                                @csrf
                                <input type="hidden" value="{{$curso->id}}" name="curso_id" />                                
                              </form>                                                      
                            </article>
                          </div>
                        </div>
                      </div>
                    </li>
                </ul>
              </div>                                       
              <div class="left" style="width:100%;height: 100px;overflow: hidden;text-overflow: ellipsis;background: #f7f9f9;">                
                <p><strong>Descripcion:</strong></p>
                {{ $curso->descripcion }}             
              </div>              
              <p>
                <a href="{{url('/admin/curso/'.$curso->id)}}"><strong>Ver Contenido</strong></a>
              </p><br><br>
            </div>
                        
            
            @endforeach                                                 
            
          </div>

          <div class="page-header">
            <h3>Mensajes recibidos</h3>            
          </div>
          <!--Contactos-->
          <div class="row">
            <table class="table table-border">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Asunto</th>
                  <th>Mensaje</th>
                  <th>Fecha</th>
                </tr>
              </thead>
              <tbody>
            @foreach ($contactos as $contacto)  
              <tr>
                <td>{{$contacto->id}}</td>
                <td>{{$contacto->email}}</td>
                <td>{{ ucfirst(strtolower($contacto->asunto))}}</td>
                <td>{{ ucfirst(strtolower($contacto->mensaje))}}</td>
                <td>{{ ucfirst(strtolower($contacto->created_at))}}</td>
              </tr>
            @endforeach 
              </tbody>
            </table>                                                           
          </div>

        </section>
      </div>
    </div>
</div>
@endsection
@section('modal-title')
{{'Agregar Curso'}}
@endsection

@section('modal-content')
<div id="modal-content">
<form class="form-horizontal" method="POST" action="{{ route('savecurso') }}" enctype="multipart/form-data">
  @csrf
  <div class="control-group">
    <label class="control-label" for="inputEmail">Nombre:</label>
    <div class="controls">
      <input class="input-xlarge" type="text" name="nombre" placeholder="Curso" required/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Descripcion</label>
    <div class="controls">
      <textarea class="input-xlarge" name="descripcion" rows="4" cols="50" maxlength="100" placeholder="Descripcion del curso" required></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPortada">Portada:</label>
    <div class="controls">      
      <input class="input-xlarge" type="file" name="uri_miniatura" />      
    </div>
  </div>
  <div class="control-group">
    <div class="controls">                  
      <button type="submit" class="btn btn-success">Guardar</button>
    </div>
  </div>
</form>
</div>
@endsection

@section('script')
    <script type="text/javascript">
      $(document).ready(function(){
        
      });

      function eliminar(id){
        var form = $("#delete-curso-form-"+id);
        alert(form);
      }
    </script>
@endsection