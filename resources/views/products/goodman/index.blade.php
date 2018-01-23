@extends('layouts.app')

@section('title', 'Goodman Prices')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{ url('/image/goodman.png') }}" class="image-heading"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>1.5 Ton</th>
                                    <th>2 Ton</th>
                                    <th>2.5 Ton</th>
                                    <th>3.0 Ton</th>
                                    <th>3.5 Ton</th>
                                    <th>4.0 Ton</th>
                                    <th>5.0 Ton</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">14 SEER</th>
                                    @foreach ($products_14 as $product)
                                        <td>
                                            @if (Auth::user())
                                                <a href="{{ URL::to('products/' . $product->id . '/edit') }}">${{ $product->price }}</a>
                                            @else
                                                ${{ $product->price }}
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th scope="row">15 SEER</th>
                                    @foreach ($products_15 as $product)
                                        <td>
                                            @if (Auth::user())
                                                <a href="{{ URL::to('products/' . $product->id . '/edit') }}">${{ $product->price }}</a>
                                            @else
                                                ${{ $product->price }}
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th scope="row">16 SEER</th>
                                    @foreach ($products_16 as $product)
                                        <td>
                                            @if (Auth::user())
                                                <a href="{{ URL::to('products/' . $product->id . '/edit') }}">${{ $product->price }}</a>
                                            @else
                                                ${{ $product->price }}
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Warranty Information</h4>
                        </div>
                        <div class="panel-body">
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
    </div>
@endsection
