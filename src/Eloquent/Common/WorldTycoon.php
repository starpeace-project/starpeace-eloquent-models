<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class WorldTycoon extends BaseModel
{
    protected $table = 'worlds_tycoons';

    protected $fillable = [ 'world_id', 'tycoon_id' ];

    public function world()
    {
        return $this->hasOne(World::class);
    }

    public function tycoon()
    {
        return $this->hasOne(Tycoon::class);
    }
}