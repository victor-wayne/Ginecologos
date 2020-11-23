<form class="form-horizontal" method="POST" action="{{ route('savetema') }}" enctype="multipart/form-data" onsubmit="modalLoading.show();">
    @csrf
    <input type="hidden" name="id" value="{{$tema->id}}" />
    <input type="hidden" id="id-curso" name="curso_id" value="{{$curso->id}}" />
    <div class="control-group">
      <label class="control-label" for="inputNombre">Nombre:</label>
      <div class="controls">
      <input class="input-xlarge" type="text" name="nombre" value="{{$tema->nombre}}" 
      placeholder="Nombre del tema" maxlength="64" required/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputAutor">Autor:</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="autor" value="{{$tema->autor}}" 
        placeholder="Nombre del autor" maxlength="64" required/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputDuracion">Duracion:</label>
      <div class="controls">
        <input class="input-xlarge" type="time" name="duracion" value="{{$tema->duracion}}" 
        placeholder="Duracion del video" maxlength="6" required/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputDescripcion">Descripcion</label>
      <div class="controls">
        <textarea class="input-xlarge" cols="50" rows="3" maxlength="200" style="align-content:left; overflow:auto;" name="descripcion" placeholder="Descripcion del curso" required>{{ltrim($tema->descripcion)}}</textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputPortada">Portada:</label>
      <div class="controls">      
      <input class="input-xlarge" type="file" name="uri_miniatura" />      
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputVideo">Video:</label>
      <div class="controls">      
        <!--<input class="input-xlarge" type="text" name="uri_multimedia" value="{{$tema->uri_multimedia!='' ? 'https://youtu.be'.$tema->uri_multimedia:''}}" />-->
        <input class="input-xlarge" type="file" name="uri_multimedia" value="{{$tema->uri_multimedia!='' ? 'https://youtu.be'.$tema->uri_multimedia:''}}" />      
      </div>
    </div>        
    <div class="control-group">
      <div class="controls">                  
        <button type="submit" class="btn btn-success" onclick="">Guardar</button>
      </div>
    </div>    
</form>
@if ($tema->id>0)
    <div class="centered">  
      <!--<iframe 
      id="video"
      width="100%"     
      height="400px"              
      class="video-js"
      src="{{'https://www.youtube.com/embed/'.$tema->uri_multimedia}}" 
      frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen
      onload="frameLoaded()">
    </iframe>-->                   
        <video width="500" controls>
          <source src="{{ asset('assets/videos/'.$tema->uri_multimedia) }}" type="video/mp4">    
              Your browser does not support HTML video.
        </video>
      </div>             
@endif
