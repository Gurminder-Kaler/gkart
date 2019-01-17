@extends('layouts.oneproduct')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{--@foreach($abc as $product1)--}}
                {{--@if(equalTo($product1->product_id,$id))--}}
                {{--<p>Product Name :{{$abc->product_name}}</p> <br>--}}
                {{--<p>Product Price: {{$abc->product_price}}</p> <br>--}}
                {{--<p>Product ID: {{$abc->product_id}}</p> <br>--}}
                {{--<p>Product Description : {{$abc->description}}</p> <br>--}}
                <div class="blog-grids">
                    <div class="grid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="entry-media">
                                    <img height="200px" width="auto" src="{{$abc->photo?$abc->photo->file :'https://via.placeholder.com/300/09f/000.png'}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-default panel-success">
                                    <div class="panel-heading">
                                        <span class="cat"><b>Product </b>: {{$abc->product_name}}</span>
                                    </div>
                                    <div class="entry-body panel-body ">
                                        <h3><a href="#">Rs. {{$abc->product_price}}/-</a></h3>
                                        <p><b>Specifications</b> : {{$abc->description}} <a href="#">Read More..</a></p>
                                        <div class="read-more-date panel-footer panel-info">

                                            <span class="date">{{$abc->created_at->diffForhumans()}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{--@endif--}}
                {{--@endforeach--}}
            </div>

        </div>
    </div>
@endsection