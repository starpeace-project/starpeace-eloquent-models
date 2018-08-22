<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class BuildingClass extends BaseModel
{
    protected $table = 'building_classes';

    protected $fillable = [ 'building_type_id', 'system_faction_id' ];

    protected $dates = [ 'created_at', 'updated_at' ];
}