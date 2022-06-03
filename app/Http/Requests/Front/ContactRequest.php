<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name' => [
                'required' => 'El campo nombre es obligatorio',
                'string' => 'El campo nombre debe ser un texto',
                'max' => 'El campo nombre no puede tener más de 255 caracteres',
            ],
            'surnames' => [
                'required' => 'El campo apellidos es obligatorio',
                'string' => 'El campo apellidos debe ser un texto',
                'max' => 'El campo apellidos no puede tener más de 255 caracteres',
            ],
            'email' => [
                'required' => 'El campo email es obligatorio',
                'string' => 'El campo email debe ser un texto',
                'email' => 'El campo email debe ser un email válido',
                'max' => 'El campo email no puede tener más de 255 caracteres',
                'unique' => 'El email ya existe en nuestra base de datos',
            ],
            'message' => [
                'required' => 'El campo mensaje es obligatorio',
                'string' => 'El campo mensaje debe ser un texto',
                'max' => 'El campo mensaje no puede tener más de 255 caracteres',
            ],
            'phone' => [
                'required' => 'El campo teléfono es obligatorio',
                'string' => 'El campo teléfono debe ser un texto',
                'max' => 'El campo teléfono no puede tener más de 255 caracteres',
            ],
        ];
    }
}