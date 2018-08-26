<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class Faction extends BaseModel
{
    protected $table = 'factions';

    protected $fillable = ['name'];
}