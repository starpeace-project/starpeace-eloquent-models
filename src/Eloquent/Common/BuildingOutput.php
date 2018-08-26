<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class BuildingOutput extends BaseModel
{
    protected $table = 'building_outputs';

    protected $fillable = ['building_id', 'variable_id', 'default_value'];
}