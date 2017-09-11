@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="col-md-3">
                    <div class="row">
                      <div class="panel-body">
                        <div class="thumbnail">
                          <img src="img/item3.jpg" alt="...">
                          <div class="caption">
                            <h3>Carousel</h3>
                           <a href="{{ url('/carousel/index')}}" class="btn btn-primary btn-md" role="button">Ingresar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                 <div class="col-md-3">
                    <div class="row">
                      <div class="panel-body">
                        <div class="thumbnail">
                          <img src="img/item3.jpg" alt="...">
                          <div class="caption">
                            <h3>About</h3>
                           <a href="{{ url('/about/index')}}" class="btn btn-primary btn-md" role="button">Ingresar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                 <div class="col-md-3">
                    <div class="row">
                      <div class="panel-body">
                        <div class="thumbnail">
                          <img src="img/item3.jpg" alt="...">
                          <div class="caption">
                            <h3>Services</h3>
                            <a href="{{ url('/services/index')}}" class="btn btn-primary btn-md" role="button">Ingresar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                 <div class="col-md-3">
                    <div class="row">
                      <div class="panel-body">
                        <div class="thumbnail">
                          <img src="img/item3.jpg" alt="...">
                          <div class="caption">
                            <h3>Team</h3>
                            <a href="{{ url('/team/index')}}" class="btn btn-primary btn-md" role="button">Ingresar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
