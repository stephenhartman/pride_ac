@extends('layouts.app')

@section('title', 'Edit Goodman Product')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Goodman Product</div>
                    <div class="panel-body">
                        {{ Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) }}
                        {{Form::label('model','Model')}}
                        {{Form::text('model', null, array('class' => 'form-control') )}}
                        <br>
                        {{Form::label('price','Unit Price')}}
                        {{Form::number('price', null, array('class' => 'form-control') )}}
                        <br>
                        {{Form::label('seer_rating','Seer Rating')}}
                        {{Form::select('seer_rating', [
                            '14.0' => '14 SEER',
                            '15.0' => '15 SEER',
                            '16.0' => '16 SEER'],
                            null, array('class' => 'form-control') )}}
                        <br>
                        {{Form::label('unit_size','Unit Size (Tonnage)')}}
                        {{Form::select('unit_size', [
                            '1.5' => '1.5 Tons',
                            '2.0' => '2.0 Tons',
                            '2.5' => '2.5 Tons',
                            '3.0' => '3.0 Tons',
                            '3.5' => '3.5 Tons',
                            '4.0' => '4.0 Tons',
                            '4.5' => '4.5 Tons',
                            '5.0' => '5.0 Tons'],
                            null, array('class' => 'form-control') )}}
                        <br>
                        {{Form::label('brand','Brand')}}
                        {{Form::select('brand', [
                            '1' => 'Goodman',
                            '2' => 'Trane',
                            '3' => 'Carrier',
                            '4' => 'Daikin'],
                            null, array('class' => 'form-control') )}}
                        <br>
                        {{Form::label('description','Description')}}
                        {{Form::textarea('description', null, array('class' => 'form-control') )}}
                        <div class="row">
                            <div class="col-md-6">
                                {{Form::submit('Submit', array('class' => 'btn btn-info btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
                            </div>
                            <div class="col-md-6">
                                {!! Html::linkRoute('products.goodman', 'Cancel', array(), array('class' => "btn btn-danger btn-lg btn-block", 'style' => 'margin-top: 20px')) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection