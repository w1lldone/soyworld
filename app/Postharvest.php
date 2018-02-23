<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postharvest extends Model
{

	public function harvest(){
		return $this->belongsToMany('App\Harvest');
	}

	public function formattedCost()
	{
		return number_format($this->cost, 0, ',', '.');
	}

    protected $guarded = ['id'];
    protected $dates = ['date'];
}
