@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	@if(Session::has('mensaje'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Mensaje:</strong> {{ session('mensaje') }}
			</div>
        	@endif
            <div class="panel panel-default">
                <div class="panel-heading">Team</div>
                <div class="panel-body">
					<a href="{{ url('/team/create') }}" class="btn btn-primary">Crear team</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                    		<th width="15%">IMAGEN</th>
                    		<th>NOMBRE</th>
                    		<th>DESCRIPCION</th>
                    		<th colspan="2" width="10%">ACCIONES</th>
                    	</tr>
						@foreach($team as $team)
							<tr>
								<td>{{ $services->id}}</td>
								<td><img src="{{ asset('imagenIndex/'.$team->imagen) }}" alt="" class="img-responsive" width="100"></td>
								<td>{{ $team->imagen}}</td>
								<td>{{ $team->nombre}}</td>
								<td>{{ $team->descripcion}}</td>
								<td>
									<a href="{{ url('/team/' . $team->id . '/edit') }}" class="btn btn-info">
										<i class="fa fa-edit"></i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-danger"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-about-form').submit();">
										<i class="fa fa-trash"></i>
									</a>
									<form id="delete-about-form" action="{{ url('/team/'.$team->id) }}" method="post">
										{{ method_field('DELETE')}}
										{{ csrf_field() }}						
									</form>
								</td>
							</tr>
						@endforeach
						<tr>
							<td colspan="8">{{ $team->links() }}</td>
						</tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection