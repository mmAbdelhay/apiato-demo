<?php

namespace App\Containers\AppSection\Items\Tasks;

use App\Containers\AppSection\Items\Data\Repositories\ItemsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateItemsTask extends Task
{
    protected ItemsRepository $repository;

    public function __construct(ItemsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
