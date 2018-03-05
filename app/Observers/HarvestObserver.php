<?php

namespace App\Observers;

use App\Harvest;

/**
* Harvest Observer
*/
class HarvestObserver
{
    
    public function deleting(Harvest $harvest)
    {
        $harvest->postharvest()->detach();
    }
}
