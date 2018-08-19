<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class GalaxyType extends BaseModel
{
    protected $table = "galaxy_types";

    protected $fillable = [ 'name', 'display_name' ];

    protected $dates = [ 'created_at', 'updated_at'];

    protected $dateFormat ='Y-m-d H:i:s';

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}