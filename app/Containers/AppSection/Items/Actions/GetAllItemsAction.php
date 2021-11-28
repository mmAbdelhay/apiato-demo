<?php

namespace App\Containers\AppSection\Items\Actions;

use App\Containers\AppSection\Items\Tasks\GetAllItemsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllItemsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllItemsTask::class)->addRequestCriteria()->run();
    }
}
