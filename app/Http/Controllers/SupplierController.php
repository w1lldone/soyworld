<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
	function __construct()
	{
		$this->middleware('auth');
	}

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        if (!$request->has('poktan_id')) $request->poktan_id = auth()->user()->poktan->id;

    	$supplier = Supplier::addSupplier($request);

    	return redirect("$request->url");
    }

    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index',compact('suppliers'));
    }
}
