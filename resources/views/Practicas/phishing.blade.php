@extends('layouts.app')

@section('title', 'Detectando Phishing - Seguridad Online')

@section('content')

<section class="features">
<div class="container">
<section class="simulacion-container">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="1000">Ejercicio</h2>
        <p data-aos="fade-up" data-aos-duration="1200">Selecciona el correo que crees que no es un intento de phishing.</p>

        <style>
    .email img {
        width: 100%; 
        height: 300px; 
        object-fit: cover; 
        border-radius: 8px; 
    }
</style>

<div class="email-options" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
    <div class="email" id="email1" data-email="real" data-aos="fade-up" data-aos-duration="1200" style="text-align: center; width: 45%;">
        <img src="{{ asset('images/ciberseguridad/email_real.png') }}" alt="Correo Real" class="email-image">
        <button class="choice-btn" id="btnReal" style="display: block; margin: 10px auto 0;">Seleccionar</button>
    </div>
    <div class="email" id="email2" data-email="falso" data-aos="fade-up" data-aos-duration="1200" style="text-align: center; width: 45%;">
        <img src="{{ asset('images/ciberseguridad/email_falso.png') }}" alt="Correo Phishing" class="email-image">
        <button class="choice-btn" id="btnFalso" style="display: block; margin: 10px auto 0;">Seleccionar</button>
    </div>
</div>

        <div id="resultado" class="resultado" style="display: none;"></div>

        <div id="siguienteBtnContainer" style="display: none; margin-top: 20px; text-align: center;">
    <button id="btnSiguiente" class="btn btn-primary" data-url="{{ route('practicas.compras-seguras') }}">Siguiente</button>
</div>
<script>
    var siguienteUrl = "{{ route('practicas.compras-seguras') }}";
</script>
        
    </div>      
</section>

<script src="{{ asset('js/phishing.js') }}"></script>
@endsection
