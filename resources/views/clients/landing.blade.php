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


            <!--card baris ke 1-->
                    <!--c1-->
                    <div class="row mx-auto mt-4">
                    <div class="card mr-2 ml-2" style="width: 15rem;">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <h5 class="font-weight-bolder"> </h5>
                        <br>
                        <p class="font-weight-bolder"> Rating </p>
                        <br>
                        <button id="3" type="button" class="btn btn-primary" data-target="#produk1" data-toggle="modal">Product Detail</button>
                        <br> <br>
                        <button id="3" type="button" class="btn btn-danger">Add to Cart</button>
                        </div>
                    </div>

                    <!--c2-->
                    <div class="card mr-2 ml-2" style="width: 15rem;">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <h5 class="font-weight-bolder"> </h5>
                        <br>
                        <p class="font-weight-bolder"> Rating </p>
                        <br>
                        <button id="3" type="button" class="btn btn-primary" data-target="#produk2" data-toggle="modal">Product Detail</button>
                        <br> <br>
                        <button id="3" type="button" class="btn btn-danger">Add to Cart</button>
                        </div>
                    </div>

                    <!--c3-->
                    <div class="card mr-2 ml-2" style="width: 15rem;">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <h5 class="font-weight-bolder"> </h5>
                        <br>
                        <p class="font-weight-bolder"> Rating </p>
                        <br>
                        <button id="3" type="button" class="btn btn-primary" data-target="#produk3" data-toggle="modal">Product Detail</button>
                        <br> <br>
                        <button id="3" type="button" class="btn btn-danger">Add to Cart</button>
                        </div>
                    </div>

                    <!--c4-->
                    <div class="card mr-2 ml-2" style="width: 15rem;">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <h5 class="font-weight-bolder"> </h5>
                        <br>
                        <p class="font-weight-bolder"> Rating </p>
                        <br>
                        <button id="3" type="button" class="btn btn-primary" data-target="#produk4" data-toggle="modal">Product Detail</button>
                        <br> <br>
                        <button id="3" type="button" class="btn btn-danger">Add to Cart</button>
                        </div>
                    </div>

                <!--card baris ke 2-->
                    <!--c5-->
                    <div class="card mr-2 ml-2 mt-4" style="width: 15rem;">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <h5 class="font-weight-bolder"> </h5>
                        <br>
                        <p class="font-weight-bolder">Rating</p>
                        <br>
                        <button id="3" type="button" class="btn btn-primary" data-target="#produk5" data-toggle="modal">Product Detail</button>
                        <br> <br>
                        <button id="3" type="button" class="btn btn-danger">Add to Cart</button>
                        </div>
                    </div>

                    <!--c6-->
                    <div class="card mr-2 ml-2 mt-4" style="width: 15rem;">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <h5 class="font-weight-bolder"> </h5>
                        <br>
                        <p class="font-weight-bolder">Rating</p>
                        <br>
                        <button id="3" type="button" class="btn btn-primary" data-target="#produk6" data-toggle="modal">Product Detail</button>
                        <br> <br>
                        <button id="3" type="button" class="btn btn-danger">Add to Cart</button>
                        </div>
                    </div>

                    <!--c7-->
                    <div class="card mr-2 ml-2 mt-4" style="width: 15rem;">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <h5 class="font-weight-bolder"> </h5>
                        <br>
                        <p class="font-weight-bolder">Rating</p>
                        <br>
                        <button id="3" type="button" class="btn btn-primary" data-target="#produk7" data-toggle="modal">Product Detail</button>
                        <br> <br>
                        <button id="3" type="button" class="btn btn-danger">Add to Cart</button>
                        </div>
                    </div>

                    <!--c8-->
                    <div class="card mr-2 ml-2 mt-4" style="width: 15rem;">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title"> </h5>
                        <h5 class="font-weight-bolder"> </h5>
                        <br>
                        <p class="font-weight-bolder">Rating</p>
                        <br>
                        <button id="3" type="button" class="btn btn-primary" data-target="#produk8" data-toggle="modal">Product Detail</button>
                        <br> <br>
                        <button id="3" type="button" class="btn btn-danger">Add to Cart</button>
                        </div>
                    </div>


                    <!-- Modal Popup -->
                    <!-- Untuk deskripsi produk -->

                        <!-- Untuk deskripsi produk 1 -->
                        <div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title font-weight-bolder" id="exampleModalLabel">Product Detail</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                                <div class="modal-body">
                                <div class="row">
                                <div class="col-md-6">
                                    <img src=" " class="card-img-top" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                    <tr>
                                        <th>Nama Produk</th>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Produk</th>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th>Kondisi</th>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th>Berat</th>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th>Stok</th>
                                        <td> </td>
                                    </tr>
                                    <tr>
                                        <th>Rating Produk</th>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td class="font-weight-bolder"> </td>
                                    </tr>
                                    <tr>
                                        <td class="modal-text"> </td>
                                    </tr>
                                    </table>
                                </div>
                                </div>
                            </div>

                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                <button id="3" type="button" class="btn btn-danger">Go Buy</button>
                                </div>
                                </div>
                            </div>
                            </div>

                        <!-- Untuk deskripsi produk 8 -->
                        <div class="modal fade" id="produk8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title font-weight-bolder" id="exampleModalLabel">Product Detail</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>

                                <div class="modal-body">
                                <div class="row">
                                <div class="col-md-6">
                                    <img src=" " class="card-img-top" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                    <tr>
                                        <th>Nama Produk</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Produk</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Kondisi</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Berat</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Stok</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Rating Produk</th>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Harga</th>
                                        <td class="font-weight-bolder"> </td>
                                    </tr>
                                    <tr>
                                        <td class="modal-text"> </td>
                                    </tr>
                                    </table>
                                </div>
                                </div>
                            </div>

                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                <button id="3" type="button" class="btn btn-danger">Go Buy</button>
                                </div>
                                </div>
                            </div>
                            </div>

                    </div>
                </div>
@endsection
