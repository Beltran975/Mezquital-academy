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
    <section class="features">
    <div class="container">
    <!-- Sección de Simulaciones -->
    <section class="simulaciones-section">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="1000">Lo que Aprenderás</h2>
            <div class="feature-grid">
                <!-- Simulación 1: Quiz de Ciberseguridad -->
                <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
                    <i class="fas fa-laptop-code"></i>
                    <h3>¿Cuánto Sabes de Ciberseguridad?</h3>
                    <p>
                        Pon a prueba tus conocimientos de ciberseguridad y descubre cuánto sabes. ¡Haz el quiz ahora!
                    </p>
                    <div class="button-container">
                        <a href="{{ route('mostrarQuiz') }}" class="btn btn-primary">Ir al Quiz</a>
                    </div>
                </div>

                <!-- Simulación 2: Prácticas de Ciberseguridad -->
                <div class="feature-card" data-aos="fade-up" data-aos-duration="1400">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Prácticas de Ciberseguridad</h3>
                    <p>
                        Realiza prácticas de ciberseguridad en un entorno seguro y controlado. ¡Comienza ahora!
                    </p>
                    <div class="button-container">
                        <a href="{{ route('mostrarPracticas') }}" class="btn btn-primary">Ir a las Prácticas</a>
                    </div>
                </div>

                <!-- Simulación 3: Simulaciones de Ataques -->
                <div class="feature-card" data-aos="fade-up" data-aos-duration="1800">
                    <i class="fas fa-bug"></i>
                    <h3>Simulaciones de Ataques</h3>
                    <p>
                        Participa en simulaciones de ataques cibernéticos y aprende a defenderte.
                    </p>
                    <div class="button-container">
                        <a href="{{ route('mostrarAtaques') }}" class="btn btn-primary">Ir a Simulaciones</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</section>
@endsection