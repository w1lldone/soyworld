<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harvest extends Model
{

	public function postharvest(){
		return $this->hasMany('App\Postharvest');
	}
    
    protected $guarded = ['id'];
}
