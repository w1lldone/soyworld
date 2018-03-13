<?php

namespace App\Repositories;

use App\TransactionDetail;

/**
* Transaction details repository
*/
class TransactionDetailsRepository extends BaseRepository
{
    
    function __construct(TransactionDetail $model)
    {
        $this->setModel($model);
    }

    public function getSales($request)
    {
        $sales = $this->model->whereHas('transaction', function($query)
        {
            $query->where('status_id', '<>', 4);
        });

        switch ($request->view) {
            case 'poktan':
                $sales = $this->model->whereHas('transaction', function($query)
                {
                    $query->where('poktan_id', auth()->user()->poktan_id);
                });
                break;
            
            default:
                $sales = $sales->whereHas('harvest', function($query1)
                {
                    $query1->whereHas('onfarm', function($query2)
                    {
                        $query2->where('user_id', auth()->id());
                    });
                });
                break;
        }

        if ($request->has('month')) {
            $sales = $sales->where('created_at', 'like', "%$request->month%");
        }

        switch ($request->sort) {
            case 'oldest':
                $sales = $sales->oldest();
                break;

            case 'expensive':
                $sales = $sales->orderBy('quantity', 'desc');
                break;
            
            default:
                $sales = $sales->latest();
                break;
        }

        return $sales->get();
    }
}
