@extends('layouts.allproducts')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                @if(count($products)>0 )
                    @foreach($products as $product)
                        @if($product->is_active==1)

                            <div class="blog-grids">
                                <div class="grid">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="entry-media">
                                                <img height="200px" width="auto" src="{{$product->photo?$product->photo->file :'https://via.placeholder.com/300/09f/000.png'}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel panel-default panel-success">

                                                <div class="panel-heading">
                                                    <span class="cat"><b>Product </b>: {{$product->product_name}} </span>

                                                </div>

                                                <div class="entry-body panel-body ">
                                                    <h3><a href="#">&#x20B9; {{$product->product_price}}/-</a></h3>
                                                    <p><b>Specifications</b> : {{$product->description}} <a href="#">Read More..</a></p>
                                                    <div class="read-more-date panel-footer panel-info">

                                                        <span class="date">{{$product->created_at->diffForhumans()}}</span>
                                                        <span><a href="{{route('hproduct',$product->id)}}" class="btn btn-default btn-success pull-right">View</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr style="margin-top:5px; margin-bottom:5px; height:3px;width:100%; border-top:3px solid green;">
                        @endif
                            @endforeach


                        @else
                            <p>No products in the database</p>
                        @endif

            </div>
        </div>
    </div>
@endsection