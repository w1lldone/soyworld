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

	public function supplier{
		return $this->hasMany('App\Supplier');
	}
}
