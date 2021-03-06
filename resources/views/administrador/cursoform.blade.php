<form class="form-horizontal" method="POST" action="{{ route('savecurso') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{$curso->id}}" />
  <div class="control-group">
    <label class="control-label" for="inputNombre">Nombre:</label>
    <div class="controls">
    <input class="input-xlarge" type="text" name="nombre" placeholder="Curso" value="{{$curso->nombre}}" 
    maxlength="64" required/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputDesc">Descripcion</label>
    <div class="controls">
      <textarea class="input-xlarge" rows="4" cols="50" maxlength="200" 
      name="descripcion" placeholder="Descripcion del curso" required>{{$curso->descripcion}}</textarea>
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
