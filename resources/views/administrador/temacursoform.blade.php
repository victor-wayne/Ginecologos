<form class="form-horizontal" method="POST" action="{{ route('savetema') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$tema->id}}" />
    <input type="hidden" id="id-curso" name="curso_id" value="{{$curso->id}}" />
    <div class="control-group">
      <label class="control-label" for="inputNombre">Nombre:</label>
      <div class="controls">
      <input class="input-xlarge" type="text" name="nombre" value="{{$tema->nombre}}" placeholder="Nombre del tema" required/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputNombre">Autor:</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="autor" value="{{$tema->autor}}" placeholder="Nombre del autor" required/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputNombre">Duracion:</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="duracion" value="{{$tema->duracion}}" placeholder="Duracion del video" required/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputPassword">Descripcion</label>
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
@if ($tema->id>0)
    <div class="centered">                     
        <video width="500" controls>
          <source src="{{ asset('assets/videos/'.$tema->uri_multimedia) }}" type="video/mp4">    
              Your browser does not support HTML video.
        </video>
      </div>             
@endif
