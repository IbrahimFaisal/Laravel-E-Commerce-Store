@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h4 class="text-center">edit this product</h4>

                </div>

                <div class="panel-body">

                    {{ Form::model($product,['method' => 'PATCH', 'action' =>['ProductsController@update', $product->id], 'files'=>true]) }}

                    <div class="form-group">

                        {{Form::label('name', 'edit this product name:')}}
                        {{Form::text('name',null,['class'=>'form-control'])}}

                    </div>

                    <div class="form-group">

                        {{Form::label('avatar','Upload a Photo:')}}
                        {{Form::file('avatar',null,['class'=>'form-control'])}}

                    </div>

                    <div class="form-group">

                        {{Form::label('price','Edit product price:')}}
                        {{Form::text('price',null,['class'=>'form-control'])}}

                    </div>

                    <div class="form-group">

                        {{Form::label('body', 'Edit product description:')}}
                        {{Form::textarea('body',null,['class'=>'form-control'])}}

                    </div>

                    <div class="form-group">

                        {{ Form::submit('Update product',['class'=>'form-control btn btn-xs btn-success']) }}

                    </div>

                    {{ Form::close() }}

                </div>

            </div>

        </div>

    </div>

@endsection