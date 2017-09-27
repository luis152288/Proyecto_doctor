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
                <div class="panel-heading">Seccion citas</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                    		<th>FECHA</th>
                        <th>NOMBRE</th>
                    		<th>EDAD</th>
                    		<th>ESPECIALIDAD</th>
                    		<th width="5%">ACCIONES</th>
                    	</tr>
						@foreach($citas as $citas)
							<tr>
								<td>{{ $citas->id}}</td>
								<td>{{ $citas->fecha}}</td>
								<td>{{ $citas->nombre}}</td>
								<td>{{ $citas->edad}}</td>
								<td>{{ $citas->especialidad}}</td>
								<td class="text-center">
									<a href="javascript:void();" class="btn btn-danger"
										onclick="event.preventDefault();
                            document.getElementById('delete-cita-form').submit();">
										<i class="fa fa-trash"></i>
									</a>
									<form id="delete-cita-form" action="{{ url('/citas/'.$citas->id) }}" method="post">
										{!! method_field('DELETE') !!}
										{{ csrf_field() }}
									</form>
								</td>
							</tr>
						@endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
