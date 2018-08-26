<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class FactionBonuses extends BaseModel
{
    protected $table = 'factions_bonuses';

    protected $fillable = ['faction_id', 'faction_bonus_id', 'value'];
}