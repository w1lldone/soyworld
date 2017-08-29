<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harvest extends Model
{

	public function postharvest(){
		return $this->hasMany('App\Postharvest');
	}

	public function onfarm(){
		return $this->belongsTo('App\Onfarm');
	}

	public function addPostharvest($request)
	{
		return $this->postharvest()->create([
			'name' => 'panen '.$this->onfarm->name,
			'cost' => $request->cost,
		]);
	}

	public function getSaleStatusAttribute()
	{
		return $this->on_sale ? 'Dijual' : 'Tidak dijual';
	}
    
    protected $guarded = ['id'];
    protected $dates = ['harvested_at'];
}
