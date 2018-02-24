<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use App\Price;
use App\Harvest;

class LandingPageController extends Controller
{
    public function index()
    {
    	$users = new User;
    	$res['farmer'] = $users->where('privilage_id', 2)->count();
    	$res['consumer'] = $users->where('privilage_id', 4)->count();
    	$res['transaction'] = Transaction::count();
    	$res['price'] = Price::latestPrice();
    	$res['harvests'] = Harvest::annualHarvest();
    	$res['stock'] = Harvest::where('on_sale', 1)->get()->sum('ending_stock');


    	return view('landingPage.index', compact('res'));
    }
}
