@extends('layouts.app')

@section('title', 'Inicio - Mezquital Academy')

@section('content')
  <section class="hero">
    <div class="container">
      <h1 data-aos="fade-up" data-aos-duration="1000">Domina la Ciberseguridad</h1>
      <p data-aos="fade-up" data-aos-duration="1200">
        Aprende a protegerte frente a amenazas digitales con simulaciones y casos prácticos reales.
      </p>
    </div>
  </section>
  
  <section class="features" id="simulaciones">
    <div class="container">
      <h2 data-aos="fade-up" data-aos-duration="1000">Lo que Aprenderás</h2>
      <div class="feature-grid">
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
          <i class="fas fa-laptop-code"></i>
          <h3>Simulaciones Reales</h3>
          <p>Participa en escenarios de ataque cibernético y pon a prueba tus habilidades en tiempo real.</p>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1400">
          <i class="fas fa-user-shield"></i>
          <h3>Casos Prácticos</h3>
          <p>Estudia incidentes cibernéticos reales y aprende de ellos para mejorar tu seguridad digital.</p>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1600">
          <i class="fas fa-book-reader"></i>
          <h3>Recursos Educativos</h3>
          <p>Accede a materiales educativos sobre protocolos de seguridad, técnicas de protección y mucho más.</p>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-duration="1800">
          <i class="fas fa-tools"></i>
          <h3>Herramientas</h3>
          <p>Explora herramientas de análisis forense, detección de vulnerabilidades y más.</p>
        </div>
        <div class="feature-card" data-aos="fade-up" data-aos-duration="2000">
          <i class="fas fa-newspaper"></i>
          <h3>Noticias</h3>
          <p>Mantente informado con las últimas tendencias y amenazas en el mundo de la ciberseguridad.</p>
        </div>
      </div>
    </div>
  </section>

@endsection
