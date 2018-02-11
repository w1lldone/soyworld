<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poktan extends Model
{
    protected $guarded = ['id'];

    /*
	* RELATIONS SECTION
    */
	public function user()
	{
		return $this->hasMany('App\User');
	}

	public function leader(){
		return $this->belongsTo('App\User', 'leader_user_id', 'id');
	}

	public function supplier(){
		return $this->hasMany('App\Supplier');
	}

	public function onfarm(){
		return $this->hasManyThrough('App\Onfarm', 'App\User');
	}

	/*CUSTOM METHOD SECTION*/

	public static function addPoktan($request)
	{
		return static::create([
			'name' => $request->name,
			'address' => $request->address,
			'leader_user_id' => $request->leader_user_id,
		]);
	}

	/*CUSTOM ATTRIBUTE SECTION*/
	
	public function getActiveStockAttribute(){
		return $this->onfarm()->whereHas('harvest', function ($query)
		{
			$query->where('ending_stock', '<>', 0);
		})->get()->load('harvest')->pluck('harvest')->sum('ending_stock');
	}
		
}
