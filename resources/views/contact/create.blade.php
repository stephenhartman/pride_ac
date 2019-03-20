@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Contact Pride AC Jacksonville</h4>
                </div>
                <div class="card-body">
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
                                {{ Form::text('email', null, ['class' => 'form-control']) }}
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
                        @if(Agent::isMobile())
                            <div class="col-md-6" data-theme="light" style="transform:scale(0.89); transform-origin:0 0; margin:auto">
                        @else
                            <div class="col-md-6">
                        @endif
                            <div class="text-center">
                                {!! NoCaptcha::display() !!}
                            </div>
                        </div>
                        @if(Agent::isMobile())
                            <div class="col-lg-6">
                        @else
                            <div class="col-lg-6" style="margin-top: 1rem">
                        @endif
                            {{ Form::submit('Submit', ['class' => 'btn btn-lg btn-info btn-block']) }}
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {!! NoCaptcha::renderJs() !!}
@endpush
