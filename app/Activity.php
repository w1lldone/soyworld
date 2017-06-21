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

    public function addPhoto($path)
    {
        return $this->activity_photo()->create([
            'path' => '/uploads/'.$path,
        ]);
    }

    public function uploadPhoto($photos, $id)
    {
        foreach ($photos as $photo) {
            if (!empty($photo)) {
                $this->addPhoto($photo->store("activity/$id", 'uploads'));
            }
        }

        return true;
    }

    public function getFirstPhoto()
    {
        return $this->activity_photo->isEmpty() ? "/img/logo/logo-only.svg" : $this->activity_photo->first()->path;
    }
}
