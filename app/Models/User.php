<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Cambia aquí
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable // Asegúrate de que extienda de Authenticatable
{
    use Notifiable;

    // Definir la tabla si es diferente del nombre de la clase (por ejemplo, 'users')
    protected $table = 'users';

    // Definir los campos que se pueden asignar masivamente
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Ocultar el campo de contraseña cuando se convierta a un arreglo o JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Definir los tipos de los atributos
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
