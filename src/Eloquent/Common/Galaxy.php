<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class Galaxy extends BaseModel
{
    protected $table = 'galaxies';

    protected $fillable = [ 'galaxy_type_id', 'galaxy_owner_id', 'name', 'display_name'];

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