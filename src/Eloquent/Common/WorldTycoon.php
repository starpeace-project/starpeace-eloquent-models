<?php

namespace Starpeace\Models\Eloquent\Common;

use Carbon\Carbon;
use Starpeace\Models\Eloquent\BaseModel;

class WorldTycoon extends BaseModel
{
    protected $table = 'worlds_tycoons';

    protected $fillable = ['world_id', 'tycoon_id', 'last_request', 'last_location_x', 'last_location_y'];

    public function world()
    {
        return $this->hasOne(World::class);
    }

    public function tycoon()
    {
        return $this->hasOne(Tycoon::class);
    }

    public function scopeOnline($query)
    {
        $now = Carbon::now()->toDateTimeString();
        $ten_minutes_ago = Carbon::now()->subMinute(60)->toDateTimeString();
        return $query->whereBetween('last_request', [$ten_minutes_ago, $now]);
    }
}
