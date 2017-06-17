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

    /*
	* CUSTOM METHOD SECTION
    */
	public static function addSupplier($request)
	{
		return static::create([
			'name' => $request->name,
			'user_id' => $request->user_id,
			'poktan_id' => $request->poktan_id,
			'description' => $request->description,
			'address' => $request->address,
			'contact' => $request->contact,
		]);
	}

}
