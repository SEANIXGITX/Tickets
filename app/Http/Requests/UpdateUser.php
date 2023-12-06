<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'name' => 'required|min:8',
            'email' => 'required|email',
            'ci' => 'numeric|digits_between:5,10',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '*El nombre del usuario es requerido',
            'name.min' => 'Como mminimo debe tener 8 letras',
            'email.required' => '*El correo es requerido',
            'email.email' => 'No esta en formato de correo electronico',
            'ci.numeric' => 'No esta en formato de números',
            'ci.digits_between' => 'Debe ingresa un rango min:5 digitos y max:10 digitos', 
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nombre del usuario',
            'email' => 'correo del usuario',
            'password' => 'contraseña del usuario',
            'ci' => 'carnet',
        ];
    }
}
