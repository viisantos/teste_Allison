<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'nome'      => ['required|string|max:255'],
            'sobrenome' => ['required|string|max:255'],
            'email'     => ['required|email|unique:profile,email'],
            'pais'      => ['required|string|max:255'],
            'cidade'    => ['required|string|max:255]'],
        ];
    }
}