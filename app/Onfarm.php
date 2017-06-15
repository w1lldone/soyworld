<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onfarm extends Model
{
    protected $guarded = ['id'];

    /*
	* RELATIONS SECTION
    */
    public function user(){
    	return $this->belongsTo('App\User');
    }

    /*
	* CUSTOM METHOD SECTION
    */
    public static function  addOnfarm($request)
    {
    	$request->user_id = $request->has('input_user') ? $request->input_user : $request->auth_user;
    	return static::create([
    		'name' => $request->name,
    		'user_id' => $request->user_id,
    		'description' => $request->description,
		]);
    }
}