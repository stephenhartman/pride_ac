@extends('layouts.app')

@section('title', 'Trane Prices')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{ url('/image/trane.png') }}" class="image-heading"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered table-responsive">
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
                                <th scope="row">14 Seer</th>
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
                                <th scope="row">15 Seer</th>
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
                                <th scope="row">16 Seer</th>
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
                                <li>
                                    Every Trane residential unit comes with a Base Limited Warranty, which covers parts
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
                                    <a href="https://www.trane.com/residential/en/for-owners/warranty-and-registration.html">You can register your Trane Product through this link.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
