<?php

namespace App\Http\Controllers;

use App\Postharvest;
use App\Harvest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PostharvestController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function validator($request)
    {
        return Validator::make($request, [
            'harvest_id' => 'required|exists:harvests,id',
            'name' => 'required|string',
            'date' => 'required|date',
            'cost' => 'present|numeric',
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
        $this->validator($request->all())->validate();

        $postharvest = Postharvest::create(request([
            'harvest_id', 'name', 'date', 'cost',
        ]));

        return redirect("/harvest/$postharvest->harvest_id/view")->with('success', 'Berhasil menambah penanganan pasca panen!');
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
