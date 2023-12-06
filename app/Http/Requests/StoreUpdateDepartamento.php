<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDepartamento extends FormRequest
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
            'nombre_departamento' => 'required',
            'sigla_departamento' => 'required|max:5',
            'descripcion_departamento' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre_departamento.required' => '*El nombre de la regional es requerido',
            'sigla_departamento.required' => '*La sigla de la regional es requerido',
            'sigla_departamento.max' => 'La sigla de la regional acepta max: 5 caracteres',
            'descripcion_departamento.required' => '*La descripción de la regional es requerido',
        ];
    }

    public function attributes(): array
    {
        return [
            'nombre_departamento' => 'nombre de la regional',
            'sigla_departamento' => 'sigla de la regional',
            'descripcion_departamento' => 'descripción de la regional',
        ];
    }
}
