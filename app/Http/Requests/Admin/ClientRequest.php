<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'postal_code' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name' => [
                'required' => 'El campo nombre es obligatorio',
                'string' => 'El campo nombre debe ser una cadena de caracteres',
                'max' => 'El campo nombre no puede tener más de 255 caracteres',
            ],
            'surnames' => [
                'required' => 'El campo apellidos es obligatorio',
                'string' => 'El campo apellidos debe ser una cadena de caracteres',
                'max' => 'El campo apellidos no puede tener más de 255 caracteres',
            ],
            'email' => [
                'required' => 'El campo email es obligatorio',
                'string' => 'El campo email debe ser una cadena de caracteres',
                'email' => 'El campo email debe ser un email válido',
                'max' => 'El campo email no puede tener más de 255 caracteres',
                'unique' => 'El email ya existe en la base de datos'
            ],
            'city' => [
                'required' => 'El campo ciudad es obligatorio',
                'string' => 'El campo ciudad debe ser una cadena de caracteres',
                'max' => 'El campo ciudad no puede tener más de 255 caracteres',
            ],
            'address' => [
                'required' => 'El campo dirección es obligatorio',
                'string' => 'El campo dirección debe ser una cadena de caracteres',
                'max' => 'El campo dirección no puede tener más de 255 caracteres',
            ],
            'phone' => [
                'required' => 'El campo teléfono es obligatorio',
                'string' => 'El campo teléfono debe ser una cadena de caracteres',
                'max' => 'El campo teléfono no puede tener más de 255 caracteres',
            ],
            'postal_code' => [
                'required' => 'El campo código postal es obligatorio',
                'string' => 'El campo código postal debe ser una cadena de caracteres',
                'max' => 'El campo código postal no puede tener más de 255 caracteres',
            ]
        ];
    }
}
