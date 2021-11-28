<?php

namespace App\Containers\AppSection\Items\Tasks;

use App\Containers\AppSection\Items\Data\Repositories\ItemsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateItemsTask extends Task
{
    protected ItemsRepository $repository;

    public function __construct(ItemsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
