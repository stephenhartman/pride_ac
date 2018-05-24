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
                        ${{ round($product->price) }}
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
                        ${{ round($product->price) }}
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
                        ${{ round($product->price) }}
                    @endif
                </td>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>
