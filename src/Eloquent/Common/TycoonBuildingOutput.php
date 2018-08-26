<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class TycoonBuildingOutput extends BaseModel
{
    protected $table = 'tycoon_building_outputs';

    protected $fillable = ['tycoon_building_id', 'building_output_id', 'output_value'];

    protected $dates = ['created_at', 'updated_at'];
}