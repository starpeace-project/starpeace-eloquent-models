<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class BuildingSetBuilding extends BaseModel
{
    protected $table = 'building_set_buildings';

    protected $fillable = ['building_set_id', 'building_id'];

    protected $dates = ['created_at', 'updated_at'];
}