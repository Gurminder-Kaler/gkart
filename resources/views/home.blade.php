@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in! <br>
                        @if(Auth::user()->isAdmin())
                            <a href="{{url('/admin')}}">GOTO dashboard</a>
                            @else
                            <a href="{{url('/')}}">GOTO website</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
