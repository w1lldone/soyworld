<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $guarded = ['id'];
    /*
	* RELATION SECTION
    */
    public function activity_photo(){
    	return $this->hasMany('App\ActivityPhoto');
    }

    public function onfarm(){
    	return $this->belongsTo('App\Onfarm');
    }
}
