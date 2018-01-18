<?php

namespace App\Http\Controllers;

use App\goodman;
use Illuminate\Http\Request;

class GoodmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.goodman');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goodman  $goodman
     * @return \Illuminate\Http\Response
     */
    public function show(Goodman $goodman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goodman  $goodman
     * @return \Illuminate\Http\Response
     */
    public function edit(Goodman $goodman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goodman  $goodman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goodman $goodman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goodman  $goodman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goodman $goodman)
    {
        //
    }
}
