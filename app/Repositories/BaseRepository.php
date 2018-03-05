<?php

namespace App\Repositories;

/**
* Base Repository
*/
abstract class BaseRepository
{
    public $model;

    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }
}
