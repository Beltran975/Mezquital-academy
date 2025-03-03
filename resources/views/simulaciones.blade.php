@extends('layouts.app')

@section('title', 'Simulaciones - Mezquital Academy')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 data-aos="fade-up" data-aos-duration="1000">Simulaciones y Entornos Virtuales</h1>
            <p data-aos="fade-up" data-aos-duration="1200">
                Elige una opción para comenzar tu aprendizaje práctico en ciberseguridad.
            </p>
        </div>
    </section>
    <section class="options">
        <section class="features" id="simulaciones">
                <div class="container">
                        <h2 data-aos="fade-up" data-aos-duration="1000">Lo que Aprenderás</h2>
                        <div class="feature-grid">
                                <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
                                        <i class="fas fa-laptop-code"></i>
                                        <h3>¿Cuanto Sabes de ciberseguridad?</h3>
                                        <p>Pon a prueba tus conocimientos de ciberseguridad y descubre cuánto sabes. ¡Haz el quiz ahora!</p>
                                </div>
                                <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
                                        <i class="fas fa-shield-alt"></i>
                                        <h3>Prácticas de Ciberseguridad</h3>
                                        <p>Realiza prácticas de ciberseguridad en un entorno seguro y controlado. ¡Comienza ahora!</p>
                                </div>
                        </div>
                        <div class="quiz-link" data-aos="fade-up" data-aos-duration="1400">
                                <a href="{{ route('mostrarQuiz') }}" class="btn btn-primary">Ir al Quiz</a>
                                <a href="{{ route('mostrarPracticas') }}" class="btn btn-secondary">Ir a las Prácticas</a>
                        </div>
                </div>
        </section>
    </section>
@endsection
