@extends('layouts.product')
@section('content')

    <h1>Products Index</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th scope="col">Edit/Delete</th>
                        <th scope="col">Id</th>
                        <th scope="col">Product-Id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created_at</th>

                    </tr>
                    </thead>
                    <tbody>

                    @if(count($products)>0)
                        @foreach($products as $product)
                            <tr>
                                <td><img height="100px" width="100px" src="{{$product->photo ? $product->photo->file : 'http://placehold.it/400x400' }} " alt=""></td>
                                {{--<td><img height="100px" width="90px" src="{{$product->photo->file}}" alt=""></td>--}}
                                <td><a href="{{route('admin.products.edit',$product->id)}}"><i class="glyphicon glyphicon-floppy-saved"></i>/<i class="glyphicon glyphicon-trash"></i></a></td>
                                <td>{{$product->id}}</td>
                                <td>{{$product->product_id}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>{{str_limit($product->description,22)}}</td>
                                <td>{{$product->is_active}}</td>
                                <td>{{$product->created_at->diffForhumans()}}</td>

                            </tr>
                        @endforeach
                        @else
                        <p>NO products to show</p>

                    @endif


                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        {{$products->render()}}
                    </div>
                    <div class="col-md-4"></div>
                </div>
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