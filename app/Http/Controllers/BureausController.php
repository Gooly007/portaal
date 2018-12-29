<?php

namespace App\Http\Controllers;

use App\Bureaus;
use Illuminate\Http\Request;

class BureausController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bureaus = bureaus::all();
        return view('bureaus/index', compact('bureaus'));
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
     * @param  \App\Bureaus  $bureaus
     * @return \Illuminate\Http\Response
     */
    public function show(Bureaus $bureaus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bureaus  $bureaus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bureaus $bureaus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bureaus  $bureaus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bureaus $bureaus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bureaus  $bureaus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bureaus $bureaus)
    {
        //
    }
}
