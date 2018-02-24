<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	/*RELATION METHOD*/
    public function transaction(){
    	return $this->hasMany('App\Transaction');
    }

    /*CUSTOM METHOD*/

    public function getStatusColorAttribute()
    {
    	switch ($this->id) {
    		case 1:
    			return 'warning';
    		break;
    		
    		case 2:
    			return 'info';	
			break;

			case 3:
				return 'success';
			break;

			case 4:
				return 'danger';
			break;
    	}
    }

    protected $guarded = ['id'];
}
