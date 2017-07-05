<?php

namespace App\Http\Controllers;

use App\User;
use App\Privilage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function validator($request)
    {
        return Validator::make($request, [
            'name' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|string|min:10',
            'address' => 'required|string',
            'privilage_id' => 'required|exists:privilages,id',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = auth()->user();
        $privilage = $user->privilage;
        return view('profile.edit', compact(['user', 'privilage']));
    }

    public function editEmail()
    {
        $user = auth()->user();
        return view('profile.email', compact('user'));
    }

    public function editPassword()
    {
        $user = auth()->user();
        return view('profile.password', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = auth()->user();
        $user->update(request([
            'name', 'address', 'contact', 'privilage_id', 'poktan_id',
        ]));

        return redirect('/home')->with('success', 'Berhasil mengubah profil!');
    }

    public function updateEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users'
        ]);

        $user = auth()->user()->update(request(['email']));

        return redirect('/home')->with('success', 'Berhasil mengubah email!');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6'
        ]);

        $user = auth()->user();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('danger', 'Password lama tidak cocok!');
        }

        $user->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect('/home')->with('success', 'Berhasil mengubah password!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
