
@section('team')
<section class="team" id="team">
        <div class="container">
            <div class="row">
                <div class="team-heading text-center">
                    <h2>our team</h2>
                    <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
                </div>
                @foreach($team as $team)
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="{{ asset('imagenIndex/'.$team->imagen) }}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>{{ $team->nombre}}</h3>
                        <p>{{ $team->descripcion}}</p>
                    </div>
                </div>
                @endforeach
            <!--<div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Danielle, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="img/member2.jpg" alt="member-2">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="img/member3.jpg" alt="member-3">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr. Caitlin, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Joseph, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="img/member4.jpg" alt="member-4">
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person">
                        <img class="img-responsive" src="img/member5.jpg" alt="member-5">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Dr. Michael, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="col-md-2 single-member col-sm-4">
                    <div class="person-detail">
                        <div class="arrow-top"></div>
                        <h3>Dr. Hasina, M.D.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                    <div class="person">
                        <img class="img-responsive" src="img/member6.jpg" alt="member-5">
                    </div>
                </div>-->
            </div>
        </div>
    </section>
@endsection