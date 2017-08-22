<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	protected $guarded = ['id'];
	/*
	* RELATIONSHIP SECTION
	*/
    public function poktan(){
    	return $this->belongsTo('App\Poktan');
    }

    public function onfarm_cost(){
    	return $this->hasMany('App\OnfarmCost', 'onfarm_cost_id', 'id');
    }

    /*
	* CUSTOM METHOD SECTION
    */
	public static function addSupplier($request)
	{
		return static::create([
			'name' => $request->name,
			'poktan_id' => $request->poktan_id,
			'description' => $request->description,
			'address' => $request->address,
			'contact' => $request->contact,
		]);
	}

}
