<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:1|max:64|regex:/^[a-zA-Z0-9-_]+$/',
            'surnames' => 'required|min:1|max:64|regex:/^[a-zA-Z0-9-_]+$/',
            'email' => 'min:3|max:64|email',
            'phone' => 'required|min:9|max:32|regex:/^([0-9\s\-\+\(\)]*)$/',
            'message' => 'min:3|max:3000',
        ];
    }

    public function messages()
    {
        return [
            'name' => [
                'required' => 'El nombre es obligatorio',
                'min' => 'El nombre debe tener al menos 3 caracteres',
                'max' => 'El nombre debe tener como máximo 64 caracteres',
                'regex' => 'El nombre debe tener sólo letras, números, guiones y guiones bajos',
            ],

            'surnames' => [
                'required' => 'El apellido es obligatorio',
                'min' => 'El apellido debe tener al menos 3 caracteres',
                'max' => 'El apellido debe tener como máximo 64 caracteres',
                'regex' => 'El apellido debe tener sólo letras, números, guiones y guiones bajos',
            ],

            'email' => [
                'min' => 'El email debe tener al menos 3 caracteres',
                'max' => 'El email debe tener como máximo 64 caracteres',
                'regex' => 'El email debe tener sólo letras, números, guiones y guiones bajos',
            ],

            'phone' => [
                'required' => 'El teléfono es obligatorio',
                'min' => 'El teléfono debe tener al menos 9 caracteres',
                'max' => 'El teléfono debe tener como máximo 32 caracteres',
                'regex' => 'El teléfono debe tener sólo números y guiones bajos',
            ],

            'message' => [
                'min' => 'El mensaje debe tener al menos 3 caracteres',
                'max' => 'El mensaje debe tener como máximo 3000 caracteres',
                'regex' => 'El mensaje debe tener sólo letras, números, guiones y guiones bajos',
            ],
        ];
    }
}