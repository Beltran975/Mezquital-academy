<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class QuizController extends Controller
{
    public function mostrarQuiz()
    {
        $preguntas = json_decode(file_get_contents(storage_path('app/preguntas.json')), true);

        if ($preguntas === null) {
            return response()->json(['error' => 'No se pudo cargar el archivo de preguntas o el formato es incorrecto.'], 500);
        }

        return view('quiz', compact('preguntas'));
    }

    public function procesarRespuestas(Request $request)
    {
        $preguntas = json_decode(file_get_contents(storage_path('app/preguntas.json')), true);

        if ($preguntas === null) {
            return response()->json(['error' => 'No se pudo cargar el archivo de preguntas o el formato es incorrecto.'], 500);
        }

        $respuestasCorrectas = 0;

        foreach ($request->input('respuestas', []) as $indexPregunta => $respuestaSeleccionada) {

            if (isset($preguntas[$indexPregunta]['respuestas'][$respuestaSeleccionada])) {
                $respuestaCorrecta = $preguntas[$indexPregunta]['respuestas'][$respuestaSeleccionada]['correcta'];
                if ($respuestaCorrecta) {
                    $respuestasCorrectas++;
                }
            }
        }

        if (count($preguntas) === 0) {
            return response()->json(['error' => 'No hay preguntas disponibles para procesar.'], 500);
        }

        $puntaje = ($respuestasCorrectas / count($preguntas)) * 100;

        return View::make('resultado', compact('puntaje', 'respuestasCorrectas', 'preguntas'));
        return view('resultado', compact('puntaje', 'respuestasCorrectas', 'preguntas'));
    }
}

