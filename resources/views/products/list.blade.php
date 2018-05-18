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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Products List</li>
                        </ol>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of products</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="products" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Sku</th>
                                    <th>Warehouse</th>
                                    <th>Description</th>
                                    <th>Create</th>
                                    <th></th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                <tr id="{{$item->id}}">
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->sku}}</td>
                                    <td>{{$warehouses[$item->warehouses_id]}}</td>
                                    <td>
                                        <a href="{{$item->website}}">
                                            {{$item->website}}
                                        </a>
                                    </td>
                                    <td>{{$item->description}}</td>
                                    <td>
                                        <a href="{{ route( 'product.edit', $item->id) }}">
                                            <button type="button" class="btn btn-secondary">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button" data-product-id= "{{$item->id}}" class="btn btn-danger product">Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Sku</th>
                                    <th>Warehouse</th>
                                    <th>Description</th>
                                    <th>Create</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>

    </div>
@endsection
