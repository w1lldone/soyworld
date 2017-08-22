<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Onfarm;

class OnfarmController extends Controller
{
	function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $onfarms = auth()->user()->getOnfarm();
    	return view('onfarm.index', compact('onfarms'));
    }

    public function show(Onfarm $onfarm)
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
    	return redirect('/onfarm')->with('success', 'Onfarm kedelai berhasil dibuat');
    }
}
