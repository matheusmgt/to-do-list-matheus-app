<?php

namespace App\DTO\Todo;

use App\Http\Requests\Todo\TodoPostRequest;

class CreateTodoDTO {

    public function __construct(public string $description, public string|bool $has_done) {}

    public static function makeFromRequest(TodoPostRequest $request) {
        return new self(
            $request->description,
            $request->has_done
        );
    }

}