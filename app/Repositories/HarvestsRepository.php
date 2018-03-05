<?php

namespace App\Repositories;

use App\Harvest;

/**
* Harvests Repository
*/
class HarvestsRepository extends BaseRepository
{
    
    public function __construct(Harvest $harvest)
    {
        $this->setModel($harvest);
    }

    public function getHarvests($user, $request)
    {
        if ($user->isSuperadmin()) {
            $harvests = $this->model->latest();
        } elseif ($user->isPoktanLeader() && $request->view == 'poktan') {
            $harvests = $this->model->whereHas('onfarm.user', function ($query) use ($user)
            {
                $query->where('poktan_id', $user->poktan_id);
            });
        } else{
            $harvests = $user->harvest();
        }

        switch ($request->filter) {
            case 'unhandled':
                $handlings = $user->poktan->postharvest->count();
                $harvests = $harvests->has('postharvest', '<', $handlings);
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
}
