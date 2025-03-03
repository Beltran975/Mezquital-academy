@extends('layouts.app')

@section('title', 'Herramientas Recomendadas - Mezquital Academy')

@section('content')
  <section class="features">
      <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="1000">Herramientas Recomendadas</h2>

          <!-- Lista de herramientas -->
          <div class="feature-grid">
              <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
                  <i class="fas fa-shield-alt"></i> <!-- Icono de seguridad -->
                  <h3>VirusTotal</h3>
                  <p>
                      Analiza archivos y URLs en busca de malware y otros tipos de amenazas.
                  </p>
                  <div class="button-container">
                      <a href="https://www.virustotal.com" target="_blank" class="btn btn-primary">Visitar</a>
                  </div>
              </div>

              <div class="feature-card" data-aos="fade-up" data-aos-duration="1400">
                  <i class="fas fa-lock"></i> <!-- Icono de SSL -->
                  <h3>SSL Labs Server Test</h3>
                  <p>
                      Verifica la configuración SSL/TLS de tu servidor y detecta posibles vulnerabilidades.
                  </p>
                  <div class="button-container">
                      <a href="https://www.ssllabs.com/ssltest/" target="_blank" class="btn btn-primary">Visitar</a>
                  </div>
              </div>

              <div class="feature-card" data-aos="fade-up" data-aos-duration="1600">
                  <i class="fas fa-key"></i> <!-- Icono de contraseña -->
                  <h3>Kaspersky Password Checker</h3>
                  <p>
                      Comprueba la fortaleza de tus contraseñas y recibe recomendaciones para mejorarlas.
                  </p>
                  <div class="button-container">
                      <a href="https://password.kaspersky.com" target="_blank" class="btn btn-primary">Visitar</a>
                  </div>
              </div>

              <div class="feature-card" data-aos="fade-up" data-aos-duration="1800">
                  <i class="fas fa-wrench"></i> <!-- Icono de herramientas -->
                  <h3>Wappalyzer</h3>
                  <p>
                      Identifica las tecnologías utilizadas en cualquier sitio web.
                  </p>
                  <div class="button-container">
                      <a href="https://www.wappalyzer.com" target="_blank" class="btn btn-primary">Visitar</a>
                  </div>
              </div>

              <div class="feature-card" data-aos="fade-up" data-aos-duration="2000">
                  <i class="fas fa-exclamation-triangle"></i> <!-- Icono de alerta -->
                  <h3>Have I Been Pwned</h3>
                  <p>
                      Verifica si tus cuentas han sido comprometidas en filtraciones de datos.
                  </p>
                  <div class="button-container">
                      <a href="https://haveibeenpwned.com" target="_blank" class="btn btn-primary">Visitar</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection