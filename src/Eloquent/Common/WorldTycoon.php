<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class WorldTycoon extends BaseModel
{
    protected $table = 'worlds_tycoons';

    protected $fillable = [ 'world_id', 'tycoon_id' ];
}