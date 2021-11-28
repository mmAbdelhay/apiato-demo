<?php

namespace App\Containers\AppSection\Items\UI\API\Transformers;

use App\Containers\AppSection\Items\Models\Items;
use App\Ship\Parents\Transformers\Transformer;

class ItemsTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Items $items): array
    {
        $response = [
            'object' => $items->getResourceKey(),
            'id' => $items->getHashedKey(),
            'created_at' => $items->created_at,
            'updated_at' => $items->updated_at,
            'readable_created_at' => $items->created_at->diffForHumans(),
            'readable_updated_at' => $items->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $items->id,
            // 'deleted_at' => $items->deleted_at,
        ], $response);
    }
}
