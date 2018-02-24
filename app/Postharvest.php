<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Postharvest extends Model
{

	public function harvest(){
		return $this->belongsToMany('App\Postharvest')->withPivot('date', 'cost', 'weight_reduction');
	}

	public function formattedCost()
	{
		return number_format($this->cost, 0, ',', '.');
	}

    public function formatDate($date)
    {
        return Carbon::parse($date)->format('j F Y');
    }
        

    protected $guarded = ['id'];
    protected $dates = ['date'];
}
