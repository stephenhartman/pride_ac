@extends('layouts.app')

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
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Welcome to Pride AC Jacksonville</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3>Prices for Installation</h3>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-fill" id="productTab" role="tablist">
                            <li class="nav-item">
                                <a id="goodman-tab" href="#goodman" aria-controls="goodman" role="tab" data-toggle="tab">
                                    <img src="{{ url('/image/goodman.png') }}" class="image-heading">
                                </a>
                            </li>
                            <!--li class="nav-item">
                                <a id="trane-tab" href="#trane" aria-controls="trane" role="tab" data-toggle="tab">
                                    <img src="{{ url('/image/trane.png') }}" class="image-heading">
                                </a>
                            </li-->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content" id="productTabContent">
                            <div role="tabpanel" class="tab-pane fade show active" id="goodman" aria-labelledby="goodman-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>1.5 Ton</th>
                                            <th>2.0 Ton</th>
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
                            <!--div role="tabpanel" class="tab-pane fade" id="trane" aria-labelledby="trane-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>1.5 Ton</th>
                                            <th>2.0 Ton</th>
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
                                            @foreach ($trane_products_14 as $product)
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
                                            @foreach ($trane_products_15 as $product)
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
                                            @foreach ($trane_products_16 as $product)
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
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
