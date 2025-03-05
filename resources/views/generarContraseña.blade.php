<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Contraseña Segura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Verificar Contraseña Segura</h1>
    <form method="POST" action="{{ route('verificarContrasena') }}">
        @csrf
        <div class="mb-3">
            <label for="password" class="form-label">Ingrese una Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Verificar</button>
    </form>

    @if (isset($mensaje))
        <div class="alert mt-3 {{ $mensaje['tipo'] }}">
            {{ $mensaje['mensaje'] }}
        </div>
    @endif
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
