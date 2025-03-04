@extends('layouts.app')

@section('title', 'Simulaciones de Ataques - Mezquital Academy')

@section('content')
<section class="hero">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="1000">Simulación de Ataques</h1>
        <p data-aos="fade-up" data-aos-duration="1200">
            Aprende sobre los ataques cibernéticos de manera interactiva. ¡Comienza ahora!
        </p>
    </div>
</section>

<section class="simulacion-container">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="1000">Ejercicio de Simulación</h2>
        <p data-aos="fade-up" data-aos-duration="1200">
            Identifica si este correo es legítimo o un intento de phishing.
        </p>

        <div class="fake-email" data-aos="fade-up" data-aos-duration="1200">
            <div class="fake-email-header">
                Notificación de Seguridad - [Banco Ficticio]
            </div>
            <div class="fake-email-body">
                <p>Estimado usuario,</p>
                <p>
                    Hemos detectado actividad sospechosa en su cuenta. Para evitar el bloqueo de su cuenta, 
                    haga clic en el siguiente enlace y verifique su información:
                </p>
                <a href="#" id="emailLink" class="email-btn">Verificar Cuenta</a>
            </div>
            <div class="fake-email-footer">
                © 2024 Banco Ficticio. Todos los derechos reservados.
            </div>
        </div>

        <div class="choice-buttons">
            <button class="choice-btn" id="btnAtaque">Es un ataque</button>
            <button class="choice-btn" id="btnLegitimo">Es legítimo</button>
        </div>

        <div id="resultado" class="resultado"></div>
    </div>      
</section>

<script src="{{ asset('js/simulacion.js') }}"></script>

@endsection
