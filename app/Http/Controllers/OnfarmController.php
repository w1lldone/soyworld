<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Onfarm;

class OnfarmController extends Controller
{
	function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $onfarms = Onfarm::latest()->get();
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

    public function plant(Request $request, Onfarm $onfarm)
    {
        if (!empty($onfarm->planted_at)) {
            return back()->with('danger', 'Benih sudah ditanam');
        }

        $this->validate($request,[
            'planted_at' => 'required',
            'area' => 'required|numeric',
        ]);

        $onfarm->update(request(['planted_at', 'area']));
        $activity = $onfarm->addActivity();

        return back()->with('success', 'Benih berhasil ditanam');
    }
}
