<?php

namespace App\Http\Controllers;

use App\Product;

class GoodmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('brand_id', 1)
            ->orderBy('seer_rating_id', 'asc')
            ->orderBy('unit_size_id', 'asc')
            ->get();

        return view('goodman.index', compact('products'));
    }
}
