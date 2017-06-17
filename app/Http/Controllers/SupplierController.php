<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    public function store(Request $request)
    {
    	if (!auth()->user()->isSuperadmin()) {
    		$request->user_id = auth()->user()->id;
    		$request->poktan_id = auth()->user()->poktan->id;
    	}
    	$supplier = Supplier::addSupplier($request);

    	return redirect("$request->url");
    }
}
