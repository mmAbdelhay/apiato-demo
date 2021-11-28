<?php

namespace App\Containers\AppSection\Items\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class ItemsRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
