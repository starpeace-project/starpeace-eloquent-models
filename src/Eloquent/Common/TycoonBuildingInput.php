<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class TycoonBuildingInput extends BaseModel
{
    protected $table = 'tycoon_building_inputs';

    protected $fillable = ['tycoon_building_id', 'building_input_id', 'input_value'];

    protected $dates = ['created_at', 'updated_at'];
}