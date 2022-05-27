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
            'name' => 'required|min:1|max:64|regex:/^[a-zA-Z0-9-_]+$/',
            'description' => 'min:3|max:3000|regex:/^[a-zA-Z0-9-_]+$/',
            'specs' => 'min:3|max:3000|regex:/^[a-zA-Z0-9-_]+$/',
            'price' => 'required|min:1|max:32|regex:/^[0-9-_]+$/',
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