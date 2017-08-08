@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h4 class="text-center">All Products</h4>

                </div>

                <div class="panel-body">

                    <table class="table table-striped">

                        <thead>

                            <tr>

                                <th>Name</th>

                                <th>Price</th>

                                <th>Edit</th>

                                <th>Delete</th>

                            </tr>

                        </thead>

                        <tbody>

                            @if(count($products) > 0)

                                @foreach($products as $product)

                                    <tr>

                                        <td>{{ $product->name }}</td>

                                        <td>{{ $product->price }}</td>

                                        <td>

                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success btn-xs">edit</a>

                                        </td>

                                        <td>

                                            {{ Form::open(['method' => 'DELETE', 'action' => ['ProductsController@destroy',$product->id]]) }}

                                            <div class="form-group">

                                                {{ Form::submit('delete',['class'=>'btn btn-xs btn-danger']) }}

                                            </div>

                                            {{ Form::close() }}

                                        </td>

                                    </tr>

                                @endforeach

                            @endif

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection