
        <!--checkout-->
        <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/aaeb902c74.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="checkout.css">

        <title>Checkout Section</title>
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

                            <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="">NOTIFICATIONS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="">SHOPPING CART</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="">PROFILES</a>
                        </li>

                        </ul>
                        <form class="form-inline my-2 my-lg-0 ml-5">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search here" aria-label="Search">
                            <button type="button" class="btn btn-outline-dark">Search</button>
                        </form>

                        <!--icon atas kanan, samping search-->
                    <div class="icon mt-2 ml-2">
                        <h4>
                        <ul class="navbar-nav mr-auto">

                        </ul>
                        </h4>
                    </div>
                    </div>
                </nav>

        <!--checkout top-->
            <div class="container">
            <div class="py-5 text-center mt-5">
                <h1>C H E C K O U T</h1>
            </div>

            <!--Shopping Cart-->
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="#">Your Shopping Cart : </span>
                    <span class="badge badge-secondary badge-pill">0</span>
                    <!--disini harusnya bisa nambah angka nya ketik ada nambahin produk ke keranjang nya-->
                </h4>

                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="">P1</h6>
                        <small class="text-dark">Blank</small>
                    </div>
                    <span class="text-dark">Empty</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="">P2</h6>
                        <small class="text-dark">Blank</small>
                    </div>
                    <span class="text-dark">Empty</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="">P3</h6>
                        <small class="text-dark">Blank</small>
                    </div>
                    <span class="text-dark">Empty</span>
                    </li>

                    <!--<li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">ENTER PROMO CODE</h6>
                            <small>Empty</small>
                        </div>
                        <span class="text-danger">-Rp0</span>
                    </li> -->

                    <li class="list-group-item d-flex justify-content-between text-dark">
                    <span>Total Payment : </span>
                    <strong></strong>
                    </li>
                </ul>

                <!--<form class="card p-2">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Redeem</button>
                    </div>
                    </div>
                </form> -->
                </div>
                <!--End Side Cart-->

                <!--Billing Address-->
                <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing Address :</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row">
                    <div class="col-md-6 mb-3">
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="username">Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Name" required="">
                        <div class="invalid-feedback" style="width: 100%;">
                        Your username is required !
                        </div>
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates !
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="address">Address 1</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address !
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="address2">Address 2<span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                        <option value="">Choose...</option>
                        <option>Indonesia</option>
                        <option>Singapura</option>
                        </select>
                        <div class="invalid-feedback">
                        Please select a valid country !
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required="">
                        <option value="">Choose...</option>
                        <option>Jakarta</option>
                        <option>Tangerang</option>
                        <option>Bogor</option>
                        <option>Bandung</option>
                        </select>
                        <div class="invalid-feedback">
                        Please provide a valid state !
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip Code</label>
                        <input type="text" class="form-control" id="zip" placeholder="90ttysza" required="">
                        <div class="invalid-feedback">
                        Emter Valid Zip code !.
                        </div>
                    </div>

                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next shopping</label>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3">Payment Method : </h4>

                    <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Credit Card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">Debit Card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">GOPAY</label>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Valid Name on Card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="Mister Bean" required="">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                        Name on card is required !
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit Card Number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="16 digit credit card number" required="">
                        <div class="invalid-feedback">
                        Credit card number is required !
                        </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration Date</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="09/24" required="">
                        <div class="invalid-feedback">
                        Expiration date required !
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="cc-cvv">CVV Number</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="990" required="">
                        <div class="invalid-feedback">
                        Security code required !
                        </div>
                    </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block font-weight-bold" type="submit">Continue to Payments</button>
                </form>
                </div>
            </div>
</div>
            <!--End Billing address-->

            <!--Footer-->
            <!-- Footer zone -->
            <Footer class="bg-warning text-black text-center mt-4 p-4">
            <p class="mb-1 font-weight-bold">@Copyright 2021 Fashionista.Co | All Rights Reserved</p>
            <p class="mb-1">Information Systems UAJ</p>
                <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Contact Us</a></li>
                <li class="list-inline-item"><a href="#">Our Store</a></li>
                <li class="list-inline-item"><a href="/about">About Us</a></li>
                <li class="list-inline-item"><a href="#">Stay Updated</a></li>
                </ul>
                </Footer>


            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
            <script src="../../assets/js/vendor/popper.min.js"></script>
            <script src="../../dist/js/bootstrap.min.js"></script>
            <script src="../../assets/js/vendor/holder.min.js"></script>
        <!--end Check out-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>
