@extends('layouts.app')

@section('title', 'Goodman Prices')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{ url('/image/goodman.png') }}" class="image-heading"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include('layouts.table')
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Warranty Information</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            Pride AC and Heating will warranty all labor for a period of one year.
                        </li>
                        <li>Goodman brand limited warranties cover defects in materials and
                            workmanship that appear under normal use and maintenance for a period of ten years.
                        </li>
                        <li>Product registration through Goodman entitles the owner of the unit to additional
                            rights and remedies where applicable.
                        </li>
                        <li>
                            Select higher efficiency Goodman brand air conditioners and heat pumps offer Lifetime
                            Compressor Limited Warranty to the original, registered owner. If the original registered
                            owner should have a compressor failure, we will replace the unit with a comparable Goodman
                            brand air conditioner or heat pump.
                        </li>
                        <li>
                            <a href="https://www.goodmanmfg.com/product-registration">You can register your Goodman Product through this link.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
