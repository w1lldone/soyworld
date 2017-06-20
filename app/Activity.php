<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = ['id'];
	protected $dates = ['date'];
    /*
	* RELATION SECTION
    */
    public function activity_photo(){
    	return $this->hasMany('App\ActivityPhoto');
    }

    public function onfarm(){
    	return $this->belongsTo('App\Onfarm');
    }

    /**
    * CUSTOM METHOD SECTION
    */

    public static function addActivity($request)
    {
        return static::create([
            'onfarm_id' => $request->onfarm_id,
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->has('date') ? $request->date : $request->planted_at,
        ]);
    }
}
