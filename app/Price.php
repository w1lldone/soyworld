<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public static function latestPrice()
    {
    	return number_format(Price::latest()->first()->nominal, 0, ',', '.');
    }

    protected $guarded = ['id'];
}
