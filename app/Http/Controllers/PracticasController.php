<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticasController extends Controller
{
    public function verificarContrasena(Request $request)
    {
        $password = $request->input('password');

        // Regla 1: Contraseña de al menos 12 caracteres
        $longitudValida = strlen($password) >= 12;

        // Regla 2: Debe contener al menos una mayúscula, minúscula, número y símbolo
        $contenidoValido = preg_match('/[A-Z]/', $password) && 
                           preg_match('/[a-z]/', $password) &&
                           preg_match('/[0-9]/', $password) &&
                           preg_match('/[\W_]/', $password);

        // Verificar si ambas reglas son válidas
        if ($longitudValida && $contenidoValido) {
            $mensaje = [
                'mensaje' => 'La contraseña es segura.',
                'tipo' => 'alert-success'
            ];
        } else {
            $mensaje = [
                'mensaje' => 'La contraseña no es segura. Asegúrese de que tenga al menos 12 caracteres, incluya letras mayúsculas, minúsculas, números y símbolos.',
                'tipo' => 'alert-danger'
            ];
        }

        return view('practicas.generarContrasena', compact('mensaje'));
    }

    public function mostrarArchivos()
    {
        // Lista de archivos con sus extensiones
        $archivos = [
            ['nombre' => 'documento.pdf', 'extension' => 'pdf', 'seguro' => true],
            ['nombre' => 'virus.exe', 'extension' => 'exe', 'seguro' => false],
            ['nombre' => 'imagen.jpg', 'extension' => 'jpg', 'seguro' => true],
            ['nombre' => 'malware.zip', 'extension' => 'zip', 'seguro' => false],
            ['nombre' => 'nota.txt', 'extension' => 'txt', 'seguro' => true],
        ];

        // Almacenar los archivos en la sesión
        session(['archivos' => $archivos]);

        return view('practicas.archivos', compact('archivos'));
    }

    public function procesarArchivos(Request $request)
    {
        // Recuperar los archivos de la sesión
        $archivos = session('archivos', []); // Si no existen archivos en la sesión, se devuelve un arreglo vacío

        $archivosSeleccionados = $request->input('archivos');
        $resultado = ['mensaje' => '', 'tipo' => 'alert-danger'];

        // Validar si el usuario identificó correctamente los archivos maliciosos
        $correcto = true;
        foreach ($archivosSeleccionados as $indice => $seleccion) {
            // Verificar que el archivo sea marcado correctamente
            if (($seleccion == 'seguro' && !$archivos[$indice]['seguro']) || ($seleccion == 'malicioso' && $archivos[$indice]['seguro'])) {
                $correcto = false;
            }
        }

        if ($correcto) {
            $resultado['mensaje'] = '¡Has identificado correctamente los archivos!';
            $resultado['tipo'] = 'alert-success';
        } else {
            $resultado['mensaje'] = 'Algunos archivos fueron identificados incorrectamente. Intenta de nuevo.';
        }

        return view('practicas.archivos', compact('resultado', 'archivos'));
    }
}
