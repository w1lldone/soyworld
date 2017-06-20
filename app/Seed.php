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

    public function seed_photo(){
        return $this->hasMany('App\SeedPhoto');
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

    public function addPhoto($path)
    {
        return $this->seed_photo()->create([
            'path' => $path,
        ]);
    }

    public function getPhoto($request)
    {
        foreach ($request->photo as $photo) {
            if (!empty($photo)) {
                $this->addPhoto($photo->store("seed/$request->onfarm_id", 'uploads'));
            }
        }

        return true;
    }
}
