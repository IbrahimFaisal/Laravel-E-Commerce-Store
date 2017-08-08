@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h4 class="text-center">create a new product</h4>

                </div>

                <div class="panel-body">

                    {{ Form::open(['method' => 'POST', 'action' =>'ProductsController@store', 'files'=>true]) }}

                    <div class="form-group">

                        {{Form::label('name', 'Pick a product name:')}}
                        {{Form::text('name',null,['class'=>'form-control'])}}

                    </div>

                    <div class="form-group">

                        {{Form::label('avatar','Upload a Photo:')}}
                        {{Form::file('avatar',null,['class'=>'form-control'])}}

                    </div>

                    <div class="form-group">

                        {{Form::label('price','Product price:')}}
                        {{Form::text('price',null,['class'=>'form-control'])}}

                    </div>

                    <div class="form-group">

                        {{Form::label('body', 'Product Description:')}}
                        {{Form::textarea('body',null,['class'=>'form-control'])}}

                    </div>

                    <div class="form-group">

                        {{ Form::submit('Store product',['class'=>'form-control btn btn-xs btn-success']) }}

                    </div>

                    {{ Form::close() }}

                </div>

            </div>

        </div>

    </div>

@endsection