<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postharvest extends Model
{
	public function harvest(){
		return $this->beongsTo('App\Harvest');
	}
    
    protected $guarded = ['id'];
}
