<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Onfarm;

class OnFarmController extends Controller
{
	function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $onfarms = Onfarm::latest()->get();
    	return view('onfarm.index', compact('onfarms'));
    }

    public function view(Onfarm $onfarm)
    {

        return view('onfarm.view', compact('onfarm'));
    }

    public function create()
    {
    	return view('onfarm.create');
    }

    public function store(Request $request)
    {
    	$onfarm = Onfarm::addOnfarm($request);
    	return $onfarm;
    }
}
