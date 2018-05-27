<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>Buy The Roof</title>
    <link rel="stylesheet" href={{asset("css/Styling.css")}}>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <!-- or -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">--}}
</head>
<body>
<header>
    <div id="starter">
        <div id="mainHeader">
            <div id="websiteName">
                <h1>buy<span id="designWebsiteName">THEFloor</span>.com</h1>
            </div>
             <a href="{{route('logout')}}" class="btn btn-primary" id="login">Logout</a>
        </div>
        <nav>
            <!--NAV BAR Id is the main id of this group -->
            <div id="navbar">
                <div id="buyThefloorLogo">
                    <a href="{{route('homesweet')}}"><h1>Buy The Floor</h1></a>
                </div>
                <div id="buyThefloorNavigations">
                    <ul>
                        <li class="navBarlistposition"><a href="{{route('addProduct')}}">Add Product</a></li>
                        <li class="navBarlistposition"><a href="{{route('delete')}}">Remove The Product</a></li>
                        <li class="navBarlistposition"><a href="">Display All</a></li>

                    </ul>
                </div >
            </div>
        </nav>
        <div class="container container-fluid">
            @yield('content')
        </div>
    </div>
</header>
</body>
</html>