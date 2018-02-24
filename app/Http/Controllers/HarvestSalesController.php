<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvest;

class HarvestSalesController extends Controller
{
    public function update(Harvest $harvest)
    {
    	$harvest->update(request(['on_sale']));

    	return redirect(route('harvest.show', [$harvest]))->with('success', "Kedelai Anda sekarang $harvest->sale_status!");
    }
}
