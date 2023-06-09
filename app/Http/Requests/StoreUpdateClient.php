<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'nome' => 'required|string|max:255|min:2',
            'email' => [
                'required',
                'email',
                "unique:clients,email,{$this->id},id",
            ],
            'senha' => [
                'required',
                'min:4',
                'max:15',
            ],
            'cpf' => [
                'required',
                'min:14',
                'max:14',
            ],
            'cpf' => [
                'nullable',
                'min:14',
                'max:14',
            ],
            'telefone' => [
                'nullable',
                'min:14',
                'max:15',
            ],
            'endereco' => [
                'nullable',
                'max:500',
            ],
            'data_nasc' => [
                'nullable',
            ],
            'image' => [
                'nullable',
                'image',
                'max:2048',
            ]
        ];

        // if($this->method() === 'PUT') {
        //     $rules['email']= [
        //         'required',
        //         'email',
        // "unique:clients,email,{$this->id},id"
        //     ];
        // }
        return $rules;
    }
}
