<?php

namespace App\Http\Controllers;

use App\Harvest;
use App\Onfarm;
use App\Poktan;
use Illuminate\Http\Request;

class SoybeanController extends Controller
{
    public function index()
    {
        $poktans = Poktan::all();

        return view('soybean.index', compact('poktans'));
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
        $activities = $onfarm->activity;
        return view('soybean.view-onfarm', compact('onfarm', 'activities'));
    }
}
