<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"

          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=""{{asset('css.style')}}>
    <title>Products:admin</title>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><p style="font-size: 25px;padding: 5px">GKart</p></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Products <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">

                    <li>@php($products = App\Product::where("is_active","=",1)->get())
                        @if(count($products)> 0)
                            @foreach($products as $product)
                                <a href="{{route('hproduct',$product->id)}}">{{$product->product_name}}</a>
                            @endforeach
                        @endif</li>
                    <li><a href="{{route('allproducts')}}">All Products</a></li>
                </ul>
            </li>
            <li><a href="{{url('about')}}">About Us</a></li>
            <li><a href="{{url('contact')}}"><span class="glyphicon glyphicon-earphone"></span>Contact Us</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Options <span class="caret"></span></a>
                <ul class="dropdown-menu">

                    @if (Auth::check())
                        @if(Auth::user()->isAdmin())

                            <li><a href="{{url('/logout')}}"><span class="glyphicon glyphicon-off"></span> Logout of {{Auth::user()->name}}</a></li>
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
            <li>
                @if(Auth::check())
                    <p style="padding: 5px;background:#1f648b;color: #fff;font-size: 25px">Welcome, {{Auth::user()->name}}</p>
                @endif
            </li>
        </ul>
    </div>
</nav>
<br>
@yield('content')





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


<!-- Latest compiled JavaScript -->

</body>
</html>