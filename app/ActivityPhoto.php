<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityPhoto extends Model
{
    protected $guarded = ['id'];

    /**
	* RELATION SECTION
    */

    public function activity(){
    	return $this->belongsTo('App\Activity');
    }
}
