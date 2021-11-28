<?php

namespace App\Containers\AppSection\Items\Actions;

use App\Containers\AppSection\Items\Tasks\DeleteItemsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteItemsAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteItemsTask::class)->run($request->id);
    }
}
