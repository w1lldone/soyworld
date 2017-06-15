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
    	return view('onfarm.index');
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
