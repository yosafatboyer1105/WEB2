
<!--pake 1 aja, nanti yang lain bisa generate sama, karena make for loops-->      

                <!--card baris ke 1-->
                    <!--c1-->
                    <div class="row mx-auto mt-4">
                    <div class="card mr-2 ml-2" style="width: 15rem;">
                        <img src=" " class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Product Display OI</h5>
                        <h5 class="font-weight-bolder"> </h5>
                        <br>
                        <p class="font-weight-bolder"> Price </p>
                        <br>
                        <button id="3" type="button" class="btn btn-primary" data-target="#produk1" data-toggle="modal">Product Detail</button>
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
