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
                $products_14 = Product::ofType('seer_rating_id', '1')
                    ->ofType('brand_id', '1')
                    ->orderBy('unit_size_id', 'asc')
                    ->get();
                $products_15 = Product::ofType('seer_rating_id', '2')
                    ->ofType('brand_id', '1')
                    ->orderBy('unit_size_id', 'asc')
                    ->get();
                $products_16 = Product::ofType('seer_rating_id', '3')
                    ->ofType('brand_id', '1')
                    ->orderBy('unit_size_id', 'asc')
                    ->get();

        return view('home');
    }
}
