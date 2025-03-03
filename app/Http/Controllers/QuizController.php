<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function mostrarQuiz()
    {
        // Cargar preguntas desde el archivo JSON
        $preguntas = json_decode(file_get_contents(storage_path('app/preguntas.json')), true);

        // Verificar si el archivo JSON se cargó correctamente
        if ($preguntas === null) {
            return response()->json(['error' => 'No se pudo cargar el archivo de preguntas o el formato es incorrecto.'], 500);
        }

        // Enviar las preguntas a la vista
        return view('quiz', compact('preguntas'));
    }

    public function procesarRespuestas(Request $request)
    {
        // Cargar preguntas desde el archivo JSON
        $preguntas = json_decode(file_get_contents(storage_path('app/preguntas.json')), true);

        // Verificar si el archivo JSON se cargó correctamente
        if ($preguntas === null) {
            return response()->json(['error' => 'No se pudo cargar el archivo de preguntas o el formato es incorrecto.'], 500);
        }

        // Inicializar el contador de respuestas correctas
        $respuestasCorrectas = 0;

        // Evaluar las respuestas
        foreach ($request->input('respuestas', []) as $indexPregunta => $respuestaSeleccionada) {
            // Verificar si la respuesta seleccionada es válida
            if (isset($preguntas[$indexPregunta]['respuestas'][$respuestaSeleccionada])) {
                $respuestaCorrecta = $preguntas[$indexPregunta]['respuestas'][$respuestaSeleccionada]['correcta'];
                if ($respuestaCorrecta) {
                    $respuestasCorrectas++;
                }
            }
        }

        // Verificar si hay preguntas para calcular el puntaje
        if (count($preguntas) === 0) {
            return response()->json(['error' => 'No hay preguntas disponibles para procesar.'], 500);
        }

        // Calcular el puntaje
        $puntaje = ($respuestasCorrectas / count($preguntas)) * 100;

        // Pasar también las preguntas a la vista de resultados
        return view('resultado', compact('puntaje', 'respuestasCorrectas', 'preguntas'));
    }
}

