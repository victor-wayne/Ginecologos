@extends('suscriptor.base')

@section('seccion1')
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

                @if($errors->any())
                <i class="icon-warning-sign"></i>{{ implode('', $errors->all(':message')) }}
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
<section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="{{ url('/suscriptor') }}">Inicio</a><span class="divider">/</span></li>
            <li class="active">Usuario</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent">
    <div class="container">
      
        <div class="row">
        <div class="span2">          
        </div>

        <div class="span8">
          <div class="" style="border-radius: 10px;">
            <div class="centered">
              <i class="icon-circled icon-64 icon-user active"></i>
            <h4>{{ Auth::user()->name }}</h4>
              <div class="dotted_line">
              </div>
              <ul class="project-detail">                
                <li><label>Email: </label> {{Auth::user()->email}}</li>
                <li>
                    <label>PayPal Orden: </label> 
                    @if (isset(Auth::user()->transaction_id))
                        {{Auth::user()->transaction_id}}
                    @else
                        No registrada
                    @endif                               
                <li>
                    <label>Pago: </label> 
                    @if (isset(Auth::user()->transaction_status))
                    <span style="color:#239b56;font-weight:bold;">Pagado</span>
                    @else
                        <span style="color:red;">No se ha realizado el pago</span>
                    @endif                        
                </li>
                <li>
                    @if (isset(Auth::user()->transaction_id))
                        <a href="#modal" role="button" class="btn btn-primary" 
                        data-toggle="modal">Cambiar Contraseña</a>                        
                    @else
                        <a href="#modal" role="button" class="btn btn-primary" 
                          data-toggle="modal">Cambiar Contraseña</a>   
                        
                        <a href="{{ url('/suscriptor/paypal/pay') }}" role="button" class="btn btn btn-success" 
                          data-toggle="modal">Relizar Pago</a>  
                                                  
                    @endif                                       
                </li>
              </ul>              
            </div>
          </div>
        </div>
        <div class="span2">          
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <div class="divider">
          </div>
        </div>
      </div>
      
    </div>
  </section>  
@endsection

@section('modal-title')
{{'Cambiar Contraseña'}}
@endsection


@section('modal-content')
<div id="modal-content">
<form class="form-horizontal" method="POST" action="{{ route('changepassword') }}">
  @csrf  
  <div class="control-group">
    <label class="control-label" for="inputpass">Contraseña:</label>
    <div class="controls">
      <input class="input-xlarge" type="password" name="current_password" placeholder="Contraseña actual" required/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputnpass">Nueva Contraseña:</label>
    <div class="controls">
      <input class="input-xlarge" type="password" name="new_password" placeholder="Nueva Contraseña" required/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputrnpass">Confirma Contraseña:</label>
    <div class="controls">
      <input class="input-xlarge" type="password" name="rnew_password" placeholder="Confirme Contraseña" required/>
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
