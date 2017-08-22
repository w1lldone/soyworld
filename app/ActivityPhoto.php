<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ActivityPhoto extends Model
{
    protected $guarded = ['id'];

    /**
	* RELATION SECTION
    */

    public function activity(){
    	return $this->belongsTo('App\Activity');
    }

    /*
	* CUSTOM MEHTOD SECTION
    */
    public static function addPhoto($request)
    {
    	return static::create([
    		'activity_id' => $request->activity_id,
    		'path' => '/uploads/'.$request->photo->store("activity/$request->activity_id", 'uploads'),
		]);
    }

    public function replacePhoto($photo)
    {
    	Storage::disk('root')->delete($this->path);
    	return $this->update([
    		'path' => '/uploads/'.$photo->store("activity/$this->activity_id", 'uploads'),
		]);
    }

    public function deletePhoto()
    {
    	Storage::disk('root')->delete($this->path);
    	return $this->delete();
    }
}
