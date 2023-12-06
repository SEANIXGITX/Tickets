<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideo extends FormRequest
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
            'titulo_video' => 'required',
            'descripcion_video' => 'required',
            'ruta_video' => 'required|mimes:mp4,ogv,avi',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo_video.required' => '*El título del video es requerido',
            'descripcion_video.required' => '*La descripcion para el video es requerido',
            'ruta_video.required' => '*Subir un video es requerido',
            'ruta_video.mimes' => 'El video debe estar en formato .mp4 .ogv .avi',
        ];
    }

    public function attributes(): array
    {     
        return [
            'titulo_video' => 'titulo del video',
            'descripcion_video' => 'La descripcion para el video',
            'ruta_video' => 'Subir un video',
        ];
    }
}
