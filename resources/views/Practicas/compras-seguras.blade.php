@extends('layouts.app')

@section('title', 'Compras Seguras - Seguridad Online')

@section('content')
<section class="features">
<div class="container">
<section class="simulacion-container">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="1000">Ejercicio</h2>
        <p data-aos="fade-up" data-aos-duration="1200">Selecciona la tienda que NO creas que es segura para realizar compras.</p>

        <div class="tienda-options" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
            <div class="tienda" id="tienda1" data-tienda="real" data-aos="fade-up" data-aos-duration="1200" style="text-align: center; width: 45%;">
                <img src="{{ asset('images/tienda-real.jpg') }}" alt="Tienda Real" style="width: 100%; margin-bottom: 10px;">
                <button class="choice-btn" id="btnReal" style="display: block; margin: 10px auto 0;">Seleccionar</button>
            </div>
            <div class="tienda" id="tienda2" data-tienda="falsa" data-aos="fade-up" data-aos-duration="1200" style="text-align: center; width: 45%;">
                <img src="{{ asset('images/tienda-falsa.jpg') }}" alt="Tienda Falsa" style="width: 100%; margin-bottom: 10px;">
                <button class="choice-btn" id="btnFalsa" style="display: block; margin: 10px auto 0;">Seleccionar</button>
            </div>
        </div>

        <div id="resultado" class="resultado" style="display: none;"></div>
        <div id="siguienteBtnContainer" style="display: none; margin-top: 20px; text-align: center;">
            <button id="btnSiguiente" class="btn btn-primary" data-url="{{ route('practicas.wifi-publico') }}">Siguiente</button>
        </div>
        <script>
    var siguienteUrl = "{{ route('practicas.wifi-publico') }}";
</script>

    </div>      
</section>

<script src="{{ asset('js/compras-seguras.js') }}"></script>
@endsection
