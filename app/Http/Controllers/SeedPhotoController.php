<?php

namespace App\Http\Controllers;

use App\SeedPhoto;
use Illuminate\Http\Request;

class SeedPhotoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
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
     * @param  \App\SeedPhoto  $seedPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(SeedPhoto $seedPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SeedPhoto  $seedPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(SeedPhoto $seedPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SeedPhoto  $seedPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeedPhoto $seedPhoto)
    {
        $seedPhoto->replacePhoto($request->photo);
        return back()->with('success', 'Foto berhasil diganti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SeedPhoto  $seedPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeedPhoto $seedPhoto)
    {
        //
    }
}
