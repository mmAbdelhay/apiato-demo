<?php

/**
 * @apiGroup           Items
 * @apiName            getAllItems
 *
 * @api                {GET} /v1/items Get all items
 * @apiDescription     This route to get all items from here
 *
 * @apiVersion         1.0.0
 * @apiPermission      auth
 *
 * @apiParam           nothing
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Items\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('items', [Controller::class, 'getAllItems'])
    ->name('api_items_get_all_items')
    ->middleware(['auth:api']);
