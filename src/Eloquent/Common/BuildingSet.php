<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class BuildingSet extends BaseModel
{
    protected $table = 'building_sets';

    protected $fillable = ['name'];

    protected $dates = ['created_at', 'updated_at'];
}