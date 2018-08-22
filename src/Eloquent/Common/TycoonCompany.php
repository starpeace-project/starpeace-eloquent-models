<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class TycoonCompany extends BaseModel
{
    protected $table = 'tycoon_companies';

    protected $fillable = [ 'tycoon_id', 'system_faction_id', 'name' ];

    protected $dates = [ 'created_at', 'updated' ];
}