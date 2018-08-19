<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class GalaxyType extends BaseModel
{
    protected $table = "galaxy_types";

    protected $fillable = [ 'name', 'display_name' ];

    protected $dates = [ 'created_at', 'updated_at'];

    protected $dateFormat ='Y-m-d H:i:s';

    public function getCreatedAtAttribute($value)
    {
        return $value->format('d.m.Y H:i:s');
    }

    public function getUpdatedAtAttribute($value)
    {
        return $value->format('d.m.Y H:i:s');
    }
}