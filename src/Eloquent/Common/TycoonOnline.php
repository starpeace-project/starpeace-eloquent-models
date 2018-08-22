<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class TycoonOnline extends BaseModel
{
    protected $table = 'tycoons_online';

    protected $fillable = [ 'tycoon_id' ];

    protected $dates = [ 'last_request' ];
}