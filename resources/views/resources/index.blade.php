<!-- resources.blade.php -->
<head>
    <link href="{{ asset('css/resources.css') }}" rel="stylesheet">
</head>

@extends('layouts.app')

@section('title', 'Recursos de Ciberseguridad - Mezquital Academy')

@section('content')

<!-- resources.blade.php -->
<section class="features">
    <h1 data-aos="fade-up" 
        data-aos-duration="1000" 
        class="section-title">
        Recursos Educativos
    </h1>
</section>


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
