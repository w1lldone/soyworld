<?php

namespace App\Http\Controllers;

use App\Seed;
use Illuminate\Http\Request;
use App\Onfarm;
use Illuminate\Support\Facades\Validator;

class SeedController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    protected function validator($request)
    {
        switch (request()->method()) {
            case 'POST':
                return Validator::make($request, [
                    'supplier_id' => 'required',
                    'onfarm_id' => 'required|unique:seeds,onfarm_id',
                    'quantity' => 'required|numeric',
                    'price' => 'required|numeric',
                    'name' => 'required',
                ]);
            
            case 'PUT':
                return Validator::make($request, [
                    'supplier_id' => 'required',
                    'quantity' => 'required|numeric',
                    'price' => 'required|numeric',
                    'name' => 'required',
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
    public function create(Onfarm $onfarm, Request $request)
    {
        $this->authorize('createSeed', $onfarm);
        $url = $request->fullUrl();
        return view('seed.create', compact(['onfarm', 'url']));
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

        $seed = Seed::addSeed($request);
        if (!empty($request->photo)) $seed->addPhoto($request);

        return redirect("/onfarm/$request->onfarm_id/view")->with('success', 'Berhasil melakukan pembelian benih');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seed  $seed
     * @return \Illuminate\Http\Response
     */
    public function show(Seed $seed)
    {
        return view('seed.view', compact('seed'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seed  $seed
     * @return \Illuminate\Http\Response
     */
    public function edit(Seed $seed)
    {
        $this->authorize('edit', $seed);
        return view('seed.edit', compact('seed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seed  $seed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seed $seed)
    {
        $this->validator($request->all())->validate();
        $seed->update(request([
            'name', 'supplier_id', 'quantity', 'price'
        ]));
        return redirect("/seed/$seed->id/view")->with('success', 'Benih berhasi diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seed  $seed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seed $seed)
    {
        //
    }
}
