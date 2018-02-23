<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Solver;

class Onfarm extends Model
{
    use Solver;
    protected $guarded = ['id'];
    protected $dates = ['updated_at', 'planted_at'];

    /*
	* RELATIONS SECTION
    */
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function seed(){
        return $this->hasOne('App\Seed');
    }

    public function activity(){
        return $this->hasMany('App\Activity');
    }

    public function cost(){
        return $this->hasMany('App\OnfarmCost', 'onfarm_id', 'id');
    }

    public function harvest(){
        return $this->hasOne('App\Harvest');
    }

    /*
	* CUSTOM METHOD SECTION
    */
    public static function  addOnfarm($request)
    {
    	$request->user_id = $request->has('input_user') ? $request->input_user : $request->auth_user;
    	return static::create([
    		'name' => $request->name,
    		'user_id' => $request->user_id,
    		'description' => $request->description,
		]);
    }

    public function addActivity()
    {
        $activity = $this->activity()->create([
            'name' => request('name'),
            'description' => request('description'),
            'date' => request()->has('date') ? request('date') : request('planted_at'),
        ]);

        if(!empty(request('photo'))) $activity->uploadPhoto(request('photo'), $this->id);

        return $activity;
    }

    public function seedCost()
    {
        return empty($this->seed) ? 0 : $this->seed->quantity*$this->seed->price;
    }

    public function onfarmCost()
    {
        $onfarmCost = empty($this->cost) ? 0 : $this->cost->sum('price') ;

        return $this->seedCost() + $onfarmCost;
    }

    public function formattedSeedCost()
    {
        return number_format($this->seedCost(), 0, ',', '.');
    }

    public function formattedOnfarmCost()
    {
        return number_format($this->onfarmCost(), 0, ",", ".");
    }

    public function getOnfarms($user, $request)
    {
        if ($user->isSuperadmin()) {
            $onfarms = $this->latest();
        } elseif ($user->isPoktanLeader() && $request->view == 'poktan') {
            $onfarms = $this->whereHas('user', function ($query) use ($user)
            {
                $query->where('poktan_id', $user->poktan_id);
            });
        } else{
            $onfarms = $user->onfarm();
        }

        switch ($request->filter) {
            case 'unplanted':
                $onfarms = $onfarms->whereNull('planted_at');
                break;

            case 'planted':
                $onfarms = $onfarms->whereNotNull('planted_at')->doesntHave('harvest');
                break;

            case 'harvested':
                $onfarms = $onfarms->has('harvest');
                break;
            
            default:
                # code...
                break;
        }

        if ($request->has('sort')) {
            $onfarms = $onfarms->{$request->sort}();
        } else {
            $onfarms = $onfarms->latest();
        }

        return $onfarms;
    }

    // URL SECTION
    public function viewUrl()
    {
        return "/onfarm/$this->id/view";
    }

    public function editUrl()
    {
        return "/onfarm/$this->id/edit";
    }

    public function createActivityUrl()
    {
        return "/activity/create/$this->id";
    }

    

    /**
    * Custom attribute
    */

    public function getHarvestEstAttribute()
    {
        if ($this->planted_at->addDays(82)->format('F') == $this->planted_at->addDays(90)->format('F')) {
            $up = $this->planted_at->addDays(82)->format('j');
        } else {
            $up = $this->planted_at->addDays(82)->format('j F');
        }
        
        $down = $this->planted_at->addDays(90)->format('j F Y');

        return $up.'&ndash;'.$down;
    }

    public function getCropsEstAttribute(){

        $avg = $this->user->harvest->avg('initial_stock');

        if (empty($avg)) {
            return 'Data belum ada';
        }

        $productivity = $this->user->harvest->pluck('productivity');
        $stdDev = $this->stdDev($productivity)*$this->area;

        if ($stdDev == 0) {
            return $avg. 'kg';
        }

        $up = round($avg+$stdDev);
        $down = round($avg-$stdDev);

        return $up.'&ndash;'.$down.' kg';
        
    }
        


}
