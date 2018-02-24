<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\TransactionDetail as Detail;
use Illuminate\Http\Request;

class SoldSoybeanController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'role:petani']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Detail::salesHistory();

        if (!empty(request('month'))) {
            $month = request('month');
            $sales = $sales->where('created_at', 'like', "%$month%");
        }

        switch (request('sort')) {
            case 'oldest':
                $sales = $sales->oldest();
                break;

            case 'expensive':
                $sales = $sales->orderBy('quantity', 'desc');
                break;
            
            default:
                $sales = $sales->latest();
                break;
        }

        $sales = $sales->oldest()->get();

        $sold = $sales->sum('quantity');
        $income = number_format($sales->sum('total_price'), 0, ',', '.');

        return view('sold.index', compact(['sales', 'sold', 'income']));
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
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        return view('sold.view', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
