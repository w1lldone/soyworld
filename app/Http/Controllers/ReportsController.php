<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (auth()->user()->isPoktanLeader()) {
            return redirect(route('report.poktan.index'));
        }
    }
}
