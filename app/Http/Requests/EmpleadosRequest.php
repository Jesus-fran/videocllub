<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadosRequest extends FormRequest
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

            'nombre' => 'required|min:4|max:25|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',
            'apellidos' => 'required|min:4|max:50|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',
            'direccion' => 'required|min:4|max:50',
            'tel' => 'required|numeric',
            'correo' => 'required|email',
            'sueldo' => 'required|numeric',
            'puesto' => 'required|alpha_num'
        ];
    }
}
