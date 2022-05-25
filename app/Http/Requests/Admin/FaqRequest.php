<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3|max:64|regex:/^[a-zA-Z0-9-_]+$/',
            // 'email' => 'required|',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre debe tener como máximo 64 caracteres',
            'name.regex' => 'El nombre debe tener sólo letras, números, guiones y guiones bajos',
        ];
    }
}