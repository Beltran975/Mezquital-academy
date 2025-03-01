<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Mezquital Academy')</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <!-- Archivo CSS general -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <!-- CSS específico para header y footer -->
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- AOS para animaciones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
  <!-- Incluye el header -->
  @include('partials.header')

  <!-- Contenido principal -->
  <main>
    @yield('content')
  </main>

  <!-- Incluye el footer -->
  @include('partials.footer')

  <!-- Scripts externos -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <!-- Scripts personalizados compilados -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
