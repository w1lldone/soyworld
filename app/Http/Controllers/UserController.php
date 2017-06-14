<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Privilage;

class UserController extends Controller
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
    	return view('users.index', compact('users'));
    }

    public function create()
    {
    	$privilages = Privilage::all();
    	return view('users.create', compact('privilages'));
    }

    public function store(Request $request)
    {
    	$this->validator($request->all())->validate();
        
    	$user = User::addUser($request);

		return redirect('/user');

    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
}
