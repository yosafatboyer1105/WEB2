@extends('layouts.master')  
@section('content')

        <!--jumbotron / carousel-->
            <div class="container ">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imageelements/banners/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imageelements/banners/banner3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imageelements/banners/banner4.jpg" class="d-block w-100" alt="...">
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>

            <!--Produk display dibawah carousel-->
            <h2 style="color:white;" class="text-center font-weight-bold m-4">F O R Y O U</h2>

            <!--udah sekalian include ama data nya juga keknya ya-->
            @include('clients.productcard')

                    </div>
                </div>
@endsection
