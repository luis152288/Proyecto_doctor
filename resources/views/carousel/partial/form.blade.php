<div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
	<input type="file" class="form-control" id="imagen" name="imagen" value="{{ $carousel->imagen or old('imagen') }}" required>
	@if ($errors->has('imagen'))
        <span class="help-block">
        	<strong>{{ $errors->first('imagen') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
	<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresar titulo" value="{{ $carousel->titulo or old('titulo') }}" required>
</div>
<div class="form-group">
	<input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Descripcion" value="{{ $carousel->subtitulo or old('subtitulo') }}" required>
</div>