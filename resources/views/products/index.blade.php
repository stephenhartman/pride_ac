@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Offered Brands</h4>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                @if (Auth::user())
                                <a href="{{ route('products.create') }}" class="btn btn-primary">New Product</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('goodman') }}">
                                    <img src="{{ url('/image/goodman.png') }}" class="product-image"></a>
                            </div>
                            <div class="col-md-6">
                                <a href="#"><!-- route('trane' in the future -->
                                    <img src="{{ url('/image/trane.png') }}" class="product-image"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <h3>More coming soon!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
