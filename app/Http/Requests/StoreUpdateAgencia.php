<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAgencia extends FormRequest
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
            'nombre_agencia' => 'required',
            'sigla_agencia' => 'required|max:5',
            'descripcion_agencia' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'nombre_agencia.required' => '*El nombre de la agencia es requerido',
            'sigla_agencia.required' => '*La sigla de la agencia es requerido',
            'sigla_agencia.max' => 'La sigla de la agencia acepta max: 5 caracteres',
            'descripcion_agencia.required' => '*La descripción de la agencia es requerido',
        ];
    }

    public function attributes(): array
    {
        return [
            'nombre_agencia' => 'nombre de la agencia',
            'sigla_agencia' => 'sigla de la agencia',
            'descripcion_agencia' => 'descripción de la agencia',
        ];
    }
}
