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
                            <li class="breadcrumb-item active">Warehouse List</li>
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
                            <h3 class="card-title">List of warehouses</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="warehouses" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                <th>Title</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Website</th>
                                <th>Create</th>
                                <th></th>
                                <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($warehouses as $item)
                                <tr id="{{$item->id}}">
                                <td>{{$item->title}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    @if(\App\Repositories\LogoRepository::getUrlLogo($item->logo))

                                        <div class="col-sm-4">
                                            <img src="{{url(\App\Repositories\LogoRepository::getUrlLogo($item->logo))}}" width="100px" alt="Logo Image"/>
                                        </div>

                                    @else

                                        <div class="col-sm-4">
                                            <img src="{{ asset("/img/no_picture.jpg") }}" width="100px"
                                                 alt="{{'no_picture'}}">
                                        </div>

                                    @endif

                                </td>
                                <td>
                                    <a href="{{$item->website}}">
                                        {{$item->website}}
                                    </a>
                                </td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <a href="{{ route( 'warehouses.edit', $item->id) }}">
                                        <button type="button" class="btn btn-secondary">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" data-warehouse-id= "{{$item->id}}" class="btn btn-danger warehouses">Delete
                                    </button>
                                </td>
                                </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                <th>Title</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Website</th>
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
