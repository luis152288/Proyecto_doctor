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
                <div class="panel-heading">Imagenes de Carrusel</div>
                <div class="panel-body">
					<a href="{{ url('/carousel/create') }}" class="btn btn-primary">Crear Carousel</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                    		<th width="15%">IMAGEN</th>
                    		<th>ARCHIVO</th>
                    		<th>TITULO</th>
                    		<th>DESCRIPCION</th>
                    		<th colspan="2" width="10%">ACCIONES</th>
                    	</tr>
						@foreach($carousel as $carousel)
							<tr>
								<td>{{ $carousel->id}}</td>
								<td><img src="{{ asset('imagenIndex/'.$carousel->imagen) }}" alt="" class="img-responsive" width="100"></td>
								<td>{{ $carousel->imagen}}</td>
								<td>{{ $carousel->titulo }}</td>
								<td>{{ $carousel->descripcion}}</td>
								<td>
									<a href="{{ url('/carousel/' . $carousel->id . '/edit') }}" class="btn btn-info">
										<i class="fa fa-edit"></i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-danger"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-carousel-form').submit();">
										<i class="fa fa-trash"></i>
									</a>
									<form id="delete-carousel-form" action="{{ url('/carousel'.$carousel->id) }}" method="post">
										{{ method_field('DELETE') }}
										{{ csrf_field() }}						
									</form>
								</td>
							</tr>
						@endforeach
						<tr>
							<td colspan="8">{{ $carousel->links() }}</td>
						</tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection