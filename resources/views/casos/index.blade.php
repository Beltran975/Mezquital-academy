@extends('layouts.app')

@section('title', 'Casos Prácticos - Mezquital Academy')

@section('content')
  <section class="casos-section">
      <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="1000">Casos Prácticos</h2>

          <!-- Filtros -->
          <div class="filters" data-aos="fade-up" data-aos-duration="1200">
              <a href="#historicos" class="filter-button active" data-filter="all">Todos</a>
              <a href="#historicos" class="filter-button" data-filter="historicos">Históricos</a>
              <a href="#cotidianos" class="filter-button" data-filter="cotidianos">Cotidianos</a>
          </div>

          <!-- Casos Históricos -->
          <h3 class="subtitle" id="historicos" data-aos="fade-up" data-aos-duration="1400">Casos Históricos</h3>
          <div class="casos-grid">
              <!-- Caso 1: WannaCry -->
              <div class="caso-card historicos" data-aos="fade-up" data-aos-duration="1600">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Ataque WannaCry (2017)</h3>
                  <p>
                      Un ransomware que afectó a más de 200,000 computadoras en 150 países, cifrando archivos y exigiendo rescates en Bitcoin.
                  </p>
                  <div class="button-container">
                      <a href="https://www.bbc.com/news/technology-39901382" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Ataque WannaCry (2017)" 
                         data-description="Un ransomware que afectó a más de 200,000 computadoras en 150 países, cifrando archivos y exigiendo rescates en Bitcoin.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 2: Equifax -->
              <div class="caso-card historicos" data-aos="fade-up" data-aos-duration="1800">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Brecha de Equifax (2017)</h3>
                  <p>
                      Una filtración de datos expuso la información personal de 147 millones de personas, incluyendo números de seguridad social.
                  </p>
                  <div class="button-container">
                      <a href="https://www.nytimes.com/2017/09/07/business/equifax-cyberattack.html" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Brecha de Equifax (2017)" 
                         data-description="Una filtración de datos expuso la información personal de 147 millones de personas, incluyendo números de seguridad social.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 3: Stuxnet -->
              <div class="caso-card historicos" data-aos="fade-up" data-aos-duration="1600">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Stuxnet (2010)</h3>
                  <p>
                      Un gusano informático diseñado para atacar sistemas de control industrial, específicamente las centrifugadoras de enriquecimiento de uranio en Irán.
                  </p>
                  <div class="button-container">
                      <a href="https://www.wired.com/2014/11/countdown-to-zero-day-stuxnet/" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Stuxnet (2010)" 
                         data-description="Un gusano informático diseñado para atacar sistemas de control industrial, específicamente las centrifugadoras de enriquecimiento de uranio en Irán.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 4: Sony Pictures -->
              <div class="caso-card historicos" data-aos="fade-up" data-aos-duration="1800">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Ataque a Sony Pictures (2014)</h3>
                  <p>
                      Un ciberataque atribuido a Corea del Norte resultó en la filtración de películas no estrenadas, correos electrónicos y datos personales de empleados.
                  </p>
                  <div class="button-container">
                      <a href="https://www.bbc.com/news/technology-30505904" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Ataque a Sony Pictures (2014)" 
                         data-description="Un ciberataque atribuido a Corea del Norte resultó en la filtración de películas no estrenadas, correos electrónicos y datos personales de empleados.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 5: Yahoo Data Breach -->
              <div class="caso-card historicos" data-aos="fade-up" data-aos-duration="1600">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Yahoo Data Breach (2013-2014)</h3>
                  <p>
                      Dos brechas de seguridad expusieron los datos de más de 3,000 millones de cuentas de usuarios de Yahoo.
                  </p>
                  <div class="button-container">
                      <a href="https://www.theguardian.com/technology/2017/oct/03/yahoo-data-breach-3-billion-accounts" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Yahoo Data Breach (2013-2014)" 
                         data-description="Dos brechas de seguridad expusieron los datos de más de 3,000 millones de cuentas de usuarios de Yahoo.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 6: Colonial Pipeline -->
              <div class="caso-card historicos" data-aos="fade-up" data-aos-duration="1800">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Ataque a Colonial Pipeline (2021)</h3>
                  <p>
                      Un ataque de ransomware paralizó la mayor red de oleoductos de combustible en Estados Unidos, causando escasez de gasolina.
                  </p>
                  <div class="button-container">
                      <a href="https://www.cnn.com/2021/05/09/politics/colonial-pipeline-ransomware-attack/index.html" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Ataque a Colonial Pipeline (2021)" 
                         data-description="Un ataque de ransomware paralizó la mayor red de oleoductos de combustible en Estados Unidos, causando escasez de gasolina.">
                          Leer más
                      </a>
                  </div>
              </div>
          </div>

          <!-- Casos Cotidianos -->
          <h3 class="subtitle" id="cotidianos" data-aos="fade-up" data-aos-duration="2000">Casos Cotidianos</h3>
          <div class="casos-grid">
              <!-- Caso 1: Phishing -->
              <div class="caso-card cotidianos" data-aos="fade-up" data-aos-duration="2200">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Phishing: Enlaces Falsos</h3>
                  <p>
                      Un usuario hizo clic en un enlace de un correo falso y perdió el acceso a su cuenta bancaria.
                  </p>
                  <div class="button-container">
                      <a href="https://www.kaspersky.com/resource-center/threats/phishing" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Phishing: Enlaces Falsos" 
                         data-description="Un usuario hizo clic en un enlace de un correo falso y perdió el acceso a su cuenta bancaria.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 2: Apps Maliciosas -->
              <div class="caso-card cotidianos" data-aos="fade-up" data-aos-duration="2400">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Apps Maliciosas</h3>
                  <p>
                      Una persona descargó una app falsa que robó sus datos personales y accedió a su información financiera.
                  </p>
                  <div class="button-container">
                      <a href="https://www.forbes.com/sites/leemathews/2021/03/15/google-removes-malicious-android-apps-with-over-3-million-downloads/" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Apps Maliciosas" 
                         data-description="Una persona descargó una app falsa que robó sus datos personales y accedió a su información financiera.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 3: Wi-Fi Público Inseguro -->
              <div class="caso-card cotidianos" data-aos="fade-up" data-aos-duration="2200">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Wi-Fi Público Inseguro</h3>
                  <p>
                      Un usuario se conectó a una red Wi-Fi pública no segura y sufrió el robo de sus credenciales de acceso a cuentas importantes.
                  </p>
                  <div class="button-container">
                      <a href="https://us.norton.com/internetsecurity-privacy-risks-of-public-wi-fi.html" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Wi-Fi Público Inseguro" 
                         data-description="Un usuario se conectó a una red Wi-Fi pública no segura y sufrió el robo de sus credenciales de acceso a cuentas importantes.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 4: Robo de Identidad en Redes Sociales -->
              <div class="caso-card cotidianos" data-aos="fade-up" data-aos-duration="2400">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Robo de Identidad en Redes Sociales</h3>
                  <p>
                      Un usuario compartió demasiada información personal en redes sociales, lo que permitió a un atacante suplantar su identidad y realizar compras fraudulentas.
                  </p>
                  <div class="button-container">
                      <a href="https://www.consumer.ftc.gov/articles/0009-identity-theft" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Robo de Identidad en Redes Sociales" 
                         data-description="Un usuario compartió demasiada información personal en redes sociales, lo que permitió a un atacante suplantar su identidad y realizar compras fraudulentas.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 5: SIM Swapping -->
              <div class="caso-card cotidianos" data-aos="fade-up" data-aos-duration="2200">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Ataque de SIM Swapping</h3>
                  <p>
                      Un atacante convenció a una compañía telefónica para transferir el número de teléfono de una víctima a una tarjeta SIM bajo su control, permitiéndole acceder a cuentas bancarias.
                  </p>
                  <div class="button-container">
                      <a href="https://www.wired.com/story/sim-swapping-phone-theft/" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Ataque de SIM Swapping" 
                         data-description="Un atacante convenció a una compañía telefónica para transferir el número de teléfono de una víctima a una tarjeta SIM bajo su control, permitiéndole acceder a cuentas bancarias.">
                          Leer más
                      </a>
                  </div>
              </div>

              <!-- Caso 6: Fuga de Datos en la Nube -->
              <div class="caso-card cotidianos" data-aos="fade-up" data-aos-duration="2400">
                  <div class="caso-icon">
                      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1pxqjqps.json" background="transparent" speed="1" loop autoplay></lottie-player>
                  </div>
                  <h3>Fuga de Datos por Configuración Incorrecta en la Nube</h3>
                  <p>
                      Una empresa expuso datos sensibles de sus clientes debido a una configuración incorrecta en su almacenamiento en la nube.
                  </p>
                  <div class="button-container">
                      <a href="https://techcrunch.com/2021/01/22/cloud-misconfiguration-data-leak/" 
                         class="btn btn-primary leer-mas" 
                         target="_blank" 
                         data-title="Fuga de Datos por Configuración Incorrecta en la Nube" 
                         data-description="Una empresa expuso datos sensibles de sus clientes debido a una configuración incorrecta en su almacenamiento en la nube.">
                          Leer más
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection