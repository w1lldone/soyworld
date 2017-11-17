<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (auth()->user()->privilage->name) {
            case 'industri':
                $sum['price'] = \App\Price::latestPrice();
                $sum['purchase'] = auth()->user()->thisMonthPurchase();
                $sum['stock'] = \App\Harvest::readyStock()->sum('ending_stock');

                $transactions = auth()->user()->transaction()->orderBy('updated_at', 'desc')->take(5)->get();

                return view('home.industri', compact(['sum', 'transactions']));
                break;

            case 'admin':

                $annuals = \App\Harvest::annualHarvest();

                $sales = \App\Transaction::where('status_id', 1)->latest()->get();
                
                return view('home.admin', compact(['annuals', 'sales']));
                break;
            
            default:
                # code...
                break;
        }
        return view('home.'.auth()->user()->privilage->name);
    }
}
