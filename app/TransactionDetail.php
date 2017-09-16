<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{

	public function harvest(){
		return $this->belongsTo('App\Harvest');
	}

	public function transaction(){
		return $this->belongsTo('App\Transaction');
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
