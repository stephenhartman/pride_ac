@extends('layouts.app')

@section('meta')
    <meta name="description" content="Heating and Air Conditioning Service and Installation Company serving Northeast Florida and the Greater Jacksonville Area">
    <meta name="keywords" content="Air Conditioning, Heating, HVAC, Jacksonville, Northeast Florida, Heating and Air, AC Service, AC Installation">
    <meta name="robots" content="index,follow">
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('nav-tabs').find('a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Welcome to Pride AC Jacksonville</h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h3>Prices for Installation</h3>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#goodman" aria-controls="goodman" role="tab" data-toggle="tab">
                                        <img src="{{ url('/image/goodman.png') }}" class="image-heading"></a>
                                </li>
                                <li role="presentation"><a href="#american" aria-controls="american" role="tab" data-toggle="tab">
                                        <img src="{{ url('/image/american_standard.gif') }}" class="image-heading"></a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="goodman">
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
                                                @foreach ($goodman_products_14 as $product)
                                                    <td>
                                                        @if (Auth::user())
                                                            <a href="{{ URL::to('products/' . $product->id . '/edit') }}">${{ $product->price }}</a>
                                                        @else
                                                            ${{ round($product->price) }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th scope="row">15 SEER</th>
                                                @foreach ($goodman_products_15 as $product)
                                                    <td>
                                                        @if (Auth::user())
                                                            <a href="{{ URL::to('products/' . $product->id . '/edit') }}">${{ $product->price }}</a>
                                                        @else
                                                            ${{ round($product->price) }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th scope="row">16 SEER</th>
                                                @foreach ($goodman_products_16 as $product)
                                                    <td>
                                                        @if (Auth::user())
                                                            <a href="{{ URL::to('products/' . $product->id . '/edit') }}">${{ $product->price }}</a>
                                                        @else
                                                            ${{ round($product->price) }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="american">
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
                                                @foreach ($american_products_14 as $product)
                                                    <td>
                                                        @if (Auth::user())
                                                            <a href="{{ URL::to('products/' . $product->id . '/edit') }}">${{ $product->price }}</a>
                                                        @else
                                                            ${{ round($product->price) }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th scope="row">15 SEER</th>
                                                @foreach ($american_products_15 as $product)
                                                    <td>
                                                        @if (Auth::user())
                                                            <a href="{{ URL::to('products/' . $product->id . '/edit') }}">${{ $product->price }}</a>
                                                        @else
                                                            ${{ round($product->price) }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                <th scope="row">16 SEER</th>
                                                @foreach ($american_products_16 as $product)
                                                    <td>
                                                        @if (Auth::user())
                                                            <a href="{{ URL::to('products/' . $product->id . '/edit') }}">${{ $product->price }}</a>
                                                        @else
                                                            ${{ round($product->price) }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
