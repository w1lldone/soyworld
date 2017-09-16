<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harvest extends Model
{

	/*RELATION SECTION*/
	public function postharvest(){
		return $this->hasMany('App\Postharvest');
	}

	public function onfarm(){
		return $this->belongsTo('App\Onfarm');
	}

	public function transaction_detail(){
		return $this->hasMany('App\TransactionDetail');
	}

	/*CUSTOM METHOD SECTION*/
	public function addPostharvest($request)
	{
		return $this->postharvest()->create([
			'name' => 'panen '.$this->onfarm->name,
			'cost' => $request->cost,
		]);
	}

	public function getSaleStatusAttribute()
	{
		return $this->on_sale ? 'Dijual' : 'Tidak dijual';
	}

	public function salesAction()
	{
		if ($this->on_sale) {
			return 0;
		} else {
			return 1;
		}
		
	}

	public static function totalStock()
	{
		$stock = auth()->user()->isSuperadmin() ? Harvest::all()->sum('ending_stock') : auth()->user()->harvest->sum('ending_stock');

		return $stock;
	}

	public static function onSaleStock()
	{
		$stock = auth()->user()->isSuperadmin() ? Harvest::where('on_sale', 1)->get()->sum('ending_stock') : auth()->user()->harvest()->where('on_sale', 1)->get()->sum('ending_stock');

		return $stock;
	}

	public static function readyStock()
	{
		return static::where('on_sale', 1)->where('ending_stock', '<>', 0)->get();
	}

	public function stockPercent()
	{
		return $this->ending_stock/$this->initial_stock*100;
	}

	public function harvestCost()
	{
		return $this->postharvest->sum('cost');
	}

	public function totalCost()
	{
		return $this->onfarm->onfarmCost()+$this->harvestCost();
	}

	public function formattedTotalCost()
	{
		return number_format($this->totalCost(), 0, ',', '.');
	}
    
    protected $guarded = ['id'];
    protected $dates = ['harvested_at'];
}
