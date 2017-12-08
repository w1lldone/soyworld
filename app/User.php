<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    * RELATIONS SECTION
    */
    public function privilage()
    {
        return $this->belongsTo('App\Privilage');
    }

    public function seed()
    {
        return $this->hasMany('App\Seed');
    }

    public function poktan()
    {
        return $this->belongsTo('App\Poktan');
    }

    public function onfarm(){
        return $this->hasMany('App\Onfarm');
    }

    public function onfarm_cost()
    {
        return $this->hasManyThrough('App\OnfarmCost', 'App\Onfarm');
    }

    public function harvest()
    {
        return $this->hasManyThrough('App\Harvest', 'App\Onfarm');
    }

    public function transaction(){
        return $this->hasMany('App\Transaction');
    }

    /*
    * CUSTOM METHOD SECTION
    */
    public function isSuperadmin()
    {
        return $this->privilage->is_superadmin;
    }

    public static function addUser($request)
    {
        return static::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'address' => $request->address,
            'password' => bcrypt($request->password),
            'privilage_id' => $request->privilage_id,
            'poktan_id' => $request->privilage_id == 2 ? $request->poktan_id : null,
            'is_activated' => 1,
        ]);
    }

    public function hasRole($role)
    {
        return $this->privilage->name === $role;
    }

    public function getOnfarm()
    {
        return $this->isSuperadmin() ? \App\Onfarm::all() : $this->onfarm;
    }

    public function getSupplier()
    {
        return $this->isSuperadmin() ? \App\Supplier::all() : $this->poktan->supplier;
    }

    public function hasActiveTrans()
    {
        return !empty($this->transaction()->where('status_id', 1)->first());
    }

    public function thisMonthIncome()
    {
        $date = date('Y-m');
        $income = \App\TransactionDetail::salesHistory()->where('created_at', 'like', "%$date%")->get()->sum('total_price');
        return number_format($income, 0, ',', '.');
    }

    public function thisMonthHarvest()
    {
       $date = date('Y-m');
       return $this->harvest()->where('harvested_at', 'like', "%$date%")->get()->sum('initial_stock');
    }

    public function thisMonthPurchase()
    {
        $date = date('Y-m');
        return $this->transaction()->where('created_at', 'like', "%$date%")->where('status_id', 3)->get()->sum('total_quantity');
    }

    public function latestSales()
    {
        return \App\TransactionDetail::salesHistory()->latest()->take(5)->get();
    }

}
