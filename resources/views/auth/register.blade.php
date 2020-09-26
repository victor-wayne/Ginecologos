@extends('ginecologos.base')
@section('title','Acceso')

@section('seccion1')
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <!--<div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Afiliate con nosotros</h3>
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
            <li><a href="#">Inicio</a><span class="divider">/</span></li>
            <li class="active">Registro</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent" style="background:   #f0f3f4 ;">

    <div class="container" style="background:   #f0f3f4 ;">

      

        <div class="row">
            <div class="span3">
              
            </div>
    
            <div class="span6">
              <div class="" style="background:  #fbfcfc;border:0px solid  #eaecee ;border-radius:10px;">
                <div class="centered">            
                 
                              
                </div>
                <div style="border:0px solid;"> 
                    <p>&nbsp;</p>                                   
                    <p style="margin-left:10%;font-size:20px;"><strong><i class="icon-user"></i>Registro</strong></p> 
                    <p>&nbsp;</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="text-right" style="border:0px solid; margin-right:25%;">                                                                            
                            <span>Nombre:</span>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off">
                        </div>
    
                        
    
                        <div class="text-right" style="border:0px solid; margin-right:25%;">                                                                            
                            <span>Correo Electronico:</span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                        </div>
    
                        
                        
    
                        <div class="text-right" style="border:0px solid; margin-right:25%;">                                                
                            <span>Contraseña:</span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                        </div>

                        <div class="text-right" style="border:0px solid; margin-right:25%;">                                                
                            <span>Repita Contraseña:</span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off">
                        </div>
    
                        
                        <p>&nbsp;</p>
                        <div class="text-right" style="border:0px solid; margin-right:25%;">                                                    
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrar') }}
                            </button>                                                                
                        </div>
                        <p>&nbsp;</p>
    
                        <div class="centered" style="border:0px solid;color:red;margin-top:20px;">                                                                          
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                        </div>
                        
    
                        
    
                    </form>     
                </div>
              </div>
            </div>
    
            <div class="span3">
              
            </div>
    
        </div>
    
          <div class="row">
            <div class="span12">
              <div class="divider">
              </div>
            </div>
          </div>
    
          <div class="row">
            
          </div>
        </div>

</section>
@endsection