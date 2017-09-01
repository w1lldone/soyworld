<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoybeanController extends Controller
{
    public function index()
    {
    	return view('soybean.index');
    }
}
