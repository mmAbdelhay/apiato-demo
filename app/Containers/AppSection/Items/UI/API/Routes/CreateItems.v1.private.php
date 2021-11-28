<?php

/**
 * @apiGroup           Items
 * @apiName            createItems
 *
 * @api                {POST} /v1/items Endpoint title here..
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

Route::post('items', [Controller::class, 'createItems'])
    ->name('api_items_create_items')
    ->middleware(['auth:api']);

