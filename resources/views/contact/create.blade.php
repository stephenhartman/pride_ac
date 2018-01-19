@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Pride AC Jacksonville</div>

                    <div class="panel-body">
                        {{ Form::open(['route' => 'contact.store']) }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('name', 'Your Name') }}
                                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('email', 'E-mail Address') }}
                                    {{ Form::text('email', 'example@gmail.com', ['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('phone', 'Ten Digit Phone Number') }}
                                    {{ Form::tel('phone', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{ Form::label('sq_footage', 'Square Footage of Home') }}
                                    {{ Form::number('sq_footage', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('notes', 'Additional Notes') }}
                                    {{ Form::textarea('notes', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                {{ Form::submit('Submit', ['class' => 'btn btn-info btn-block']) }}
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
