@extends('layouts.app')

@section('title', 'Noticias de Ciberseguridad - Mezquital Academy')

@section('content')
    <div class="container">
        <h1>Resultado</h1>
        <p>Tu puntaje: {{ $puntaje }}%</p>
        <p>Respuestas correctas: {{ $respuestasCorrectas }} de 
            {{ isset($preguntas) && $preguntas !== null ? count($preguntas) : 0 }}
        </p>

        @if ($puntaje >= 80)
            <p>¡Excelente trabajo!</p>
        @elseif ($puntaje >= 50)
            <p>¡Bien hecho! Pero puedes mejorar.</p>
        @else
            <p>Necesitas estudiar más.</p>
        @endif
    </div>
@endsection
