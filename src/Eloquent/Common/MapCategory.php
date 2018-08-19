<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class MapCategory extends BaseModel
{
    protected $table = 'map_categories';

    protected $fillable = ['name', 'display_name'];

    protected $dates = ['created_at', 'updated_at'];

    protected $dateFormat ='Y-m-d H:i:s';

}