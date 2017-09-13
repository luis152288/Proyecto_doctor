<div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
	<input type="file" class="form-control" id="imagen" name="imagen" value="{{ $services->imagen or old('imagen') }}">
	@if ($errors->has('imagen'))
        <span class="help-block">
        	<strong>{{ $errors->first('imagen') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
	<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="{{ $services->descripcion or old('descripcion') }}">
</div>
<div class="form-group">
	<select name="clase" id="clase" class="form-control" required>
	<option>Tipo de servicio</option>
	<option value="heart" @if($services->clase=='heart') selected  @endif >heart</option>
	<option value="brain" @if($services->clase=='brain') selected  @endif>brain</option>
	<option value="knee" @if($services->clase=='knee') selected  @endif>knee</option>
	<option value="bone" @if($services->clase=='bone') selected  @endif>bone</option> 
	</select>
</div>