@extends('layouts.app')

@section('title', 'Edit '. $product->brand->name . ' Product')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header clearfix">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-title pull-left">
                                    Edit {{ $product->brand->name }} Product
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{ Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id], ]) }}
                                {{ Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', array('type' => 'submit', 'data-id' => $product->id, 'class' => 'btn btn-danger pull-right', 'onclick' => "return confirm('Are you sure?')")) }}
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{ Form::model($product, ['route' => ['products.update', $product], 'method' => 'PUT']) }}
                        <div class="row">
                            <div class="col-md-12">
                                {{Form::label('model','Model')}}
                                {{Form::text('model', $product->model, array('class' => 'form-control') )}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {{Form::label('price','Unit Price')}}
                                {{Form::number('price', $product->price, array('class' => 'form-control') )}}
                            </div>
                            <div class="col-md-6">
                                {{Form::label('seer_rating','Seer Rating')}}
                                {{Form::select('seer_rating', [
                                    1 => '14 SEER',
                                    2 => '15 SEER',
                                    3 => '16 SEER'],
                                    $product->seer_rating_id, array('class' => 'form-control') )}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {{Form::label('unit_size','Unit Size (Tonnage)')}}
                                {{Form::select('unit_size', [
                                    1 => '1.5 Tons',
                                    2 => '2.0 Tons',
                                    3 => '2.5 Tons',
                                    4 => '3.0 Tons',
                                    5 => '3.5 Tons',
                                    6 => '4.0 Tons',
                                    7 => '5.0 Tons'],
                                    $product->unit_size_id, array('class' => 'form-control') )}}
                            </div>
                            <div class="col-md-6">
                                {{Form::label('brand','Brand')}}
                                {{Form::select('brand', [
                                    1 => 'Goodman',
                                    2 => 'Trane',
                                    3 => 'American Standard',
                                    4 => 'Carrier',
                                    5 => 'Daikin'],
                                    $product->brand_id, array('class' => 'form-control') )}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {{Form::label('description','Description')}}
                                {{Form::textarea('description', null, array('class' => 'form-control') )}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {{Form::submit('Submit', array('class' => 'btn btn-info btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
                            </div>
                            <div class="col-md-6">
                                {!! Html::linkRoute('products.index', 'Cancel', array(), array('class' => "btn btn-danger btn-lg btn-block", 'style' => 'margin-top: 20px')) !!}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection