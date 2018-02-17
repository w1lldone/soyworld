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

    public function index(Onfarm $onfarm)
    {
        $onfarms = $onfarm->getOnfarms(auth()->user());

    	return view('onfarm.index', compact('onfarms'));
    }

    public function show(Onfarm $onfarm)
    {
        $this->authorize('view', $onfarm);

        return view('onfarm.view', compact('onfarm'));
    }

    public function create()
    {
        if (auth()->user()->isSuperAdmin()) {
            $users = \App\User::orderBy('name')->get();
        } elseif (auth()->user()->isPoktanLeader()) {
            $users = auth()->user()->poktan->user;
        } else {
            $users = null;
        }

    	return view('onfarm.create', compact('users'));
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
