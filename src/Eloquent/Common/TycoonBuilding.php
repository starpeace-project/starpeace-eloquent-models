<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class TycoonBuilding extends BaseModel
{
    protected $table = 'tycoon_buildings';

    protected $fillable = ['tycoon_id', 'company_id', 'map_id', 'name', 'upgrade_level', 'upgradable'];

    protected $dates = ['created_at', 'updated_at'];
}