<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCaja extends FormRequest
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
            'nombre_caja' => 'required',
            'codigo_caja' => 'required|max:5',
            'descripcion_caja' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre_caja.required' => '*El nombre de la caja es requerido',
            'codigo_caja.required' => '*El codigo de la caja es requerido',
            'codigo_caja.max' => 'El codigo de la caja acepta max: 5 caracteres',
            'descripcion_caja.required' => '*La descripción de la caja es requerido',
        ];
    }

    public function attributes(): array
    {
        return [
            'nombre_servicio' => 'nombre de la caja',
            'codigo_servicio' => 'codigo de la caja',
            'descripcion_servicio' => 'descripción de la caja',
        ];
    }
}
