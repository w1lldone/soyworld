<?php

namespace App\Http\Controllers;

use App\OnfarmCost;
use App\Onfarm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OnfarmCostController extends Controller
{

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

        return redirect("/onfarm/$onfarmCost->onfarm_id/view")->with('success', 'Berhasil menambah biaya!');
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
