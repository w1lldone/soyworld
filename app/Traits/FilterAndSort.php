<?php

namespace App\Traits;

/**
* Trait Filter and Sort
*/
trait FilterAndSort
{
    
    /**
     * Filter and sort transaction
     * @param  Eloquent $model
     * @param  Request $request
     * @return Collection          
     */
    public function filterAndSort($model, $request)
    {
        if ($request->has('status')) {
            $model = $model->where('status_id', $request->status);
        }

        if ($request->has('keyword')) {
            $model = $model->where('code', 'like', "%$request->keyword%")->orWhereHas('user', function ($query) use ($request)
            {
                $query->where('name', 'like', "%$request->keyword%");
            });
        }

        if ($request->has('sort')) {
            $model = $model->{$request->sort}();
        }

        return $model->paginate(10);
    }
}
