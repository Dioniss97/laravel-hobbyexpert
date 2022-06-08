<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:1|max:64',
            'description' => 'required|min:3|max:3000',
            'specs' => 'required|min:3|max:3000',
            'price' => 'required|min:1|max:32|regex:/^(\d+(?:[\.]\d{2})?)$/',
        ];
    }

    public function messages()
    {
        return [
            'title' => [
                'required' => 'El nombre es obligatorio',
                'min' => 'El nombre debe tener al menos 3 caracteres',
                'max' => 'El nombre debe tener como máximo 64 caracteres',
                'regex' => 'El nombre debe tener sólo letras, números, guiones y guiones bajos',
            ],
            'price' => [
                'required' => 'El precio es obligatorio',
                'min' => 'El precio debe tener al menos 1 caracter',
                'max' => 'El precio debe tener como máximo 32 caracteres',
                'regex' => 'El precio debe tener sólo números y punto para los decimales',
            ],
            'description' => [
                'min' => 'La descripción debe tener al menos 3 caracteres',
                'max' => 'La descripción debe tener como máximo 3000 caracteres',
                'regex' => 'La descripción debe tener sólo letras, números, guiones y guiones bajos',
            ],
            'specs' => [
                'min' => 'Las especificaciones debe tener al menos 3 caracteres',
                'max' => 'Las especificaciones debe tener como máximo 3000 caracteres',
                'regex' => 'Las especificaciones debe tener sólo letras, números, guiones y guiones bajos',
            ],
        ];
    }
}