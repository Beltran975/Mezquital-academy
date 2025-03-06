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
    <h1>Iniciar sesión</h1>
    <br>

    <form action="{{ route('login.post') }}" method="POST">
      @csrf

      <label for="email">Correo electrónico</label>
      <input type="email" name="email" id="email" required value="{{ old('email') }}">

      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" required>

      <div class="button-container">
        <button type="submit">Iniciar sesión</button>
        <button type="button" onclick="window.location.href='{{ route('register') }}'">Registrarse</button>
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
