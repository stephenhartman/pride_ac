<?php

namespace App\Http\Controllers;

use App\goodman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoodmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goodman = DB::table('goodman')
            ->groupBy('seer_rating', 'unit_size')
            ->get();

        return view('products.goodman.index', compact('goodman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.goodman.create');
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
            'price' => 'required',
            'seer_rating' => 'required',
            'unit_size' => 'required',
        ]);

        $goodman = new Goodman;

        $goodman->model = $request->model;
        $goodman->price = $request->price;
        $goodman->seer_rating = $request->seer_rating;
        $goodman->unit_size = $request->unit_size;
        $goodman->description = $request->description;
        $goodman->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goodman  $goodman
     * @return \Illuminate\Http\Response
     */
    public function show(Goodman $goodman)
    {
        return view('products.goodman.show', compact('goodman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goodman  $goodman
     * @return \Illuminate\Http\Response
     */
    public function edit(Goodman $goodman)
    {
        return view('products.goodman.edit', compact('goodman'));
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
        $goodman->model = $request->model;
        $goodman->price = $request->price;
        $goodman->seer_rating = $request->seer_rating;
        $goodman->unit_size = $request->unit_size;
        $goodman->description = $request->description;
        $goodman->save();

        // set flash data with success message
        Session::flash('success', 'The Goodman product was successfully saved.');
        return redirect()->route('products.goodman.show', $goodman->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goodman  $goodman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goodman $goodman)
    {
        $goodman->delete();

        Session::flash('warning', 'The Goodman product was successfully deleted.');
        return redirect()->route('products.goodman.index');
    }
}
