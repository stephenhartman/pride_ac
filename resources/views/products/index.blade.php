@extends('layouts.app')

@section('title', 'Offered Brands')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 text-center"></div>
                            <div class="col-md-6 text-center">
                                <a href="{{ route('goodman') }}">
                                    <img src="{{ url('/image/goodman.png') }}" class="product-image">
                                </a>
                            </div>
                            <div class="col-md-6 text-center">
                                <!--a href="{{ route('trane') }}">
                                    <img src="{{ url('/image/trane.png') }}" class="product-image">
                                </a-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center">More coming soon!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
