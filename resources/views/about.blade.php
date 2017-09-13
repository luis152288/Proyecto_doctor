
@section('about')
<section class="about text-center" id="about">
        <div class="container">
            <div class="row">
                <h2>about us</h2>
                <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
               @foreach($about as $about)
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail clearfix">
                        <div class="about-img">
                            <img class="img-responsive" src="{{ asset('imagenIndex/'.$about->imagen) }}" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>{{ $about->letra}}</h1>
                            </div>
                            <h3>{{ $about->titulo}}</h3>
                            <p>{{ $about->subtitulo}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection