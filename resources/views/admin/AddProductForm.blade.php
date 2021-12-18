

 <!-- Css yield -->
@include('admin.librarycss')
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

@include('admin.leftnavbar')
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
<div id="content">

@include('admin.topnavbar')


<div class="d-sm-flex align-items-center justify-content-between mb-4 ml-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bolder">Add Products</h1>
    </div>

    @if(session()->has('message'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">X</button>

    {{session()->get('message')}}

</div>

    @endif

    <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data"> 
        @csrf

<div class="form-row">
            <div class="form-group col-md-4 ml-4">
                <label> Product Name :</label>
                <input type="text" class="form-control" name="productname">
            </div>

            <div class="form-group col-md-4 ml-4">
                <label> Category :</label>
                <input type="text" class="form-control" name="category">
            </div>

            <div class="form-group col-md-4 ml-4">
                <label> Price :</label>
                <input type="number" class="form-control" name="price">
            </div>

            <div class="form-group col-md-4 ml-4">
                <label> Conditions :</label>
                <input type="text" class="form-control" name="conditions">
            </div>

            <div class="form-group col-md-4 ml-4">
                <label> Weight :</label>
                <input type="number" class="form-control" name="weight">
            </div>

            <div class="form-group col-md-4 ml-4">
                <label> Stocks :</label>
                <input type="number" class="form-control" name="stocks">
            </div>

            <div class="form-group col-md-4 ml-4">
                <label> Product Description :</label>
                <input type="text" class="form-control" name="desc">
            </div>

            <div class="form-group col-md-4 ml-4">
                <label> Product Image :</label>
                <input type="file" class="form-control" name="image">
            </div>
        </div>

        <button type="submit" class="btn btn-primary ml-4">Add</button>
    </form>