<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">Mezquital Academy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::routeIs('inicioSimulaciones') ? 'active' : '' }}" 
             href="{{ route('inicioSimulaciones') }}">Simulaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::routeIs('casos.index') ? 'active' : '' }}" 
             href="{{ route('casos.index') }}">Casos Prácticos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::routeIs('tools.index') ? 'active' : '' }}" 
             href="{{ route('tools.index') }}">Herramientas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::routeIs('news.index') ? 'active' : '' }}" 
             href="{{ route('news.index') }}">Noticias</a>
        </li>

        @auth
          <!-- Usuario autenticado -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item {{ Request::routeIs('profile.edit') ? 'active' : '' }}" 
                   href="{{ route('profile.edit') }}">Editar perfil</a>
              </li>
              <li>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item">Cerrar sesión</button>
                </form>
              </li>
            </ul>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
