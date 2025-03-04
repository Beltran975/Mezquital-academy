@extends('layouts.app')

@section('title', 'Herramientas Recomendadas - Mezquital Academy')

@section('content')
  <section class="tools-section">
      <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="1000">Herramientas Recomendadas</h2>

          <!-- Lista de herramientas -->
          <div class="tools-grid">
              <div class="tool-card full-width" data-aos="fade-up" data-aos-duration="1200">
                  <div class="tool-icon">
                      <i class="fas fa-shield-alt"></i> <!-- Icono de seguridad -->
                  </div>
                  <h3>VirusTotal</h3>
                  <p>
                      ¿Alguna vez te has preguntado si ese archivo o enlace sospechoso es seguro? No lo dejes al azar, súbelo a VirusTotal y deja que múltiples motores antivirus hagan el trabajo por ti.  
                  </p>
                  <div class="button-container">
                      <a href="https://www.virustotal.com" target="_blank" class="btn btn-primary">Visitar</a>
                  </div>
              </div>

              <div class="tool-card full-width" data-aos="fade-up" data-aos-duration="1400">
                  <div class="tool-icon">
                      <i class="fas fa-lock"></i> <!-- Icono de SSL -->
                  </div>
                  <h3>SSL Labs Server Test</h3>
                  <p>
                      ¿Crees que tu sitio web es realmente seguro? Pon a prueba su configuración SSL/TLS y descubre si existen vulnerabilidades que podrían poner en riesgo la privacidad de tus usuarios.  
                  </p>
                  <div class="button-container">
                      <a href="https://www.ssllabs.com/ssltest/" target="_blank" class="btn btn-primary">Visitar</a>
                  </div>
              </div>

              <div class="tool-card full-width" data-aos="fade-up" data-aos-duration="1600">
                  <div class="tool-icon">
                      <i class="fas fa-key"></i> <!-- Icono de contraseña -->
                  </div>
                  <h3>Kaspersky Password Checker</h3>
                  <p>
                      ¿Alguna vez te has preguntado qué tan segura es tu contraseña? ¿Cuánto tiempo le tomaría a un cibercriminal descifrarla? Averígualo ahora con esta herramienta y refuerza tu seguridad digital.  
                  </p>
                  <div class="button-container">
                      <a href="https://password.kaspersky.com" target="_blank" class="btn btn-primary">Visitar</a>
                  </div>
              </div>

              <div class="tool-card full-width" data-aos="fade-up" data-aos-duration="2000">
                  <div class="tool-icon">
                      <i class="fas fa-exclamation-triangle"></i> <!-- Icono de alerta -->
                  </div>
                  <h3>Have I Been Pwned</h3>
                  <p>
                      ¿Tu correo electrónico ha sido víctima de una filtración de datos? No esperes a que sea demasiado tarde. Verifica si tu cuenta ha sido comprometida y toma medidas para proteger tu información.  
                  </p>
                  <div class="button-container">
                      <a href="https://haveibeenpwned.com" target="_blank" class="btn btn-primary">Visitar</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
