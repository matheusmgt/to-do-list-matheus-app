<?php

namespace App\Repositories\Todo;

use App\DTO\Todo\CreateTodoDTO;
use App\DTO\Todo\UpdateTodoDTO;

interface TodoRepositoryInterface
{
    public function getAll(): array;

    public function destroy(string|int $id): bool;

    public function show(string|int $id): array;

    public function store(CreateTodoDTO $dto): array;

    public function update(UpdateTodoDTO $dto): bool;

}