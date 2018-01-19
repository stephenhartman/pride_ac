@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="{{ url('/image/trane.png') }}" class="image-heading"></a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <td>Unit Size</td>
                                        <td>SEER Rating</td>
                                        <td>Price</td>
                                        @if (Auth::user())
                                            <td></td>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->unit_size->size }} Tons</td>
                                            <td>{{ $product->seer_rating->rating }} SEER</td>
                                            <td>${{ $product->price }}</td>
                                            @if (Auth::user())
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            {{ Form::open(['method' => 'GET', 'route' => ['products.edit', $product->id]]) }}
                                                            {{ Form::button('<i class="glyphicon glyphicon-pencil"></i> Edit', array('type' => 'submit', 'class' => 'btn btn-info')) }}
                                                            {{ Form::close() }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            {{ Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id], ]) }}
                                                            {{ Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', array('type' => 'submit', 'data-id' => $product->id, 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')")) }}
                                                            {{ Form::close() }}
                                                        </div>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
