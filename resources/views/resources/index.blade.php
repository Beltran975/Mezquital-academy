@extends('layouts.app')

@section('content')
    <section class="features">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="1000">Recursos de Ciberseguridad</h2>

            <div class="feature-grid">
                @foreach ($resources as $resource)
                    <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
                        {{-- Seleccionar el ícono según el tipo de recurso --}}
                            <i class="fas fa-graduation-cap"></i>


                        <h3>{{ $resource->title }}</h3>
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
