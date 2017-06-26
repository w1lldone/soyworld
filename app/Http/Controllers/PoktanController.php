<?php

namespace App\Http\Controllers;

use App\Poktan;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PoktanController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    protected function validator($request)
    {
        return Validator::make($request, [
            'name' => 'required',
            'leader_user_id' => 'required|exists:users,id',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poktans = Poktan::all();
        return view('poktan.index', compact('poktans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Poktan::class);
        $leaders = User::where('privilage_id', 2)->get();

        return view('poktan.create', compact('leaders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $poktan = Poktan::addPoktan($request);

        return redirect('/poktan')->with('success', 'Tambah kelompok tani berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function show(Poktan $poktan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function edit(Poktan $poktan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poktan $poktan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poktan $poktan)
    {
        //
    }
}
