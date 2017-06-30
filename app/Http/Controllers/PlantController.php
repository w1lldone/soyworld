<?php

namespace App\Http\Controllers;

use App\Onfarm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlantController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function validator($request)
    {
        return Validator::make($request, [
            'planted_at' => 'required|date',
            'area' => 'required|numeric'
        ]);
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
    public function store(Request $request, Onfarm $onfarm)
    {
        $this->validator($request->all())->validate();

        $onfarm->update(request(['planted_at', 'area']));
        $activity = $onfarm->addActivity();

        return back()->with('success', 'Benih berhasil ditanam');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Onfarm  $onfarm
     * @return \Illuminate\Http\Response
     */
    public function show(Onfarm $onfarm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Onfarm  $onfarm
     * @return \Illuminate\Http\Response
     */
    public function edit(Onfarm $onfarm)
    {
        return view('plant.edit', compact('onfarm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Onfarm  $onfarm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Onfarm $onfarm)
    {
        $onfarm->update(request(['planted_at', 'area']));
        return redirect("/onfarm/$onfarm->id/view")->with('success', 'Berhasil mengubah data tanam!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Onfarm  $onfarm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Onfarm $onfarm)
    {
        //
    }
}
