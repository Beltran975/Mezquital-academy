<!-- resources.blade.php -->
<head>
    <link href="{{ asset('css/resources.css') }}" rel="stylesheet">
</head>

@extends('layouts.app')

@section('title', 'Educacion de Ciberseguridad - Mezquital Academy')

@section('content')
    <!-- Hero Section para Herramientas -->
    <section class="hero">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="1000">Recursos educativos</h1>
        <p data-aos="fade-up" data-aos-duration="1200">
            Explora y conoce sobre los mejores cursos que el mercado tiene para ofrecer para tu educacion en ciberseguridad.
        </p>
    </div>
</section>
<section class="tools-section">
      <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="1000">Recursos Educativos</h2>
        Recursos Educativos
        <!-- Botones de Categorías -->
        <div class="btn-group-custom">
            <a href="{{ route('resources.index') }}" class="btn btn-custom-blue {{ Request::is('resources') ? 'active' : '' }}">Todos</a>
            <a href="{{ route('resources.principiante') }}" class="btn btn-custom-blue {{ Request::is('resources/principiante') ? 'active' : '' }}">Principiante</a>
            <a href="{{ route('resources.intermedio') }}" class="btn btn-custom-blue {{ Request::is('resources/intermedio') ? 'active' : '' }}">Intermedio</a>
            <a href="{{ route('resources.avanzado') }}" class="btn btn-custom-blue {{ Request::is('resources/avanzado') ? 'active' : '' }}">Avanzado</a>
        </div>

        <!-- Lista de Recursos -->
        <div class="container">
            <div class="feature-grid">
                @foreach ($resources as $resource)
                    <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
                        <h3 class="resource-title">{{ $resource->title }}</h3>
                        <img src="{{ $resource->image }}" alt="Imagen descriptiva" class="resource-image">
                        <p class="resource-description">{{ $resource->description }}</p>
                        <p>
                            <small class="resource-author">Por {{ $resource->by }}</small>
                        </p>
                        <a href="{{ $resource->src }}" target="_blank" class="btn btn-primary">Ver recurso</a>
                    </div>
                @endforeach
    </div>
</div>
@endsection
