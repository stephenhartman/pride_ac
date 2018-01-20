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
            </div>
        </div>
    </div>
@endsection
