<?php

namespace App\Containers\AppSection\Items\Tasks;

use App\Containers\AppSection\Items\Data\Repositories\ItemsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllItemsTask extends Task
{
    protected ItemsRepository $repository;

    public function __construct(ItemsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
