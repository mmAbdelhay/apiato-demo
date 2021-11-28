<?php

namespace App\Containers\AppSection\Items\Actions;

use App\Containers\AppSection\Items\Models\Items;
use App\Containers\AppSection\Items\Tasks\FindItemsByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindItemsByIdAction extends Action
{
    public function run(Request $request): Items
    {
        return app(FindItemsByIdTask::class)->run($request->id);
    }
}
