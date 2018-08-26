<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class BuildingVariable extends BaseModel
{
    protected $table = 'building_variables';

    protected $fillable = ['name'];
}