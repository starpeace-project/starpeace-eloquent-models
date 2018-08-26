<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class MapTown extends BaseModel
{
    protected $table = 'maps_towns';

    protected $fillable = ['map_id', 'faction_id', 'name', 'location_x', 'location_y'];

}