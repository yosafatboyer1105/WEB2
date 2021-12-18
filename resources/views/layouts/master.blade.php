
<!-- MASTER LAYOUT -->
<!-- isinya navbar dan footer -->

 <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/aaeb902c74.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="menu.css">

            <title> {{$title = "0"}} </title>
        </head>
        <body>
                    <!--navbar-->
                <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
                        <a class="navbar-brand font-weight-bolder" href="{{route('main_view')}}">FASHIONISTA</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <!--top navbar-->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <!--belom ada page nya-->
                            <li class="nav-item">
                            <a class="nav-link font-weight-bold" >NOTIFICATIONS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{route('checkout_view')}}">SHOPPING CART</a>
                        </li>

                        </ul>
                        <form class="form-inline my-2 my-lg-0 ml-5">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search here" aria-label="Search">
                            <button type="button" class="btn btn-outline-dark">Search</button>
                        </form>

                        <!--icon atas kanan, samping search-->
                    <div class="ml-2">
                        <span class="mr-2 ml-5 d-none d-lg-inline text-gray-600 font-weight-bold"> {{auth()->user()->name}} </span>
                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}">LOGOUT</a>
                                @else
                                    <a href="{{ route('login') }}">LOGIN</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">REGISTER</a>
                                    @endif
                                @endauth
                        @endif
                    </div>
                        </div>
                </nav>

                <!--product kategories-->
                <div class="mt-5 container col-10 col-sm-9 col-md- 8 col-lg-10"style = padding-top:1px>
        <ul class="navbar-nav mr-auto">
                    <ul class="nav justify-content-center">
                        <H4 class="nav-item mr-3 text-light">
                            <a class="nav-link text-white" aria-current="page" href="{{route('shirts_view')}}">SHIRTS</a>
                        </H4>
                        <H4 class="nav-item mr-3 text-light">
                            <a class="nav-link text-white" href="{{route('longsleeve_view')}}">LONGSLEEVE</a>
                        </H4>
                        <H4 class="nav-item mr-3 text-light">
                            <a class="nav-link text-white" href="{{route('pants_view')}}">PANTS</a>
                        </H4>
                        <H4 class="nav-item mr-3 text-light">
                            <a class="nav-link text-white" href="{{route('totebags_view')}}">TOTEBAGS</a>
                        </H4>
                        <H4 class="nav-item mr-3 text-light">
                            <a class="nav-link text-white"href="{{route('shoes_view')}}">SHOES</a>
                        </H4>
                    </ul>
        </ul>
                </div>

@yield('content')

<!-- Footer zone -->
<Footer class="bg-warning text-black text-center mt-3 p-4">
            <p class="mb-1 font-weight-bold">@Copyright 2021 Fashionista.Co | All Rights Reserved</p>
            <p class="mb-1">Information Systems UAJ</p>
                <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Contact Us</a></li>
                <li class="list-inline-item"><a href="#">Our Store</a></li>
                <li class="list-inline-item"><a href="{{route('about_view')}}">About Us</a></li>
                <li class="list-inline-item"><a href="#">Stay Updated</a></li>
                </ul>
                </Footer>

                <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        </body>
        </html>
