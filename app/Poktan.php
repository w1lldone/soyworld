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

	/**
	* CUSTOM METHOD
	*/
	public static function addPoktan($request)
	{
		return static::create([
			'name' => $request->name,
			'address' => $request->address,
			'leader_user_id' => $request->leader_user_id,
		]);
	}
}
