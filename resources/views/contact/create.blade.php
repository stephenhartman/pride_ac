@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Pride AC Jacksonville</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            {{ Form::open(['route' => 'contact.store']) }}

                            <div class="form-group">
                                {{ Form::label('name', 'Your Name') }}
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'E-mail Address') }}
                                {{ Form::text('email', 'example@gmail.com', ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('phone', 'Phone Number (Format: 123456789)') }}
                                {{ Form::tel('phone', null, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('sq_footage', 'Square Footage of Home') }}
                                {{ Form::number('sq_footage', null, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('notes', 'Additional Notes') }}
                                {{ Form::textarea('notes', null, ['class' => 'form-control']) }}
                            </div>

                            {{ Form::submit('Submit', ['class' => 'btn btn-info']) }}
                            {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
