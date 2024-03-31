<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Define las reglas de validación para el formulario de inicio de sesión
        return [
            'username' => 'required', // El campo 'username' es requerido
            'password' => 'required' // El campo 'password' es requerido
        ];
    }

    // Obtiene las credenciales del formulario de inicio de sesión
    public function getCredentials(){
        
        // Obtiene el valor del campo 'username' del formulario
        $username = $this->get('username');
    
        // Verifica si el 'username' es un correo electrónico
        if ($this->isEmail($username)) {
            // Si es un correo electrónico, retorna las credenciales con 'username' y 'password'
            return [
                'username' => $username,
                'password' => $this->get('password')
            ];
        }
    
        // Si no es un correo electrónico, retorna las credenciales solo con 'username' y 'password'
        return $this->only('username', 'password');
    }
    
    // Verifica si el valor dado es un correo electrónico
    public function isEmail($value){
        
        // Obtiene una instancia de la fábrica de validación
        $factory = $this->container->make(ValidationFactory::class);
    
        // Realiza una validación para verificar si el 'value' es un correo electrónico
        return !$factory->make(['username' => $value], ['username' => 'email'])->fails();
    }
    
}
