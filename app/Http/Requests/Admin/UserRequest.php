<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:3|max:64|regex:/^[a-zA-Z0-9-_]+$/',
            // 'username' => 'required|min:3|max:64|regex:/^[a-zA-Z0-9-_]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:64',
            'password_confirmation' => 'required|same:password',
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

            // 'username' => [
            //     'required' => 'El nombre de usuario es obligatorio',
            //     'min' => 'El nombre de usuario debe tener al menos 3 caracteres',
            //     'max' => 'El nombre de usuario debe tener como máximo 64 caracteres',
            //     'regex' => 'El nombre de usuario debe tener sólo letras, números, guiones y guiones bajos',
            // ],

            'email' => [
                'required' => 'El email es obligatorio',
                'email' => 'El email debe ser válido',
                'unique' => 'El email ya está en uso',
            ],

            'password' => [
                'required' => 'La contraseña es obligatoria',
                'min' => 'La contraseña debe tener al menos 6 caracteres',
                'max' => 'La contraseña debe tener como máximo 64 caracteres',
            ],

            'password_confirmation' => [
                'required' => 'La confirmación de la contraseña es obligatoria',
                'same' => 'La confirmación de la contraseña debe ser igual a la contraseña',
            ],
        ];
    }
}
