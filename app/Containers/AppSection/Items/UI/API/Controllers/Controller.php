<?php

namespace App\Containers\AppSection\Items\UI\API\Controllers;

use App\Containers\AppSection\Items\UI\API\Requests\CreateItemsRequest;
use App\Containers\AppSection\Items\UI\API\Requests\DeleteItemsRequest;
use App\Containers\AppSection\Items\UI\API\Requests\GetAllItemsRequest;
use App\Containers\AppSection\Items\UI\API\Requests\FindItemsByIdRequest;
use App\Containers\AppSection\Items\UI\API\Requests\UpdateItemsRequest;
use App\Containers\AppSection\Items\UI\API\Transformers\ItemsTransformer;
use App\Containers\AppSection\Items\Actions\CreateItemsAction;
use App\Containers\AppSection\Items\Actions\FindItemsByIdAction;
use App\Containers\AppSection\Items\Actions\GetAllItemsAction;
use App\Containers\AppSection\Items\Actions\UpdateItemsAction;
use App\Containers\AppSection\Items\Actions\DeleteItemsAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createItems(CreateItemsRequest $request): JsonResponse
    {
        $items = app(CreateItemsAction::class)->run($request);
        return $this->created($this->transform($items, ItemsTransformer::class));
    }

    public function findItemsById(FindItemsByIdRequest $request): array
    {
        $items = app(FindItemsByIdAction::class)->run($request);
        return $this->transform($items, ItemsTransformer::class);
    }

    public function getAllItems(GetAllItemsRequest $request): array
    {
        $items = app(GetAllItemsAction::class)->run($request);
        return $this->transform($items, ItemsTransformer::class);
    }

    public function updateItems(UpdateItemsRequest $request): array
    {
        $items = app(UpdateItemsAction::class)->run($request);
        return $this->transform($items, ItemsTransformer::class);
    }

    public function deleteItems(DeleteItemsRequest $request): JsonResponse
    {
        app(DeleteItemsAction::class)->run($request);
        return $this->noContent();
    }
}
