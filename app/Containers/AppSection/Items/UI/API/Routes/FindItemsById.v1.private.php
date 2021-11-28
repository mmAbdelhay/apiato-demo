<?php

/**
 * @apiGroup           Items
 * @apiName            findItemsById
 *
 * @api                {GET} /v1/items/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Items\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('items/{id}', [Controller::class, 'findItemsById'])
    ->name('api_items_find_items_by_id')
    ->middleware(['auth:api']);

