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
                            <li class="breadcrumb-item active">{{$lang['new_product']}}</li>
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

                    <h1>{{$lang['new_product']}}</h1>

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

                        {!! Form::open(array('route' => array('product.store'))) !!}

                        <div class="form-group">
                            {!! Form::label('title', $lang['title'].':') !!}
                            {!! Form::text('title', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('sku', $lang['sku'].':') !!}
                            {!! Form::text('sku', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('warehouse', $lang['warehouse'].':') !!}
                            {!! Form::select('warehouse_id', $warehouses, ['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('description', $lang['description'].':') !!}
                            {!! Form::text('description', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {{ Form::button($lang['create'], ['class' => 'btn btn-default', 'type' => 'submit']) }}

                        </div>

                        {!! Form::close() !!}

                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
