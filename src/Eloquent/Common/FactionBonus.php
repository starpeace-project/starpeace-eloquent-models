<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class FactionBonus extends BaseModel
{
    protected $table = 'faction_bonuses';

    protected $fillable = ['name', 'description', 'default_value'];

}