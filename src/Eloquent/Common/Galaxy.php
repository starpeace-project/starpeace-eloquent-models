<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class Galaxy extends BaseModel
{
    protected $table = 'galaxies';

    protected $fillable = [ 'galaxy_type_id', 'galaxy_owner_id', 'name', 'display_name'];

    protected $dates = [ 'created_at', 'updated_at'];
    
}