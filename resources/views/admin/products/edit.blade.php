@extends('layouts.product')
@section('content')

    <h1>Product Edit</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {!! Form::model($product,['method'=>'PATCH','action'=>['ProductController@update',$product->id],'files'=>true]) !!}
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                {{ csrf_field() }}

                <div class="form-group">
                    {!! Form::label('product_name','Name of Product : ') !!}
                    {!! Form::text('product_name', null,['class'=>'form-control']) !!}
                    <br>
                </div>
                <div class="form-group">
                    {!! Form::label('product_id','Product Id : ') !!}
                    {!! Form::text('product_id', null,['class'=>'form-control']) !!}
                    <br>
                </div>
                <div class="form-group">
                    {!! Form::label('product_price','Price in Rupees : ') !!}
                    {!! Form::number('product_price',null,['class'=>'form-control']) !!}
                    <br>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">

                            {!! Form::label('photo_id','Product Photo : ') !!}
                            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-9">
                            <img height="70px" width="auto" class="pull-right" src="{{$product->photo->file}}" alt="">
                        </div>
                    </div>
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
                    {!! Form::label('description','Description : ') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control','rows'=>4,'style'=>'resize:vertical']) !!}
                    <br>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                {!! Form::button( '<i class="glyphicon glyphicon-floppy-saved"></i> Save', ['type' => 'submit','class'=>'btn btn-success'] ) !!}
                {!! Form::close() !!}

            </div>
            <div class="col-md-6">
                {!! Form::open(['method'=>'DELETE','action'=>['ProductController@destroy',$product->id]]) !!}
                {{ csrf_field() }}


                {!! Form::button( '<i class="glyphicon glyphicon-trash"></i> Trash the product', ['type' => 'submit','class'=>'btn btn-danger'] ) !!}

                {!! Form::close() !!}


            </div>
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