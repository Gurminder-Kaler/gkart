<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>All Products:</title>
</head>
<body>
<nav class="navbar navbar-inverse"  >
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><p style="font-size: 25px;padding: 5px">GKart</p></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('home')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Products<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>@php($products1 = App\Product::all()->where("is_active","=",1))
                        @if(count($products1)> 0)
                            @foreach($products1 as $product)
                                <a href="{{route('hproduct',$product->id)}}">{{$product->product_name}}</a>
                            @endforeach
                        @else
                            <p>No products to show</p>
                        @endif

                    </li>
                    <li><a href="{{route('allproducts')}}">All Products</a></li>
                </ul>
            </li>
            <li><a href="{{url('about')}}">About Us</a></li>
            <li><a href="{{url('contact')}}"><span class="glyphicon glyphicon-earphone"></span>Contact Us</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Options<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">

                    @if (Auth::check())
                        @if(Auth::user()->isAdmin())

                            <li><a href="{{url('/logout')}}"> Logout of {{Auth::user()->name}}</a></li>
                            <li><a href="{{url('admin')}}">GOTO Dashboard</a></li>
                        @else

                            <li><a href="{{url('/logout')}}"><span class="glyphicon glyphicon-off"></span> Logout of {{Auth::user()->name}}</a></li>
                        @endif
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>

                    @endif
                </ul>
            </li>
        </ul>
    </div>
</nav>
<br>
@yield('content')


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>