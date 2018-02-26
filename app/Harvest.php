<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harvest extends Model
{

	/**
	* RELATION SECTION
	*
	*/
	public function postharvest(){
		return $this->belongsToMany('App\Postharvest')->withPivot('date', 'cost', 'weight_reduction');
	}

	public function onfarm(){
		return $this->belongsTo('App\Onfarm');
	}

	public function transaction_detail(){
		return $this->hasMany('App\TransactionDetail');
	}

	/**
	* CUSTOM METHOD SECTION
	*
	*/

	public function addPostharvest($request)
	{
		return $this->postharvest()->create([
			'name' => 'panen '.$this->onfarm->name,
			'cost' => $request->cost,
		]);
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
		if (auth()->user()->isSuperadmin()) {
			return Harvest::where('on_sale', 1)->get()->sum('ending_stock');
		}
				
		return auth()->user()->harvest()->where('on_sale', 1)->get()->sum('ending_stock');
	}

	public static function readyStock($poktanId = 1)
	{
		return static::where('on_sale', 1)->where('ending_stock', '<>', 0)->whereHas('onfarm.user', function ($query) use ($poktanId)
		{
			$query->where('poktan_id', $poktanId);
		})->get();
	}

	public function stockPercent()
	{
		return floor($this->ending_stock/$this->initial_stock*100);
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

	public static function annualHarvest($year = '2017')
	{
		$harvests = Harvest::whereYear('harvested_at', $year)->get();

		for ($i=1; $i <= 12; $i++) { 
			$date = date("Y-m", mktime(0,0,0,$i,1,$year));
			$data[$date] = $harvests->where('periode', $date)->sum('initial_stock');
		}

		return array_values($data);
	}

	public function income()
	{
		return $this->transaction_detail()->whereHas('transaction', function($query)
		{
			$query->where('status_id', 3);
		})->get()->sum('total_price');
	}

	public function revenue()
	{
		if ($this->income() == 0) {
			return 0;
		}

		$revenue = $this->income() - $this->totalCost();
		return $revenue;
	}

	// get productivity on kg per square meter
	public function productivity()
	{
		return round($this->initial_stock/$this->onfarm->area, 2);
	}

	public function hasHandling($handling)
	{
		return $this->postharvest()->where('postharvest_id', $handling->id)->get()->isNotEmpty();
	}

	public function getHarvests($user, $request)
	{
		if ($user->isSuperadmin()) {
		    $harvests = $this->latest();
		} elseif ($user->isPoktanLeader() && $request->view == 'poktan') {
		    $harvests = $this->whereHas('onfarm.user', function ($query) use ($user)
		    {
		    	$query->where('poktan_id', $user->poktan_id);
		    });
		} else{
		    $harvests = $user->harvest();
		}

		switch ($request->filter) {
			case 'unhandled':
				$harvests = $harvests->where('on_sale', 0);
				break;

			case 'on_sale':
				$harvests = $harvests->where('on_sale', 1)->where('ending_stock', '<>', 0);
				break;

			case 'sold':
				$harvests = $harvests->where('ending_stock', 0);
				break;
			
			default:
				# code...
				break;
		}

		if ($request->has('sort')) {
			$harvests = $harvests->{$request->sort}();
		} else {
			$harvests = $harvests->latest();
		}

		return $harvests;
	}

	public function reduceStock($quantity)
	{
		if ($this->ending_stock != 0) {
			$this->ending_stock -= $quantity;
			$this->save();
		}

		return $this->ending_stock;
	}

	/**
	* CUSTOM ATTRIBUTE SECTION
	*
	*/

	public function getPeriodeAttribute()
	{
		return $this->harvested_at->format('Y-m');
	}

	public function getSaleStatusAttribute()
	{
		if ($this->ending_stock == 0 && $this->initial_stock != 0) {
			return 'Habis';
		}
		return $this->on_sale ? 'Dijual' : 'Tidak dijual';
	}

	public function getStatusColorAttribute()
	{
		switch ($this->sale_status) {
			case 'Dijual':
				$color = 'success';
				break;

			case 'Habis':
				$color = 'warning';
				break;
			
			default:
				$color = 'default';
				break;
		}

		return $color;
	}

	public function getIncomeAttribute()
	{
		return number_format($this->income(), 0, ',', '.');
	}

	public function getRevenueAttribute()
	{
		return number_format($this->revenue(),0,',','.');
	}

	public function getTotalCostAttribute()
	{
		return number_format($this->totalCost(),0,',','.');
	}

	// get produvtivity on ton per hectare
	public function getProductivityAttribute(){
		$val = $this->productivity()*10.." ton/ha";
		return $val;
	}

	public function getHandlingsAttribute(){
		return collect([
        	'Pengeringan',
			'Sortasi',
		]);
	}
		
		

    protected $guarded = ['id'];
    protected $dates = ['harvested_at'];
    // protected $appends = ['periode'];
}
