<?php

namespace App\Http\Requests\Todo;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class TodoUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required',
            'description' => 'required|max:100|min:5',
            'has_done' => 'required|boolean'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();

        $response = response()->json([
            'message' => 'Erro ao realizar a atualização no banco de dados, verifique abaixo.',
            'details' => $errors->messages(),
        ], 422);

        throw new HttpResponseException($response);
    }

    public function messages(): array
    {
        return [
            'id.required' => 'O campo ID é obrigatório o preenchimento.',
            'description.required' => 'A descrição da tarefa é obrigatório.',
            'description.max' => 'Campo descrição suporta no máximo 100 caracteres.',
            'description.min' => 'Campo descrição necessita ter no mínimo 5 caracteres.',
            'has_done.boolean' => 'O campo has_done, necessita ser um booleano.',
        ];
    }
}
