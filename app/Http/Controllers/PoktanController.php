<?php

namespace App\Http\Controllers;

use App\Poktan;
use Illuminate\Http\Request;

class PoktanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poktans = Poktan::all();
        return view('poktan.index', compact('poktans'));
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
     * @param  \App\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function show(Poktan $poktan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function edit(Poktan $poktan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poktan $poktan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poktan $poktan)
    {
        //
    }
}
