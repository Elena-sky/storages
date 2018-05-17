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
                            <li class="breadcrumb-item active">Warehouse Form</li>
                        </ol>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->

                <div class="offset-md-3 col-sm-6">

                    <h1>Update warehouse</h1>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        {!! Form::model($warehouse, array('route' => array('warehouses.update', $warehouse->id), 'files' => true)) !!}

                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                                {!! Form::label('title', 'Title:') !!}
                                {!! Form::text('title', $warehouse->title, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::text('email', $warehouse->email, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('website', 'Website:') !!}
                                {!! Form::text('website', $warehouse->email, ['class' => 'form-control']) !!}
                            </div>

                        <div class="form-group ">
                            {!! Form::label('currentLogo', 'Current logo') !!}
                            <div class="col-sm-12">

                                @if($urlLogo)

                                    <div class="col-sm-4">
                                        <img src="{{url($urlLogo)}}" width="300px" alt="Logo Image"/>
                                    </div>

                                @else

                                    <div class="col-sm-4">
                                        <img src="{{ asset("/img/no_picture.jpg") }}" width="300px"
                                             alt="{{'no_picture'}}">
                                    </div>

                                @endif

                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('logo', 'New Logo:') !!}
                            {!! Form::file('logo')!!}
                        </div>

                        <div class="form-group">
                            {{ Form::button('Update', ['class' => 'btn btn-default', 'type' => 'submit']) }}

                        </div>

                        {!! Form::close() !!}

                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection