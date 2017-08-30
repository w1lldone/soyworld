<?php

namespace App\Http\Controllers;

use App\Harvest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HarvestController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function validator($request)
    {
        return Validator::make($request, [
            'onfarm_id' => 'required|unique:harvests',
            'harvested_at' => 'required|date',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harvests = auth()->user()->isSuperadmin() ? Harvest::latest()->paginate(10) : auth()->user()->harvest()->paginate(10);

        return view('harvest.index', compact('harvests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (request()->has('onfarm_id')) {
            $onfarm = \App\Onfarm::find(request('onfarm_id'));
            if ($onfarm->planted_at == null) {
                return redirect("onfarm/$onfarm->id/view")->with('danger', 'Kedelai belum ditanam!');
            }
        }
        return view('harvest.create');
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

        $harvest = Harvest::create(request([
            'onfarm_id', 'harvested_at'
        ]));

        $harvest->addPostharvest($request);

        return $harvest->load('postharvest');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function show(Harvest $harvest)
    {
        return view('harvest.view', compact('harvest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function edit(Harvest $harvest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Harvest $harvest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harvest $harvest)
    {
        //
    }
}
