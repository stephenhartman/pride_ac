<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'model' => 'required',
            'price' => 'required',
            'seer_rating' => 'required',
            'unit_size' => 'required',
            'brand' => 'required',
        ]);

        $product = new Product;

        $product->model = $request->model;
        $product->price = $request->price;
        $product->seer_rating_id = $request->seer_rating;
        $product->unit_size_id = $request->unit_size;
        $product->description = $request->description;
        $product->brand_id = $request->brand;
        $product->save();


        // set flash data with success message
        Session::flash('success', 'The '. $product->brand->name . ' product was successfully saved.');
        return redirect()->route('products.index');
    }

    /**
     * Display product resource
     *
     * @param product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Edit product resource
     *
     * @param product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update specified product
     *
     * @param Request $request
     * @param product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $product->model = $request->model;
        $product->price = $request->price;
        $product->seer_rating_id = $request->seer_rating;
        $product->unit_size_id = $request->unit_size;
        $product->description = $request->description;
        $product->brand_id = $request->brand;
        $product->save();

        // set flash data with success message
        Session::flash('success', 'The product was successfully saved.');
        return redirect()->route('products.index');
    }

    /**
     * Delete specified product
     *
     * @param product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        Session::flash('alert', 'The product was successfully deleted.');
        return redirect()->route('products.index');
    }

    /**
     * Index for Goodman Products
     *
     * @return mixed
     */
    public function goodman()
    {
        $products = Product::specificBrand(1)
            ->orderBy('unit_size_id', 'asc');

        return view('products.goodman.index')->withProducts($products);
    }

    /**
     * Index for Trane Products
     *
     * @return mixed
     */
    public function trane()
    {
        $products = Product::specificBrand(2)
            ->orderBy('unit_size_id', 'asc');

        return view('products.trane.index')->withProducts($products);
    }
}
