<?php

namespace App\Http\Controllers;

use App\OnfarmCost;
use App\Onfarm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OnfarmCostController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'role:petani']);
    }
    public function validator($request)
    {
        switch (request()->method()) {
            case 'POST':
                return Validator::make($request, [
                    'name' => 'required',
                    'supplier_id' => 'required|exists:suppliers,id',
                    'price' => 'required|numeric',
                ]);
                break;
            
            case 'PUT':
                return Validator::make($request, [
                    'name' => 'required',
                    'supplier_id' => 'required|exists:suppliers,id',
                    'price' => 'required|numeric',
                ]);
                break;
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
    public function create(Onfarm $onfarm)
    {
        $this->authorize('createCost', $onfarm);
        $url = request()->fullUrl();

        return view('onfarmCost.create', compact(['onfarm', 'url']));
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

        $onfarmCost = OnfarmCost::addCost($request);

        return redirect(route('onfarm.show', [$onfarmCost->onfarm]))->with('success', 'Berhasil menambah biaya!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OnfarmCost  $onfarmCost
     * @return \Illuminate\Http\Response
     */
    public function show(OnfarmCost $onfarmCost)
    {
        return view('onfarmCost.view', compact('onfarmCost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OnfarmCost  $onfarmCost
     * @return \Illuminate\Http\Response
     */
    public function edit(OnfarmCost $onfarmCost)
    {
        $onfarm = $onfarmCost->onfarm;

        return view('onfarmCost.edit', compact(['onfarmCost', 'onfarm']));
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
        $onfarmCost->update([
            'name' => $request->name,
            'description' => $request->description,
            'supplier_id' => $request->supplier_id,
            'price' => $request->price,
        ]);

        return redirect(route('onfarm.show', [$onfarmCost->onfarm]))->with('success', 'Berhasil mengubah biaya!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OnfarmCost  $onfarmCost
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnfarmCost $onfarmCost)
    {
        $id = $onfarmCost->onfarm_id;
        $onfarmCost->delete();

        return redirect(route('onfarm.show', [$id]));
    }
}
