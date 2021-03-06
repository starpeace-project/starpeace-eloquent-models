<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class GalaxyType extends BaseModel
{
    protected $table = "galaxy_types";

    protected $fillable = [ 'name', 'display_name' ];

    protected $dates = [ 'created_at', 'updated_at'];

    public function galaxy()
    {
        return $this->belongsTo(Galaxy::class, 'galaxy_type_id', 'id');
    }
}