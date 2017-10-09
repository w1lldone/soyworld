<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvest;

class SoybeanController extends Controller
{
    public function index()
    {
    	return view('soybean.index');
    }

    public function show(Harvest $harvest)
    {
    	$onfarm = $harvest->onfarm;
    	$activities = $onfarm->activity()->orderBy('date')->get();
    	$postharvests = $harvest->postharvest()->orderBy('date')->get();;

    	// return [$onfarm, $activity, $postharvest];

    	return view('soybean.view', compact(['onfarm', 'activities', 'postharvests']));
    }
}
