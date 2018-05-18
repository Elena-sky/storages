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
                            <li class="breadcrumb-item active">Product Form</li>
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

                    <h1>Update product</h1>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::model($product, array('route' => array('product.update', $product->id))) !!}

                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', $product->title, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('sku', 'Sku:') !!}
                        {!! Form::text('sku', $product->sku, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('warehouse', 'Warehouse:') !!}
                        {!! Form::select('warehouse_id', $warehouses, $product->warehouses_id, ['class' => 'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', 'Description:') !!}
                        {!! Form::text('description', $product->description, ['class' => 'form-control']) !!}
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
