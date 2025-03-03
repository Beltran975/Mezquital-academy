<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('procesar-respuestas') }}" method="POST">
    @csrf
    @foreach($preguntas as $indexPregunta => $pregunta)
        <div>
            <p>{{ $pregunta['pregunta'] }}</p>
            @foreach($pregunta['respuestas'] as $indexRespuesta => $respuesta)
                <input type="radio" name="respuestas[{{ $indexPregunta }}]" value="{{ $indexRespuesta }}" id="respuesta-{{ $indexPregunta }}-{{ $indexRespuesta }}">
                <label for="respuesta-{{ $indexPregunta }}-{{ $indexRespuesta }}">{{ $respuesta['respuesta'] }}</label><br>
            @endforeach
        </div>
    @endforeach
    <button type="submit">Enviar respuestas</button>
</form>

</body>
</html>