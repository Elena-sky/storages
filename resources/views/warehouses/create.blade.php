@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New warehouse</div>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">

                        {!! Form::open(array('route' => array('warehouses.store'), 'files' => true)) !!}

                        <div class="form-group">
                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('email', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('website', 'Website:') !!}
                            {!! Form::text('website', '', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('logo', 'Logo:') !!}
                            {!! Form::file('logo')!!}
                        </div>

                        <div class="form-group">
                            {{ Form::button('Create', ['class' => 'btn btn-default', 'type' => 'submit']) }}

                        </div>

                    </div>


                    {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
