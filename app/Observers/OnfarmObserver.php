<?php

namespace App\Observers;

use App\Onfarm;

/**
* Onfarm Observer
*/
class OnfarmObserver
{
    public function deleting(Onfarm $onfarm)
    {
        $onfarm->seed()->delete();
        $onfarm->activity()->delete();
        $onfarm->cost()->delete();
        $onfarm->harvest()->delete();
    }
}
