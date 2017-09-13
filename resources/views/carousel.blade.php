@section('carousel')
<section class="slider" id="home">
        <div class="container-fluid">
            <div class="row">
                <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="header-backup"></div>
                    <div class="carousel-inner" role="listbox">
                        @foreach($carousel as $carousel)
                        <div class="item active">
                            <img src="{{ asset('imagenIndex/'.$carousel->imagen) }}" alt="....">
                            <div class="carousel-caption">
                                <h1>{{ $carousel->titulo }}</h1>
                                <p>{{ $carousel->subtitulo }}</p>
                            </div>
                        </div>
                        @endforeach
                        <!--<div class="item">
                            <img src="img/slide-two.jpg" alt="">
                            <div class="carousel-caption">
                                <h1>providing</h1>
                                <p>highquality service for men &amp; women</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide-three.jpg" alt="">
                            <div class="carousel-caption">
                                <h1>providing</h1>
                                <p>highquality service for men &amp; women</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/slide-four.jpg" alt="">
                            <div class="carousel-caption">
                                <h1>providing</h1>
                                <p>highquality service for men &amp; women</p>
                            </div>
                        </div>
                    </div>-->
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection