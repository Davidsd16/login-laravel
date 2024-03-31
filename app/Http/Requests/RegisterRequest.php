<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtiene las reglas de validación que se aplican a la solicitud.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string> Un array que contiene las reglas de validación.
     */
    public function rules(): array
    {
        return [
            'email' => 'required|unique:users,email', // Campo 'email' requerido y debe ser único en la tabla 'users'
            'username' => 'required|unique:users,username', // Campo 'username' requerido y debe ser único en la tabla 'users'
            'password' => 'required|min:8', // Campo 'password' requerido y debe tener al menos 8 caracteres
            'password_confirmation' => 'required|same:password', // Campo 'password_confirmation' requerido y debe ser igual al campo 'password'
        ];
    }
    
}
