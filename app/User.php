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
            'password' => bcrypt($request->address),
            'privilage_id' => $request->privilage_id,
        ]);
    }
}
