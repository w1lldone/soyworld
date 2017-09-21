<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Onfarm;

class OnfarmController extends Controller
{
	function __construct()
	{
		$this->middleware(['auth', 'role:petani']);
	}

    public function index()
    {
        $onfarms = auth()->user()->getOnfarm();
    	return view('onfarm.index', compact('onfarms'));
    }

    public function show(Onfarm $onfarm)
    {

        return view('onfarm.view', compact('onfarm'));
    }

    public function create()
    {
    	return view('onfarm.create');
    }

    public function store(Request $request)
    {
    	$onfarm = Onfarm::addOnfarm($request);
    	return redirect('/onfarm')->with('success', 'Onfarm kedelai berhasil dibuat');
    }

    public function destroy(Onfarm $onfarm)
    {
        $onfarm->seed()->delete();
        $onfarm->activity()->delete();
        $onfarm->cost()->delete();
        $onfarm->harvest()->delete();
        $onfarm->delete();
        return redirect('/onfarm')->with('success', 'berhasil menghapus on farm!');
    }
}
