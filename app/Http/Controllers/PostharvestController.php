<?php

namespace App\Http\Controllers;

use App\Postharvest;
use App\Harvest;
use Illuminate\Http\Request;

class PostharvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Harvest $harvest)
    {
        return view('postharvest.create', compact('harvest'));
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
     * @param  \App\Postharvest  $postharvest
     * @return \Illuminate\Http\Response
     */
    public function show(Postharvest $postharvest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postharvest  $postharvest
     * @return \Illuminate\Http\Response
     */
    public function edit(Postharvest $postharvest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postharvest  $postharvest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postharvest $postharvest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postharvest  $postharvest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postharvest $postharvest)
    {
        //
    }
}
