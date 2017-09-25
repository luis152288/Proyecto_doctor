

@section ('citas')

<section class="citas text-center" id="citas">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 form-citas">
					<h2>citas</h2>
					<h3>Rellena el formulario para guardar tu cita</h3>

						<form action="{{ url('/citas') }}" method="post" enctype="multipart/form-data" class="form" method="post">
							<input type="date" name="fecha" id="fecha" required>
							<input type="text" placeholder="nombre completo" name="nombre" id="nombre" required>
							<input type="number" placeholder="Edad" name="edad" id="edad" required>
							<select required name="especialidad" id="especialidad">
								<option value="">Selecciona un especialidad</option>
								<option value="knee">knee</option>
								<option value="bones">bones</option>
								<option value="brain">brain</option>
								<option value="heart">heart</option>
							</select>
							<input class="submit-btn" type="submit" value="ENVIAR">
							{{csrf_field()}}
						</form>
				</div>
			</div>
		</div>
	</section>

@endsection
