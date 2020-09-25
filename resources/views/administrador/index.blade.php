@extends('administrador.base')
@section('seccion1')
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Administración</h3>
              <p>
                Panel de Administración de cursos
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('seccion2')
<div class="container" style="border: 0px solid;">
    <!-- Docs nav
    ================================================== -->
    <div class="row">
      
        <div class="span3 bs-docs-sidebar" style="background: #fff;">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#body-page" onclick="document.body.scrollTop = 0;document.documentElement.scrollTop = 0;" class="active"><i class="icon-chevron-right"></i> General</a></li>                
                <li><a href="#contents"><i class="icon-chevron-right"></i>Cursos</a></li>
                <!--<li><a href="#html-template"><i class="icon-chevron-right"></i> HTML template</a></li>
                <li><a href="#what-next"><i class="icon-chevron-right"></i> What next?</a></li>-->
            </ul>
        </div>
      <div class="span9" style="background: #fff;">
        <!-- Download
        ================================================== -->
        <section id="general-template" class="doc" style="background: #fff;">
          <div class="page-header">
            <h3>General</h3>
          </div>
          <div class="row">
            <div class="span12 features">
              <i class="icon-circled icon-32 icon-suitcase left active"></i>
              <h4>Administracion de Suscripcion</h4>
              <div class="dotted_line">
              </div>
              <ul>
                <li>Administrar precios</li>
                <li>Suscripcion</li>
              </ul>
              <p class="left">
                Administrar pagina de suscripcion de usuarios, asignación de precios y detalles de la afiliación.
              </p>
              
            </div>
            <div class="span12 features">
              <i class="icon-circled icon-32 icon-plane left"></i>
              <h4>Administracion de usuarios</h4>
              <div class="dotted_line">
              </div>
              <ul>
                <li>Usuarios Registrados</li>
                <li>Bloqueo usuarios</li>
                <li>Permisos de usuario</li>
              </ul>
              <p class="left">
                Administrar usuarios registrados, acceso a contenido y bloque de los mismos. Permisos de usuario etc.
              </p>              
            </div>
            <!--<div class="span3 features">
              <i class="icon-circled icon-32 icon-leaf left"></i>
              <h4>Multipurpose template</h4>
              <div class="dotted_line">
              </div>
              <p class="left">
                Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
              </p>
              <a href="#">Learn more</a>
            </div> -->           
          </div>
        </section>


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
                            @if(file_exists(public_path().'\assets\img\\'.$curso->uri_miniatura))
                              <img src="{{ asset('assets/img/'.$curso->uri_miniatura) }}" alt="Curso" style="width: 100%;height:170px;" />
                            @else
                              <img src="{{ asset('assets/img/dummies/work4.jpg') }}" alt="Curso" style="width: 100%;height:170px;" />
                            @endif
                            <article class="da-animate da-slideFromRight" style="display: block;">                            
                              
                              <a href="#modal" role="button" data-toggle="modal" title="Editar"
                                 onclick="getForm('{{ url('/admin/curso/'.$curso->id.'/form/') }}');">
                                <i class="icon-32 icon-edit btn-warning" style="border-radius: 5px;"></i>
                              </a>
                              

                              <a href="#" data-toggle="tooltip" title="Eliminar"
                                 onclick="event.preventDefault();document.getElementById('delete-curso-form-{{$curso->id}}').submit();">

                                 <i class="icon-32 icon-trash btn-danger" style="border-radius: 5px;"></i>

                              </a>
                              <form id="delete-curso-form-{{$curso->id}}" action="{{url('/admin/curso/'.$curso->id)}}" method="POST" style="display: none;">
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
                                       
              <div class="left" style="width:100%;height: 100px;overflow: hidden;text-overflow: ellipsis;">                
                {{ $curso->descripcion }}             
              </div>
              
              <p>
                <a href="{{url('/admin/curso/'.$curso->id)}}">Ver Contenido</a>
              </p><br><br>
            </div>
                        
            
            @endforeach                                                 
            
          </div>
        </section>


        <!-- Contents
        ================================================== -->
        
        <!-- HTML template
        ================================================== -->
        <!--<section id="html-template" class="doc">
          <div class="page-header">
            <h3>Basic HTML template</h3>
          </div>
          <p>
            With a brief intro into the contents out of the way, we can focus on putting Bootstrap to use. To do that, we'll utilize a basic HTML template that includes everything we mentioned in the <a href="#file-structure">File structure</a>.
          </p>
          <p>
            Now, here's a look at a <strong>typical HTML file</strong>:
          </p>
          <pre class="prettyprint linenums">
				 &lt;!DOCTYPE html&gt; &lt;html&gt; &lt;head&gt; &lt;title&gt;Bootstrap 101 Template&lt;/title&gt; &lt;/head&gt; &lt;body&gt; &lt;h1&gt;Hello, world!&lt;/h1&gt; &lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt; &lt;/body&gt; &lt;/html&gt;
			</pre>
          <p>
            To make this <strong>a Bootstrapped template</strong>, just include the appropriate CSS and JS files:
          </p>
          <pre class="prettyprint linenums">
				 &lt;!DOCTYPE html&gt; &lt;html&gt; &lt;head&gt; &lt;title&gt;Bootstrap 101 Template&lt;/title&gt; &lt;!-- Bootstrap --&gt; &lt;link href="css/bootstrap.min.css" rel="stylesheet" media="screen"&gt; &lt;/head&gt; &lt;body&gt; &lt;h1&gt;Hello, world!&lt;/h1&gt; &lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt; &lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt; &lt;/body&gt; &lt;/html&gt;
			</pre>
          <p>
            <strong>And you're set!</strong> With those two files added, you can begin to develop any site or application with Bootstrap.
          </p>
        </section>-->
        <!-- Next
        ================================================== -->
        <!--<section id="what-next" class="doc">
          <div class="page-header">
            <h3>What next?</h3>
          </div>
          <p>
            Read Serenity documentation file that included in the download package and enjoy the template! For template support please send email via <a href="https://wrapbootstrap.com/user/iWebstudio">our profile contact form</a>.
          </p>
        </section>-->
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