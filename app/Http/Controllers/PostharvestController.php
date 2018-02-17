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
        $this->middleware(['auth', 'role:petani']);
        $this->middleware('can:createPostHarvest,harvest')->only('create');
    }

    public function validator($request)
    {
        switch (request()->method()) {
            case 'POST':
               return Validator::make($request, [
                   'harvest_id' => 'required|exists:harvests,id',
                   'name' => 'required|string',
                   'date' => 'required|date',
                   'cost' => 'required|numeric',
               ]);
           case 'PUT':
               return Validator::make($request, [
                   'name' => 'required|string',
                   'date' => 'required|date',
                   'cost' => 'required|numeric',
               ]);
        }
        
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
        // $this->authorize('createPostharvest', $harvest);
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

        return redirect(route('harvest.show', [$postharvest->harvest]))->with('success', 'Berhasil menambah penanganan pasca panen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postharvest  $postharvest
     * @return \Illuminate\Http\Response
     */
    public function show(Postharvest $postharvest)
    {
        return view('postharvest.view', compact('postharvest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postharvest  $postharvest
     * @return \Illuminate\Http\Response
     */
    public function edit(Postharvest $postharvest)
    {
        return view('postharvest.edit', compact('postharvest'));
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
        $this->validator($request->all())->validate();
        $postharvest->update(request([
            'name', 'date', 'cost',
        ]));

        return redirect(route('harvest.show', [$postharvest->harvest]))->with('success', 'berhasil mengubah penanganan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postharvest  $postharvest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postharvest $postharvest)
    {
        $harvestId = $postharvest->harvest_id;
        $postharvest->delete();

        return redirect(route('harvest.show', [$harvestId]))->with('success', 'Berhasil menghapus penanganan!');
    }
}
