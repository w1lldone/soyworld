<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
    * RELATION SECTION
    */
    public function transaction_detail(){
    	return $this->hasMany('App\TransactionDetail');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    /**
    * CUSTOM METHOD SECTION
    */

    public function addDetail($harvestId, $quantity)
    {
    	return $this->transaction_detail()->create([
    		'harvest_id' => $harvestId,
    		'quantity' => $quantity,
    		'price' => \App\Price::latest()->first()->nominal,
		]);
    }

    public static function newTransaction($request)
    {
    	$transaction = Transaction::create([
    		'user_id' => auth()->id(),
    		'status_id' => 1,
    		'delivered_to' => $request->delivered_to, 
		]);

        $transaction->update(['code' => $transaction->user_id.$transaction->id.$transaction->created_at->format('dmy')]);

		foreach (\App\Harvest::readyStock() as $stock) {
			if ($request->quantity > $stock->ending_stock) {
				$transaction->addDetail($stock->id, $stock->ending_stock);
				$request->quantity -= $stock->ending_stock;
				$stock->update([
					'ending_stock' => 0,
				]);
			} else {
				$transaction->addDetail($stock->id, $request->quantity);
				$stock->ending_stock -= $request->quantity;
				$stock->save();

				return $transaction->load('transaction_detail.harvest');
			}
		}
    }

    public function getTotalQuantityAttribute()
    {
        return $this->transaction_detail->sum('quantity');
    }

    public function getTotalPaymentAttribute()
    {
        return $this->transaction_detail->sum('total_price');
    }

    public function formattedTotalPayment()
    {
        return number_format($this->total_payment, 0, ',', '.');
    }

    protected $guarded = ['id'];
}
