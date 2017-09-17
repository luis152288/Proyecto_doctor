<div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
	<input type="file" class="form-control" id="imagen" name="imagen" value="{{ $about->imagen or old('imagen') }}" required>
	@if ($errors->has('imagen'))
        <span class="help-block">
        	<strong>{{ $errors->first('imagen') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
	<input type="text" class="form-control" id="letra" name="letra" placeholder="Ingresa letra" value="{{ $about->letra or old('letra') }}" required>
</div>
<div class="form-group">
	<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresar titulo" value="{{ $about->titulo or old('titulo') }}" required>
</div>
<div class="form-group">
	<input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder=" Ingrese Descripcion" value="{{ $about->subtitulo or old('subtitulo') }}" required>
</div>