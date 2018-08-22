<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class World extends BaseModel
{
    protected $table = 'worlds';

    protected $fillable = [ 'galaxy_id', 'map_id', 'name', 'display_name', 'use_whitelist', 'use_blacklist' ];

    protected $dates = [ 'created_at', 'updated_at' ];

    public function galaxy()
    {
        return $this->belongsTo(Galaxy::class, 'id', 'galaxy_id');
    }

    public function tycoons()
    {
        return $this->hasManyThrough(Tycoon::class, WorldTycoon::class, 'tycoon_id', 'id', 'id');
    }
}