<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Supplier;

class SupplierController extends Controller
{
	function __construct()
	{
		$this->middleware('auth');
	}

    public function validator($request)
    {
        return Validator::make($request, [
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'poktan_id' => 'required|exists:poktans,id',
        ]);
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        if (!$request->has('poktan_id')) $request->poktan_id = auth()->user()->poktan->id;
        
        $this->validator($request->all())->validate();

    	$supplier = Supplier::addSupplier($request);

        $url = $request->has('url') ? $request->url : "/supplier" ;

        return redirect($url)->with('success', 'Berhasil menambah suppler!');
    }

    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index',compact('suppliers'));
    }
}
