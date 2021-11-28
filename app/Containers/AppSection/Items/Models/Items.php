<?php

namespace App\Containers\AppSection\Items\Models;

use App\Ship\Parents\Models\Model;

class Items extends Model
{
    protected $fillable = [
        "name", "is_set"
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Items';
}
