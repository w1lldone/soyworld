<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Onfarm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * VALIDATION REQUEST
    */
    protected function validator($request)
    {
        switch (request()->method()) {
            case 'POST':
                return Validator::make($request, [
                    'onfarm_id' => 'required',
                    'name' => 'required',
                    'date' => 'required|date',
                ]);
                break;
            
            case 'PUT':
                return Validator::make($request, [
                    'name' => 'required',
                    'date' => 'required|date',
                ]);
                break;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Onfarm $onfarm)
    {
        $this->authorize('createSeed', $onfarm);

        return view('activity.create', compact('onfarm'));
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

        $activity = Activity::addActivity($request);
        $activity->uploadPhoto($request->photo, $request->onfarm_id);

        return redirect("/onfarm/$request->onfarm_id/view")->with('success', 'Berhasil menambah aktivitas tanam');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('activity.view', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        $this->authorize('update', $activity);
        return view('activity.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $this->authorize('update', $activity);
        $this->validator($request->all())->validate();

        $activity->update([
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
        ]);

        return redirect("/activity/$activity->id/view")->with('success', 'Aktivitas tanam berhasil dirubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
