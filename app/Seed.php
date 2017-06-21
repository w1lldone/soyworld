<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SeedPhoto;
use Illuminate\Support\Facades\Storage;

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

    public function supplier(){
        return $this->belongsTo('App\Supplier');
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

    // public function addPhoto($path)
    // {
    //     return $this->seed_photo()->create([
    //         'path' => '/uploads/'.$path,
    //     ]);
    // }

    public function addPhoto($request)
    {

        foreach ($request->photo as $photo) {
            if (!empty($photo)) {
                $this->seed_photo()->create([
                    'path' => '/uploads/'.$this->uploadPhoto($photo),
                ]);
            }
        }

        return $this->seed_photo;
    }

    public function uploadPhoto($photo)
    {
        return $photo->store("seed/$this->onfarm_id", 'uploads');
    }

    // public function getPhoto($request)
    // {
    //     foreach ($request->photo as $photo) {
    //         if (!empty($photo)) {
    //             $this->addPhoto($photo->store("seed/$request->onfarm_id", 'uploads'));
    //         }
    //     }

    //     return true;
    // }

    public function replacePhoto($photos)
    {

        // $i = 0;
        foreach ($photos as $photo) {

            if (!empty($photo)) {

                // $old = SeedPhoto::find($request->photo_id[$i]);
                // Storage::disk('root')->delete($old->path);
                $old->update([
                    'path' => $this->uploadPhoto($photo),
                ]);

            }

            // $i++;

        }

        return $this->seed_photo;

    }
}
