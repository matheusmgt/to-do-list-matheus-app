<?php

namespace App\Http\Controllers; 

use App\DTO\Todo\CreateTodoDTO;
use App\DTO\Todo\UpdateTodoDTO;
use App\Services\TodoService;


use Illuminate\Http\Request;
use App\Http\Requests\Todo\TodoPostRequest;
use App\Http\Requests\Todo\TodoUpdateRequest;

class TodoController extends Controller
{
    public function __construct(protected TodoService $service) {}

    public function vue_instance()
    {
        return view('vue-app');
    }

    public function index()
    {
        return $this->service->getAll();
    }

    public function show(string | int $id)
    {
        return $this->service->show($id);
    }

    public function destroy(string | int $id)
    {
        return $this->service->destroy($id);
    }

    public function store(TodoPostRequest $request)
    {
        return $this->service->store(CreateTodoDTO::makeFromRequest($request));
    }

    public function update(TodoUpdateRequest $request)
    {
        return $this->service->update(UpdateTodoDTO::makeFromRequest($request));
    }

}
