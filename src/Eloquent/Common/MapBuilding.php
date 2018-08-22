<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class MapBuilding extends BaseModel
{
    protected $table = "map_buildings";

    protected $fillable = [ 'map_id', 'location_x', 'location_y', 'building_class_id', 'building_id', 'deterioration_level' ];

    protected $dates = [ 'created_at', 'updated_at' ];
}