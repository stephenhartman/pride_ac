@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Goodman Heating and Air Conditioning
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <div class="col-md-2 col-sm-12">
                                        @if (Auth::user())
                                            <a href="{{ route('goodman.create') }}" class="btn btn-block btn-primary btn-lg" style="margin-top: 18px">Create Goodman Product</a>
                                        @endif
                                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="text-center">
                                <h2>More coming soon!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
