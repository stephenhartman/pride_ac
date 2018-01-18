@extends('layouts.app')

@section('title', 'Edit Goodman Product')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Goodman Product</div>
                    <div class="panel-body">
                        { Form::model($goodman, ['route' => ['goodman.update', $goodman->id], 'method' => 'PUT']) }}
                        {{Form::label('model','Model')}}
                        {{Form::text('model', null, array('class' => 'form-control') )}}
                        <br>
                        {{Form::label('price','Unit Price')}}
                        {{Form::number('price', null, array('class' => 'form-control') )}}
                        <br>
                        {{Form::label('seer_rating','Seer Rating')}}
                        {{Form::number('seer_rating', null, array('class' => 'form-control') )}}
                        <br>
                        {{Form::label('unit_size','Unit Size (Tonnage)')}}
                        {{Form::number('unit_size', null, array('class' => 'form-control') )}}
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