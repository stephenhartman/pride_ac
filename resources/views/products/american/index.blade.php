@extends('layouts.app')

@section('title', 'American Standard Prices')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{ url('/image/american_standard.jpg') }}" class="image-heading"></a>
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
                        <li>
                            Every American Standard residential unit comes with a Base Limited Warranty, which covers parts
                            that break because of manufacturer defects.
                            The Base Limited Warranty can range from 1 year to 20 years depending on the product.
                        </li>
                        <li>
                            If you register your product within 60 days of installation, either by phone or online,
                            then it becomes a Registered Limited Warranty at no additional cost.
                        </li>
                        <li>
                            The Registered Limited Warranty can range from 5 years to lifetime depending on the product.
                            Registration can be completed online or by phone.
                        </li>
                        <li>
                            <a href="https://www.americanstandardair.com/owner-support/warranty-and-registration.html">You can register your American Standard Product through this link.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
