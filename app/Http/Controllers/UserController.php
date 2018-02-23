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
    	$this->middleware(['auth', 'role:admin']);
    }

    protected function validator($data)
    {
    	switch (request()->method()) {
            case 'POST':
                return Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                    'contact' => 'required|string|min:10',
                    'address' => 'required|string',
                    'privilage_id' => 'required|exists:privilages,id',
                ]);

            case 'PUT':
                return Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'contact' => 'required|string|min:10',
                    'address' => 'required|string',
                    'privilage_id' => 'required|exists:privilages,id',
                ]);            
        }
    }

    public function index()
    {
    	$users = User::where('is_activated', 1)->get();
        $inactives = User::where('is_activated', 0)->get();
    	return view('users.index', compact('users', 'inactives'));
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

		return redirect(route('user.index'));

    }

    public function edit(User $user)
    {
        $privilages = Privilage::all();

        $view = request()->has('data') ? "users.".request('data') : 'users.edit';

        return view($view, compact(['user', 'privilages']));
    }

    public function update(User $user, Request $request)
    {
        $this->validator($request->all())->validate();

        $user->update(request(['name', 'contact', 'address', 'privilage_id', 'poktan_id']));

        return redirect(route('user.index'))->with('success', 'berhasil mengubah user');
    }

    public function changeEmail(User $user, Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|unique:users',
        ]);

        $user->update(request(['email']));

        return back()->with('success', 'Berhasil mengubah email!');
    }

    public function changePassword(User $user, Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6'
        ]);

        $user->update([
            'password' => bcrypt($request->password),
        ]);

        return back()->with('success', 'Berhasil merubah password');
    }
}
