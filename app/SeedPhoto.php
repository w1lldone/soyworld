<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeedPhoto extends Model
{
	protected $guarded = ['id'];

    /**
	* RELATION SECTION
    */
    public function seed(){
    	return $this->belongsTo('App\Seed');
    }
}
