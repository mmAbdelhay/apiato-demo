<?php

/**
 * @apiGroup           Items
 * @apiName            deleteItems
 *
 * @api                {DELETE} /v1/items/:id Endpoint title here..
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

Route::delete('items/{id}', [Controller::class, 'deleteItems'])
    ->name('api_items_delete_items')
    ->middleware(['auth:api']);

