<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Harvest;

class StockController extends Controller
{

	public function store(Request $request)
	{
		$this->validate($request, [
			'quantity' => 'required|numeric',
			'harvest_id' => 'required|exists:harvests,id',
		]);

		$harvest = Harvest::find($request->harvest_id)->update([
			'initial_stock' => $request->quantity,
			'ending_stock' => $request->quantity,
		]);

		return redirect('/harvest')->with('success', 'Berhasil menambah stok!');
	}

	public function create($harvest)
	{
		return view('stock.create', compact('harvest'));
	}
    
}
