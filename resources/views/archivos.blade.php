<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reconocimiento de Archivos Seguros y Maliciosos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Reconocimiento de Archivos Seguros y Maliciosos</h1>
    <form method="POST" action="{{ route('procesarArchivos') }}">
        @csrf
        <ul class="list-group">
            @foreach($archivos as $index => $archivo)
                <li class="list-group-item">
                    <label>
                        <input type="checkbox" name="archivos[{{ $index }}]" value="{{ $archivo['seguro'] ? 'seguro' : 'malicioso' }}">
                        {{ $archivo['nombre'] }} ({{ $archivo['extension'] }})
                    </label>
                </li>
            @endforeach
        </ul>
        <button type="submit" class="btn btn-primary mt-3">Verificar</button>
    </form>

    @if (isset($resultado))
        <div class="alert mt-3 {{ $resultado['tipo'] }}">
            {{ $resultado['mensaje'] }}
        </div>
    @endif
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
