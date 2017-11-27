<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvest;
use App\Onfarm;

class SoybeanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->tab == null) {
            $request->merge(['tab' => 'stok-aktif']);
        }
        if (request('tab') == 'stok-aktif') {
            $harvests = Harvest::readyStock();
        	return view('soybean.index', compact('harvests'));
        }

        if (request('tab') == 'onfarm') {
           $onfarms = Onfarm::doesntHave('harvest')->latest()->get();
           return view('soybean.index', compact('onfarms'));
        }
    }

    public function show(Harvest $harvest)
    {
        $onfarm = $harvest->onfarm;
        $activities = $onfarm->activity()->orderBy('date')->get();
        $postharvests = $harvest->postharvest()->orderBy('date')->get();;

        // return [$onfarm, $activity, $postharvest];

        return view('soybean.view', compact(['onfarm', 'activities', 'postharvests']));
    }

    public function showOnfarm(Onfarm $onfarm)
    {
        return $onfarm;
    }
}
