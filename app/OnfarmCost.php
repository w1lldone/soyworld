<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnfarmCost extends Model
{
    protected $guarded = ['id'];

    /*
	* RELATION SECTION
    */

    public function onfarm(){
    	return $this->belongsTo('App\Onfarm');
    }

    public function supplier(){
    	return $this->belongsTo('App\Supplier');
    }
}
