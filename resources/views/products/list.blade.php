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
                            <li class="breadcrumb-item"><a href="/">{{$lang['dashboard']}}</a></li>
                            <li class="breadcrumb-item active">{{$lang['list']}}</li>
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
                            <h3 class="card-title">{{$lang['list']}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="products" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>{{$lang['title']}}</th>
                                    <th>{{$lang['sku']}}</th>
                                    <th>{{$lang['warehouse']}}</th>
                                    <th>{{$lang['description']}}</th>
                                    <th>{{$lang['create']}}e</th>
                                    <th></th>
                                    <th></th>
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
                                            <button type="button" class="btn btn-secondary">
                                                {{$lang['edit']}}
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button" data-product-id= "{{$item->id}}" class="btn btn-danger product">
                                            {{$lang['delete']}}
                                        </button>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{$lang['title']}}</th>
                                    <th>{{$lang['sku']}}</th>
                                    <th>{{$lang['warehouse']}}</th>
                                    <th>{{$lang['description']}}</th>
                                    <th>{{$lang['create']}}e</th>
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
