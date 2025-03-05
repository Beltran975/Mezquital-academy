@extends('layouts.app')

@section('content')
    <section class="features">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="1000">Recursos de Ciberseguridad</h2>

            <div class="mb-4">
                <a href="{{ route('resources.index') }}" class="btn btn-secondary">Todos</a>
                <a href="{{ route('resources.principiante') }}" class="btn btn-secondary">Principiante</a>
                <a href="{{ route('resources.intermedio') }}" class="btn btn-secondary">Intermedio</a>
                <a href="{{ route('resources.avanzado') }}" class="btn btn-secondary">Avanzado</a>
            </div>

            <div class="feature-grid">
                @foreach ($resources as $resource)
                    <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
                        <h3>{{ $resource->title }}</h3>
                        <img src="{{ $resource->image }}" alt="Imagen descriptiva" class="img-fluid w-100"
                            style="height: 200px; object-fit: cover;">

                        <p>{{ $resource->description }}</p>
                        <p>
                            <small class="text-white">
                                Por {{ $resource->by }}
                            </small>
                        </p>
                        <a href="{{ $resource->src }}" target="_blank" class="btn btn-primary">Ver recurso</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
