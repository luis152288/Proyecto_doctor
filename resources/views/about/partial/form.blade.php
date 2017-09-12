<div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
	<input type="text" class="form-control" id="imagen" name="imagen" value="{{ $about->imagen or old('imagen') }}">
	<input type="file" class="form-control" id="imagen" name="imagen">
	@if ($errors->has('imagen'))
        <span class="help-block">
        	<strong>{{ $errors->first('imagen') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
	<input type="text" class="form-control" id="letra" placeholder="Ingresa letra" value="{{ $about->letra or old('letra') }}">
</div>
<div class="form-group">
	<input type="text" class="form-control" id="titulo" name="nombre" placeholder="Ingresar titulo" value="{{ $about->titulo or old('titulo') }}">
</div>
<div class="form-group">
	<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="{{ $about->descripcion or old('descripcion') }}">
</div>