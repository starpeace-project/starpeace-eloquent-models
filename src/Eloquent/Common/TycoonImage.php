<?php

namespace Starpeace\Models\Eloquent\Common;

use Starpeace\Models\Eloquent\BaseModel;

class TycoonImage extends BaseModel
{
    protected $table = 'tycoon_images';

    protected $fillable = ['tycoon_id', 'path', 'filename'];

    protected $dates = ['created_at', 'updated_at'];
}