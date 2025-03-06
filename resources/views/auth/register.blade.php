<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mezquital Academy</title>
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>

  <h1 class="page-title">Mezquital Academy</h1>

  <div class="login-container">
    <h1>Registrarse</h1>
    <br>
    <form action="{{ route('register.post') }}" method="POST">
      @csrf

      <label for="name">Nombre Completo</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}" required>
      
      <label for="email">Correo electrónico</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}" required>

      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" required>

      <label for="password_confirmation">Confirmar Contraseña</label>
      <input type="password" name="password_confirmation" id="password_confirmation" required>

      <div class="button-container">
        <button type="submit">Registrarse</button>
        <button type="button" onclick="window.location.href='{{ route('login') }}'">Ya tengo cuenta</button>
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
