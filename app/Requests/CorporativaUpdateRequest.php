<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorporativaUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cargo'              => 'required|string|max:255',
            'funcao'             => 'required|string|max:255',
            'tipo_de_tecnologia' => 'required|string|max:255',
            'empresa'            => 'required|string|max:255',
            'modalidade'         => 'required|string|max:255',
            'salario'            => 'required|string|max:255'
        ];
    }
}