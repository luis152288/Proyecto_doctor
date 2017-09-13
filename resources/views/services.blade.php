@section('services')
<section class="service text-center" id="service">
        <div class="container">
            <div class="row">
                <h2>our services</h2>
                <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
               @foreach($services as $services)
                <div class="col-md-3 col-sm-6">
                    <div class="single-service">
                        <div class="single-service-img">
                            <div class="service-img">
                                <img class="{{ $services->clase}} img-responsive" src="{{ asset('imagenIndex/'.$services->imagen) }}" alt="">
                            </div>
                        </div>
                        <h3>{{ $services->descripcion }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection