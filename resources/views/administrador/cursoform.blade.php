<form class="form-horizontal" method="POST" action="{{ route('savecurso') }}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{$curso->id}}" />
  <div class="control-group">
    <label class="control-label" for="inputEmail">Nombre:</label>
    <div class="controls">
    <input class="input-xlarge" type="text" name="nombre" placeholder="Curso" value="{{$curso->nombre}}" required/>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Descripcion</label>
    <div class="controls">
      <textarea class="input-xlarge" name="descripcion" placeholder="Descripcion del curso" required>{{$curso->descripcion}}</textarea>
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
<?php //dump($curso) ?>
