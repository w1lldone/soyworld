<?php

namespace App\Http\Controllers;

use App\Harvest;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'isPoktanLeader']);
    }

    public function index(Harvest $harvest)
    {
        $harvests = $harvest->whereHas('onfarm.user', function ($query)
        {
            $query->where('poktan_id', auth()->user()->poktan_id);
        })->where('on_sale', 0)->paginate(10);

        return view('warehouse.index', compact('harvests'));
    }
}
