<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'titulo' => 'required|min:4|max:50|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',
            'director' => 'required|min:4|max:50|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',
            'fecha_pub' => 'required|date',
        ];;
    }
}
