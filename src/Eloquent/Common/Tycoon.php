<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class Tycoon extends BaseModel
{
    protected $table = 'tycoons';

    protected $fillable = [ 'user_id', 'name', 'cash' ];

    protected $dates = [ 'created_at', 'updated_at' ];

    public function worlds()
    {
        return $this->hasMany(WorldTycoon::class);
    }

    public function worldTycoon()
    {
        return $this->belongsTo(WorldTycoon::class);
    }
}