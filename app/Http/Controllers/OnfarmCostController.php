<?php

namespace App\Http\Controllers;

use App\OnfarmCost;
use App\Onfarm;
use Illuminate\Http\Request;

class OnfarmCostController extends Controller
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
    public function create(Onfarm $onfarm)
    {
        $this->authorize('createSeed', $onfarm);
        $url = request()->fullUrl();
        return view('onfarm-cost.create', compact(['onfarm', 'url']));
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
     * @param  \App\OnfarmCost  $onfarmCost
     * @return \Illuminate\Http\Response
     */
    public function show(OnfarmCost $onfarmCost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OnfarmCost  $onfarmCost
     * @return \Illuminate\Http\Response
     */
    public function edit(OnfarmCost $onfarmCost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OnfarmCost  $onfarmCost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnfarmCost $onfarmCost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnfarmCost  $onfarmCost
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnfarmCost $onfarmCost)
    {
        //
    }
}
