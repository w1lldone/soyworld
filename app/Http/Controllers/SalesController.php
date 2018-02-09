<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'isPoktanLeader']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Transaction $transaction)
    {
        $transactions = $transaction->getPoktanTransactions(auth()->user()->poktan_id);
        $newSales = $transactions->where('status_id', 1)->count();
        return view('sales.index', compact(['transactions', 'newSales']));
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
    public function show(Transaction $transaction)
    {
        return view('sales.view', compact('transaction'));
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

        switch ($request->status_id) {
            case 2:
                $status = 'Pesanan diproses!';
                $transaction->update(request(['status_id']));
                break;

            case 3:
                $status = 'Pesanan selesai!';
                $transaction->update(request(['status_id']));   
                break;
            
            default:
                $status = 'Pesanan dibatalkan';
                $transaction->cancelTransaction();
                break;
        }

        $transaction->user->notify(new \App\Notifications\TransactionConfirmation($transaction));

        return redirect('/sales')->with('success', $status);
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
