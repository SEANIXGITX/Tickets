<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateServicio extends FormRequest
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
            'nombre_servicio' => 'required',
            'codigo_servicio' => 'required|max:5',
            'descripcion_servicio' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre_servicio.required' => '*El nombre del servicio es requerido',
            'codigo_servicio.required' => '*El codigo del servicio es requerido',
            'codigo_servicio.max' => 'El codigo del servicio acepta max: 5 caracteres',
            'descripcion_servicio.required' => '*La descripción del servicio es requerido',
        ];
    }

    public function attributes(): array
    {
        return [
            'nombre_servicio' => 'nombre del servicio',
            'codigo_servicio' => 'codigo del servicio',
            'descripcion_servicio' => 'descripción del servicio',
        ];
    }
}
