<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    protected $guarded = ['id'];

    /*
	* RELATION SECTION
    */

    public function user()
    {
    	return $this->belongsTo('App/User');
    }

    public function onfarm(){
    	return $this->belongsTo('App\Onfarm');
    }

    /*
	* CUSTOM METHOD SECTION
    */

    public static function addSeed($request)
    {
    	return static::create([
    		'supplier_id' => $request->supplier_id,
    		'onfarm_id' => $request->onfarm_id,
    		'quantity' => $request->quantity,
    		'price' => $request->price,
    		'name' => $request->name,
		]);
    }
}
