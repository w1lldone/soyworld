<?php

namespace App\Http\Controllers;

use App\Poktan;
use App\Price;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'role:industri']);
        // $this->middleware('can:create,App\Transaction')->only('create');
    }

    public function validator($request)
    {
        $max = Poktan::find($request['poktan_id'])->active_stock;

        return Validator::make($request, [
            'quantity' => "required|numeric|max:$max",
            'delivered_to' => "required|string",
            'poktan_id' => 'required|exists:poktans,id',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $transactions = auth()->user()->transaction()->latest()->get();
        $transactions = auth()->user()->transaction();

        if (!empty(request('status'))) {
            $transactions = $transactions->whereHas('status', function($query)
            {
                $query->where('name', request('status'));
            });
        }

        if (!empty(request('keyword'))) {
            $keyword = request('keyword');
            $transactions = $transactions->where('code', 'like', "%$keyword%");
        }

        switch (request('sort')) {

            case 'oldest':
                $transactions = $transactions->oldest()->get();
                break;

            case 'latest':
                $transactions = $transactions->latest()->get();
                break;

            case 'expensive':
                $transactions = $transactions->get()->sortByDesc('total_payment')->values()->all();
                break;

            case 'cheap':
                $transactions = $transactions->get()->sortBy('total_payment')->values()->all();
                break;

            default:
                $transactions = $transactions->latest()->get();
                break;
            
        }



        $total['quantity'] = auth()->user()->thisMonthPurchase();
        $total['value'] = number_format(auth()->user()->transaction()->where('status_id', 3)->get()->sum('total_payment'), 0, ',', '.');
        return view('transaction.index', compact(['transactions', 'total']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Price $price)
    {
        $this->validate($request, [
            'poktan_id' => 'required|exists:poktans,id',
        ]);

        $poktan = Poktan::find($request->poktan_id);

        return view('transaction.create', compact('poktan', 'price'));
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

        $transaction = Transaction::newTransaction($request);
        $transaction->sendSoldNotification();

        return redirect('/transaction')->with('success', 'Berhasil melakukan transaksi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transaction.view', compact('transaction'));
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
