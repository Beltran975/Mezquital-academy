@extends('layouts.app')

@section('title', 'Verificar Contraseña - Mezquital Academy')

@section('content')

  <section class="features" id="verificacion">
    <div class="container">
      <h2 data-aos="fade-up" data-aos-duration="1000">Verifica tu Contraseña</h2>
      <div class="feature-grid">
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
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
      </div>
    </div>
  </section>

@endsection