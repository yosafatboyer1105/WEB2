@extends('layouts.master')
@section('content')

            <!--Accordion-->
            <div class="mt-5 container col-10 col-sm-9 col-md- 8 col-lg-10"style = padding-top:1px>
                <h2 style="color:white;" class="text-center font-weight-bold m-4">A B O U T U S</h2>
                <div class="accordion" id="accordionExample">

                <!--button pertama-->
                <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i style="color:black; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="fas fa-chevron-down font-weight-bolder"> How To Order </i>
                    </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <strong> 1. Pilih Produk </strong>
                        <p> </p>
                        <br>
                        <strong> 2. Pembayaran & Konfirmasi </strong>
                        <p> </p>
                        <br>
                        <strong> 3. Pengiriman Barang </strong>
                        <p> </p>
                        <br>
                    </div>
                </div>
                </div>

                <!--button kedua-->
                <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i style="color:black; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="fas fa-chevron-down font-weight-bolder"> Terms and Conditions </i>
                    </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                    <strong>1. Produk tidak Sesuai</strong>
                    <p> </p>
                        <br>
                    <strong>2. Kesalahan Pengiriman</strong>
                    <p> </p>
                        <br>
                    <strong>3. Barang Tidak Sampai </strong>
                    <p> </p>
                        <br>
                    <strong>4. Maksimal Pembayaran</strong>
                    <p> </p>
                        <br>
                    </div>
                    </div>
                </div>
                </div>

                <!--button ketiga-->
                <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i style="color:black; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="fas fa-chevron-down font-weight-bolder"> Privacy Policy</i>
                    </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                    <strong>1. Kebijakan Privasi Data Informasi Pengguna</strong>
                    <p> </p>
                        <br>
                    <strong>2. Penyimpanan Data</strong>
                    <p> </p>
                        <br>
                    <strong>3. Pembaharuan Data</strong>
                    <p> </p>
                        <br>
                    <Strong>4. Penggunaan Data</Strong>
                    <p> </p>
                        <br>
                    </div>
                </div>
                </div>
            </div>
        </div>
     <!--End Accordion-->

@endsection
