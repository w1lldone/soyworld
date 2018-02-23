<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Supplier;

class SupplierController extends Controller
{
	function __construct()
	{
		$this->middleware(['auth', 'role:petani']);
	}

    public function validator($request)
    {
        return Validator::make($request, [
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'poktan_id' => 'exists:poktans,id',
        ]);
    }

    public function create()
    {
        $this->authorize('create', Supplier::class);
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        if (!$request->has('poktan_id')) $request->poktan_id = auth()->user()->poktan->id;
        $this->validator($request->all())->validate();

    	$supplier = Supplier::addSupplier($request);
        $url = $request->has('url') ? $request->url : route('supplier.index') ;

        return redirect($url)->with('success', 'Berhasil menambah suppler!');
    }

    public function index()
    {
        $suppliers = auth()->user()->getSupplier();
        return view('supplier.index',compact('suppliers'));
    }

    public function edit(Request $request, Supplier $supplier)
    {
        $this->authorize('update', $supplier);
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $this->authorize('update', $supplier);
        $this->validator($request->all())->validate();
        $supplier->update(request([
            'name', 'description', 'address', 'contact', 'poktan_id',
        ]));

        return redirect(route('supplier.index'))->with('success', 'Supplier berhasil diupdate');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect(route('supplier.index'))->with('success', 'Berhasil menghapus supplier!');
    }
}
