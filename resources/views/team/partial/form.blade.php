<div class="form-group{{ $errors->has('imagen-file') ? ' has-error' : '' }}">
	<input type="text" class="form-control" id="imagen" name="imagen" value="{{ $team;->imagen or old('imagen') }}">
	<input type="file" class="form-control" id="imagen-file" name="imagen-file">
	@if ($errors->has('imagen-file'))
        <span class="help-block">
        	<strong>{{ $errors->first('imagen-file') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" value="{{ $team->nombre or old('nombre') }}">
</div>
<div class="form-group">
	<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="{{ $team->descripcion or old('descripcion') }}">
</div>