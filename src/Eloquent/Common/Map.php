<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class Map extends BaseModel
{
    protected $table = 'maps';

    protected $fillable = [ 'map_category_id', 'name', 'display_name', 'map_x', 'map_y', 'location', 'filename' ];

    protected $dates = [ 'created_at', 'updated_at'];
    
}