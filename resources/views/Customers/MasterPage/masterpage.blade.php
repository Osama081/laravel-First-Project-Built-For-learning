<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Krona+One" rel="stylesheet">
    <title>Buy The Roof</title>
    <link rel="stylesheet" href={{asset("css/Styling.css")}}>
    <link rel="stylesheet" href="css/CForm.css">
    <link rel="stylesheet" href="{{asset('css/apps.css')}}">
    
    {{--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">--}}
</head>

<body>

<div class="container">
    @yield('allCategories')
</div>

<header>
    <div id="starter">
        <div id="mainHeader">
            <div id="websiteName">
                <h1>buy<span id="designWebsiteName">THEFloor</span>.com</h1>
            </div>
            <a href="{{route('login')}}" class="btn btn-primary" id="login">Login</a>
        </div>
        <nav>
            <!--NAV BAR Id is the main id of this group -->
            <div id="navbar">
                <div id="buyThefloorLogo">
                    <a href="{{route('shome')}}"><h1>Buy The Floor</h1></a>
                </div>
                <div id="buyThefloorNavigations">
                    <ul>
                        <li class="navBarlistposition"><a href="{{route('shome')}}">HOME</a></li>
                        <li class="navBarlistposition"><a href="{{route('allCat')}}">CATEGORIES</a></li>
                        <li class="navBarlistposition"><a href="">ABOUT Us</a></li>
                    </ul>
                </div >
            </div>
            <!-- id  #navBar ending here -->
        </nav>
    </div>
</header>

<div id="availableCategories">
    @yield('all')
</div>

<div id="mySliderDiv">
@yield('itemPostSlider')
</div>
<div class="container">
    @yield('singleCate')
</div>

<div id="homeCategoried" class="container">
    @yield('homeItemsCategories')
</div>

<div id="book" class="container">
    @yield('books')
</div>
<div id="mobile" class="container">
    @yield('mobile')
</div>
<div id="games" class="container">
    @yield('games')
</div>
<div id="clothing" class="container">
    @yield('clothing')
</div>
<div id="computer" class="container">
    @yield('computer')
</div>






<div id="footer">

    <footer>
        <div class="row footerd">
            <div class="col-lg-4">
                <h3>About Me</h3>
                <p>I am a Passionate Programmer
                    With a desire to learn everyday
                    something new. I love to code
                    JAVA. Although i hate designing
                    but since the start of Web Technologies
                    im loving this.This Section is for the
                    Ladies We have Keen Interest to provide
                    Quality Products For Our Visitors And To
                    Guide them What To Find
                </p>
            </div>
            <div class="col-lg-4">
                <h3>Who Are We?</h3>
                <p>
                    We are affiliate markteter of the Amazon.
                    We find the best thing out of the mountain
                    and set it available for you here.Plus we
                    dont sell anything personaly we will  find best results
                    and will redirect you to the amazon where you can
                    purchase this Thank You CEO Osama Inayat.
                </p>
            </div>
            <div class="col-lg-4">
                <h3>Find Us on</h3>
                <a href=""><img src="Images Folder/FooterLogos/facebook_logo_small.png" alt="fb logo"></a>

            </div>

        </div>
    </footer>





</div>






</body>