<?php

namespace App\Http\Controllers;

use App\Harvest;
use Illuminate\Http\Request;

class HandlingController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|array',
            'id.*' => 'required|integer|exists:harvests,id',
            'handling' => 'required|string',
        ]);

        foreach ($request->id as $id) {
            $harvest = Harvest::find($id)->postharvest()->create([
                'name' => $request->handling,
                'date' => date('Y-m-d'),
                'cost' => 0,
            ]);
        }

        return redirect(route('warehouse.index'))->with('success', "Berhasil menerapkan $request->handling!");
    }
}
