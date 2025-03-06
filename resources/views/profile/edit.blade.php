<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Perfil - Mezquital Academy</title>
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>

  <h1 class="page-title">Mezquital Academy</h1>

  <div class="login-container">
    <h1>Editar Perfil</h1>
    <br>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" onsubmit="return validarPassword()">
      @csrf
      @method('PUT')

      <label for="name">Nombre</label>
      <input type="text" name="name" id="name" required value="{{ old('name', $user->name) }}">

      <label for="email">Correo electrónico</label>
      <input type="email" name="email" id="email" value="{{ $user->email }}" readonly>

      <label for="password">Nueva Contraseña (opcional)</label>
      <input type="password" name="password" id="password" onkeyup="verificarSeguridad()">

      <label for="password_confirmation">Confirmar Contraseña</label>
      <input type="password" name="password_confirmation" id="password_confirmation">

      <div id="password-strength"></div>

      <div class="button-container">
        <button type="submit">Actualizar Perfil</button>
        <button type="button" onclick="window.location.href='{{ route('home') }}'">Cancelar</button>
      </div>

      @if ($errors->any())
        <div class="error-message">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

    </form>
  </div>

</body>
</html>
