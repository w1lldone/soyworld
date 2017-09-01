<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postharvest extends Model
{
	public function harvest(){
		return $this->belongsTo('App\Harvest');
	}
    
    protected $guarded = ['id'];
}
