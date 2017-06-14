<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function poktan{
    	return $this->belongsTo('App\Poktan');
    }
}
