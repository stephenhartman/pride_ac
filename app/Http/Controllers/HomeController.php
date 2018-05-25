<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goodman_products_14 = Product::ofType('seer_rating_id', '1')
            ->ofType('brand_id', '1')
            ->orderBy('unit_size_id', 'asc')
            ->get();
        $goodman_products_15 = Product::ofType('seer_rating_id', '2')
            ->ofType('brand_id', '1')
            ->orderBy('unit_size_id', 'asc')
            ->get();
        $goodman_products_16 = Product::ofType('seer_rating_id', '3')
            ->ofType('brand_id', '1')
            ->orderBy('unit_size_id', 'asc')
            ->get();
        $american_products_14 = Product::ofType('seer_rating_id', '1')
            ->ofType('brand_id', '3')
            ->orderBy('unit_size_id', 'asc')
            ->get();
        $american_products_15 = Product::ofType('seer_rating_id', '2')
            ->ofType('brand_id', '3')
            ->orderBy('unit_size_id', 'asc')
            ->get();
        $american_products_16 = Product::ofType('seer_rating_id', '3')
            ->ofType('brand_id', '3')
            ->orderBy('unit_size_id', 'asc')
            ->get();

        return view('home', compact
        ('goodman_products_14', 'goodman_products_15', 'goodman_products_16',
            'american_products_14', 'american_products_15', 'american_products_16'));
    }
}
