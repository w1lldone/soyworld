<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class HarvestPostharvest extends Pivot
{
    protected $table = 'harvest_postharvest';
    protected $guarded = 'id';
}
