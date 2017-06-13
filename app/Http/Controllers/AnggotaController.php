<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Privilage;

class AnggotaController extends Controller
{
    function __construct()
    {
    	$this->middleware('auth');
    }

    protected function validator($data)
    {
    	return Validator::make($data, [
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'contact' => 'required|string|min:10',
            'address' => 'required|string',
		]);
    }

    public function index()
    {
    	$users = User::all();
    	return view('anggota.index', compact('users'));
    }

    public function create()
    {
    	$privilages = Privilage::all();
    	return view('anggota.create', compact('privilages'));
    }

    public function store(Request $request)
    {
    	$this->validator($request->all())->validate();
        
    	$user = User::addUser($request);

		return redirect('/anggota');

    }
}