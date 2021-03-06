@extends('layouts.admin')
@section('content')

    <h1>Edit User</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {!! Form::model($user,['method'=>'PATCH','action'=>['UserController@update',$user->id],'files'=>true]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name','Name : ') !!}
                    {!! Form::text('name', null,['class'=>'form-control']) !!}
                    <br>
                </div>
                <div class="form-group">
                    {!! Form::label('email','Email : ') !!}
                    {!! Form::email('email', null,['class'=>'form-control']) !!}
                    <br>
                </div>
                <div class="form-group">
                    {!! Form::label('role_id','Role : ') !!}
                    {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
                    <br>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('is_active','Status : ') !!}
                    {!! Form::select('is_active',array(1  =>'Active',0=>'Non Active'), 0,['class'=>'form-control']) !!}
                    <br>
                </div>
                <div class="form-group">
                    {!! Form::label('password','Password : ') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                    <br>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                {!! Form::submit('Update User',['class'=>'btn btn-primary' ]) !!}
                {!! Form::close() !!}
            </div>
            @if($user->id<>1)
                <div class="col-md-6">

                    {!! Form::open(['method'=>'DELETE', 'action'=> ['UserController@destroy', $user->id]]) !!}

                    <div class="form-group">
                        {!! Form::submit('Delete user', ['class'=>'btn btn-danger']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            @endif
        </div>



    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                @include('includes.error')
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

@endsection