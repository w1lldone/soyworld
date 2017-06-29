<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnfarmCost extends Model
{
    protected $guarded = ['id'];

    /*
	* RELATION SECTION
    */

    public function onfarm(){
    	return $this->belongsTo('App\Onfarm');
    }

    public function supplier(){
    	return $this->belongsTo('App\Supplier');
    }

    /**
    * CUSTOM METHOD SECTION
    */

    public static function addCost($request)
    {
        return static::create([
            'onfarm_id' => $request->onfarm_id,
            'name' => $request->name,
            'description' => $request->description,
            'supplier_id' => $request->supplier_id,
            'price' => $request->price,
        ]);
    }

    public function formattedPrice()
    {
        return number_format($this->price, 0, ',', '.');
    }
}
