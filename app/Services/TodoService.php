<?php 

namespace App\Services;

use App\DTO\Todo\CreateTodoDTO;
use App\DTO\Todo\UpdateTodoDTO;
use App\Repositories\Todo\TodoRepositoryInterface;

class TodoService {

    public function __construct(protected TodoRepositoryInterface $repository) {}

    public function getAll() : array {
        return $this->repository->getAll();
    }

    public function destroy(string|int $id) : bool {
        return $this->repository->destroy($id);
    }

    public function store(CreateTodoDTO $dto) : array {
        return $this->repository->store($dto);
    }

    public function update(UpdateTodoDTO $dto) : bool {
        return $this->repository->update($dto);
    }

    public function show(string | int $id) : array {
        return $this->repository->show($id);
    }

}