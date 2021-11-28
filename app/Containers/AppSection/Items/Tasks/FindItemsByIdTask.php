<?php

namespace App\Containers\AppSection\Items\Tasks;

use App\Containers\AppSection\Items\Data\Repositories\ItemsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindItemsByIdTask extends Task
{
    protected ItemsRepository $repository;

    public function __construct(ItemsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
