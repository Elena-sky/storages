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
                            <table id="warehouses" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>{{$lang['title']}}</th>
                                    <th>{{$lang['email']}}</th>
                                    <th>{{$lang['logo']}}</th>
                                    <th>{{$lang['website']}}</th>
                                    <th>{{$lang['create']}}</th>
                                    <th></th>
                                    <th></th>
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
                                            <button type="button" class="btn btn-secondary">
                                                {{$lang['edit']}}
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button" data-warehouse-id= "{{$item->id}}" class="btn btn-danger warehouses">
                                            {{$lang['delete']}}
                                        </button>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{$lang['title']}}</th>
                                    <th>{{$lang['email']}}</th>
                                    <th>{{$lang['logo']}}</th>
                                    <th>{{$lang['website']}}</th>
                                    <th>{{$lang['create']}}</th>
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
