<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class BuildingInput extends BaseModel
{
    protected $table = 'building_inputs';

    protected $fillable = ['building_id', 'variable_id', 'default_value'];
}