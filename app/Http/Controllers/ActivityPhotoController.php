<?php

namespace App\Http\Controllers;

use App\ActivityPhoto;
use Illuminate\Http\Request;

class ActivityPhotoController extends Controller
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
        $photo = ActivityPhoto::addPhoto($request);
        return back()->with('success', 'Foto berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActivityPhoto  $activityPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityPhoto $activityPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActivityPhoto  $activityPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityPhoto $activityPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActivityPhoto  $activityPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivityPhoto $activityPhoto)
    {
        $activityPhoto->replacePhoto($request->photo);
        return back()->with('success', 'Foto berhasil diganti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActivityPhoto  $activityPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityPhoto $activityPhoto)
    {
        $activityPhoto->deletePhoto();
        return back()->with('success', 'Foto berhasil dihapus');
    }
}
