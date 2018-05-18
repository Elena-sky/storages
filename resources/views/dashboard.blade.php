@extends('layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="offset-md-6 col-sm-6">


                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->


            <h5 class="mt-4 mb-2">Info Box </h5>
            <div class="row">

                <div class="col-md-6 col-sm-6 col-12">
                    <div class="info-box bg-success">
                        <span class="info-box-icon"><i class="fa fa-archive"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Warehouses</span>

                            <hr>

                            <span class="progress-description">
                  {{$warehousesCount}}  resources in storage
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->


                <div class="col-md-6 col-sm-6 col-12">
                    <div class="info-box bg-warning">
                        <span class="info-box-icon"><i class="fa fa-product-hunt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Products</span>

                            <hr>
                            <span class="progress-description">
                  {{$productsCount}} resources in storage
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->


            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
