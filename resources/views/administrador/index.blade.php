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
<div class="container" style="border: 0px solid;">
    <!-- Docs nav
    ================================================== -->
    <div class="row">
      
        <div class="span3 bs-docs-sidebar" style="background: #fff;">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#body-page" onclick="document.body.scrollTop = 0;document.documentElement.scrollTop = 0;" class="active"><i class="icon-chevron-right"></i> General</a></li>                
                <li><a href="#contents"><i class="icon-chevron-right"></i>Cursos</a></li>
                <li><a href="#html-template"><i class="icon-chevron-right"></i> HTML template</a></li>
                <li><a href="#what-next"><i class="icon-chevron-right"></i> What next?</a></li>
            </ul>
        </div>
      <div class="span9" style="background: #fff;">
        <!-- Download
        ================================================== -->
        <section id="general-template" class="doc">
          <div class="page-header">
            <h3>General</h3>
          </div>
          <p>
            Serenity is a responsive HTML CSS site template based from twitter bootstrap and designed for multi purpose usage such as corporate business, web agency to showcase their works, marketing or product website to personal site. We believe that Multitrap
            has complete elements and features to build a really great website. You can read some interesting pages showcasing all Multitrap features based from twitter bootstrap framework on several pages like scaffolding, base-css, components and javascript.
          </p>
        </section>

        <!-- Contents
        ================================================== -->
        <section id="contents" class="doc">
            <div class="page-header">
                <h3>Cursos</h3>
                <a href="#modal" style="float: right;" role="button" class="btn btn-success" data-toggle="modal">Agregar Curso</a>
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
                <ul class="portfolio-area da-thumbs">
                  @foreach ($cursos as $curso)            
                    <li class="portfolio-item2" data-id="id-0" data-type="web">
                      <div class="span3">
                        <div class="thumbnail">
                          <div class="image-wrapp">
                            <img src="{{ asset('assets/img/'.$curso->uri_miniatura) }}" alt="Portfolio name" title="" />
                            <article class="da-animate da-slideFromRight" style="display: block;">
                            <h4>{{ $curso->nombre }}</h4>
                              <a href="{{url('/admin/curso/'.$curso->id)}}"><i class="icon-rounded icon-48 icon-link"></i></a>                   
                            </article>
                          </div>
                        </div>
                      </div>
                    </li>
                  @endforeach 
                  <!--<li class="portfolio-item2" data-id="id-0" data-type="web">
                    <div class="span3">
                      <div class="thumbnail">
                        <div class="image-wrapp">            
                            <img src="assets/img/dummies/icons8-plus-256.png" alt="Portfolio name" title="" />              
                            <img src="assets/img/dummies/icons8-plus-801.png" alt="Portfolio name" title="" /> 
                            <article class="da-animate da-slideFromRight" style="display: block;">
                            <h4>{{'Agregar Curso'}}</h4>
                                <a href="#modal" role="button" data-toggle="modal"><i class="icon-rounded icon-48 icon-link"></i></a>
                                <a href="{{url('/admin/curso/')}}"><i class="icon-rounded icon-48 icon-link"></i></a>
                            </article>
                        </div>
                      </div>
                    </div>
                  </li>-->                   
                </ul>
            </div>

        </section>
        <!-- HTML template
        ================================================== -->
        <section id="html-template" class="doc">
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
        </section>
        <!-- Next
        ================================================== -->
        <section id="what-next" class="doc">
          <div class="page-header">
            <h3>What next?</h3>
          </div>
          <p>
            Read Serenity documentation file that included in the download package and enjoy the template! For template support please send email via <a href="https://wrapbootstrap.com/user/iWebstudio">our profile contact form</a>.
          </p>
        </section>
      </div>
    </div>
</div>
@endsection
@section('modal-title')
{{'Agregar Curso'}}
@endsection
@section('modal-content')
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
@endsection