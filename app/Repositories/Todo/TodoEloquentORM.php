<?php

namespace App\Repositories\Todo;

use App\DTO\Todo\CreateTodoDTO;
use App\DTO\Todo\UpdateTodoDTO;
use App\Models\Todo;

class TodoEloquentORM implements TodoRepositoryInterface {

    public function __construct(protected Todo $model) {}

    public function getAll() : array {
        return $this->model::orderBy('id', 'desc')->get()->toArray();
    }

    public function destroy(string|int $id) : bool {
        return $this->model->findOrFail($id, 'id')->delete();
    }

    public function show(string | int $id) : array {
        return $this->model->findOrFail($id, 'id')->first()->toArray();
    }
    
    public function store(CreateTodoDTO $dto) : array {
        return $this->model->create((array) $dto)->toArray();
    }

    public function update(UpdateTodoDTO $dto) : bool {
        return $this->model->findOrFail($dto->id, 'id')->update((array) $dto);
    }

}