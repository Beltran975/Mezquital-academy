<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
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
</body>
</html>
