<?php

namespace App\Http\Controllers;

use App\Harvest;
use App\Onfarm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HarvestController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth', 'role:petani']);
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
    public function index(Harvest $harvest, Request $request)
    {
        $harvests = $harvest->getHarvests(auth()->user(), $request)
                        ->paginate(10)
                        ->appends($request->except('page'));

        $harvests->totalStock = $harvest->getHarvests(auth()->user(), $request)->sum('ending_stock');
        $harvests->activeStock = $harvest->getHarvests(auth()->user(), $request)->where('on_sale', 1)->sum('ending_stock');

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
            $onfarms = Onfarm::where('id', request('onfarm_id'))->get();
            if ($onfarms->first()->planted_at == null) {
                return redirect(route('onfarm.show', $onfarm))->with('danger', 'Kedelai belum ditanam!');
            }
        } elseif (auth()->user()->isSuperAdmin()) {
            $onfarms = Onfarm::whereNotNull('planted_at')->doesntHave('harvest')->get();
        } elseif (auth()->user()->isPoktanLeader()) {
            $onfarms = Onfarm::whereNotNull('planted_at')->doesntHave('harvest')->whereHas('user', function ($query)
            {
                $query->where('poktan_id', auth()->user()->poktan_id);
            })->get();
        } else {
            $onfarms = auth()->user()->onfarm()->doesntHave('harvest')->where('planted_at', '><', null)->get();
        }

        return view('harvest.create', compact('onfarms'));
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

        // $harvest->addPostharvest($request);

        return redirect(route('harvest.show', [$harvest]))->with('success', 'Berhasil panen kedelai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function show(Harvest $harvest)
    {
        $sales = $harvest->transaction_detail()->whereHas('transaction', function($query)
        {
            $query->where('status_id', 3);
        })->get();
        return view('harvest.view', compact(['harvest', 'sales']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function edit(Harvest $harvest, $section)
    {
        switch ($section) {
            case 'stock':
                $this->authorize('editStock', $harvest);
                return view('harvest.edit.stock', compact('harvest'));
                break;
            
            default:
                return $harvest;
                break;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Harvest $harvest, $section)
    {
        switch ($section) {
            case 'sale':
                $harvest->update(request(['on_sale']));
                return redirect(route('harvest.show', [$harvest]))->with('success', "Kedelai Anda sekarang $harvest->sale_status!");
                break;
            
            default:
                # code...
                break;
        }
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
