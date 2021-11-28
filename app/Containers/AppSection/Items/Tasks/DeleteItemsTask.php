<?php

namespace App\Containers\AppSection\Items\Tasks;

use App\Containers\AppSection\Items\Data\Repositories\ItemsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteItemsTask extends Task
{
    protected ItemsRepository $repository;

    public function __construct(ItemsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
