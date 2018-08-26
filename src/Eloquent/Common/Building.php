<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class Building extends BaseModel
{
    protected $table = 'buildings';

    protected $fillable = ['name'];

    protected $dates = ['created_at', 'updated_at'];
}