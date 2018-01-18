@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Offered Brands</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ url('products/goodman/index') }}"><img src="{{ public_path('/image/goodman.png') }}"></a>
                            </div>
                        </div>
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