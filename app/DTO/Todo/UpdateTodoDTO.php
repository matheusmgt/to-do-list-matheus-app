<?php

namespace App\DTO\Todo;

use App\Http\Requests\Todo\TodoUpdateRequest;

class UpdateTodoDTO {

    public function __construct(public string|int $id, public string $description, public bool $has_done) {}

    public static function makeFromRequest(TodoUpdateRequest $request) {
        return new self(
            $request->id,
            $request->description,
            $request->has_done
        );
    }

}