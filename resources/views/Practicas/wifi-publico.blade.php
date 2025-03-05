@extends('layouts.app')

@section('title', 'Simulación de Uso de Wi-Fi Público - Mezquital Academy')

@section('content') <!-- Inicia la sección "content" -->
<section class="features">
<div class="container">
<section class="simulacion-container">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="1000">Ejercicio de Wi-Fi Público</h2>
        <p data-aos="fade-up" data-aos-duration="1200">
            Selecciona la opción correcta para protegerte al usar Wi-Fi en un café.
        </p>

        <div class="opciones" data-aos="fade-up" data-aos-duration="1200">
            <p><strong>¿Qué debes hacer para protegerte?</strong></p>
            <ul>
                <li><button class="choice-btn" id="btnEvitarBanca">Evitar realizar transacciones bancarias.</button></li>
                <li><button class="choice-btn" id="btnUsarVPN">Usar una red VPN segura.</button></li>
                <li><button class="choice-btn" id="btnAccederDirecto">Acceder a tus cuentas directamente.</button></li>
            </ul>
        </div>

        <div id="resultado" class="resultado"></div>
        <div id="siguienteBtnContainer" style="display: none; margin-top: 20px; text-align: center;">
    <button id="btnSiguiente" class="btn btn-primary" data-url="{{ route('inicioSimulaciones') }}">Finalizar</button>
</div>
<script>
    var siguienteUrl = "{{ route('inicioSimulaciones') }}";
</script>
    </div>      
</section>

<script src="{{ asset('js/wifi-publico.js') }}"></script>
@endsection <!-- Cierra la sección "content" -->