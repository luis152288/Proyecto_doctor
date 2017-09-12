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

                <div class="col-md-12 col-md-offset-2">

                  <div class="col-md-2">
                    <div class="row">
                      <div class="panel-body">
                        <div class="thumbnail">
                          <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                          <div class="caption">
                            <h3>Carousel</h3>
                           <a href="{{ url('/carousel')}}" class="btn btn-primary btn-md" role="button">Ingresar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                 <div class="col-md-2">
                    <div class="row">
                      <div class="panel-body">
                        <div class="thumbnail">
                          <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                          <div class="caption">
                            <h3>About</h3>
                           <a href="{{ url('/about')}}" class="btn btn-primary btn-md" role="button">Ingresar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                 <div class="col-md-2">
                    <div class="row">
                      <div class="panel-body">
                        <div class="thumbnail">
                          <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
                          <div class="caption">
                            <h3>Services</h3>
                            <a href="{{ url('/services') }}" class="btn btn-primary btn-md" role="button">Ingresar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                 <div class="col-md-2">
                    <div class="row">
                      <div class="panel-body">
                        <div class="thumbnail">
                          <i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i>
                          <div class="caption">
                            <h3>Team</h3>
                            <a href="{{ url('/team')}}" class="btn btn-primary btn-md" role="button">Ingresar</a>
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
 </div>
@endsection
