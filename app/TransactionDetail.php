<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{

	/*RELATION SECTION*/

	public function harvest(){
		return $this->belongsTo('App\Harvest');
	}

	public function transaction(){
		return $this->belongsTo('App\Transaction');
	}

	/*CUSTOM METHOD SECTION*/

	public static function salesHistory()
	{
		return static::whereHas('harvest', function($query1)
        {
            $query1->whereHas('onfarm', function($query2)
            {
                $query2->where('user_id', auth()->id());
            });
        });
	}

	public function getTotalPriceAttribute()
	{
		return $this->price*$this->quantity;
	}

	public function formattedTotalPrice()
	{
		return number_format($this->total_price, 0, ',', '.');
	}
	
	protected $guarded = ['id'];   
}
