<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SeedPhoto extends Model
{
	protected $guarded = ['id'];

    /**
	* RELATION SECTION
    */
    public function seed(){
    	return $this->belongsTo('App\Seed');
    }

    /**
	* CUSTOM METHOD SECTION
    */

    public function replacePhoto($photo)
    {
    	Storage::disk('root')->delete($this->path);
    	return $this->update([
    		'path' => '/uploads/'.$photo->store("seed/$this->seed_id", 'uploads'),
		]);
    }
}
