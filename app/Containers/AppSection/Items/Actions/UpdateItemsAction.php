<?php

namespace App\Containers\AppSection\Items\Actions;

use App\Containers\AppSection\Items\Models\Items;
use App\Containers\AppSection\Items\Tasks\UpdateItemsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateItemsAction extends Action
{
    public function run(Request $request): Items
    {
        $data = $request->sanitizeInput($request->all());

        return app(UpdateItemsTask::class)->run($request->id, $data);
    }
}
