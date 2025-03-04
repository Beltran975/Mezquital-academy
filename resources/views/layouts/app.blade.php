<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Mezquital Academy')</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <!-- Archivo CSS general -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <!-- CSS específico para header y footer -->
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <!-- AOS para animaciones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
  <!-- Incluye el header -->
  @include('partials.header')

  <!-- Contenido principal -->
  <main>
    @yield('content')
  </main>

  <!-- Incluye el footer -->
  @include('partials.footer')

  <!-- Burbuja de chat (Fuera del main para que siempre esté disponible) -->
  <div class="chat-bubble" id="chatBubble">💬</div>

  <!-- Ventana de chat -->
  <div class="chat-window" id="chatWindow">
    <div class="chat-header">Asistente AI</div>
    <div class="chat-body" id="chatBody"></div>
    <div class="chat-footer">
      <input type="text" id="chatInput" placeholder="Escribe un mensaje...">
      <button id="sendButton">➤</button>
    </div>
  </div>

 <!-- Estilos de la burbuja y el chat -->
<style>
  /* Burbuja de chat */
  .chat-bubble {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff; /* Color base */
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    z-index: 9999; /* Asegura que esté en primer plano */
    font-size: 1.5rem;
    transition: transform 0.3s ease;
  }

  /* Efecto al pasar el ratón sobre la burbuja */
  .chat-bubble:hover {
    transform: scale(1.1);
  }

  /* Ventana de chat */
  .chat-window {
    position: fixed;
    bottom: 20px; /* Ajustado para pegarlo más abajo */
    right: 20px; /* Pegado a la esquina derecha */
    width: 350px;
    height: 450px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    display: none;
    flex-direction: column;
    overflow: hidden;
    z-index: 9999;
    animation: slideIn 0.3s ease-out;
  }

  /* Animación de entrada de la ventana de chat */
  @keyframes slideIn {
    0% {
      transform: translateY(20px);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  /* Cabecera del chat */
  .chat-header {
    background: #007bff; /* Color base */
    color: white;
    padding: 15px;
    text-align: center;
    font-weight: bold;
    font-size: 1.1rem;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
  }

  /* Cuerpo del chat */
  .chat-body {
    flex: 1;
    overflow-y: auto;
    padding: 10px;
    background-color: #f5f5f5;
    font-size: 1rem;
    line-height: 1.5;
  }

  /* Pie de la ventana de chat */
  .chat-footer {
    display: flex;
    padding: 12px;
    background-color: #f9f9f9;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    border-top: 1px solid #ddd;
  }

  /* Estilo del campo de texto */
  .chat-footer input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 20px;
    font-size: 1rem;
    outline: none;
    transition: border-color 0.3s ease;
  }

  .chat-footer input:focus {
    border-color: #007bff; /* Color base */
  }

  /* Estilo del botón de envío */
  .chat-footer button {
    background: #007bff; /* Color base */
    color: white;
    border: none;
    padding: 10px 15px;
    margin-left: 10px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.2rem;
    transition: background-color 0.3s ease;
  }

  .chat-footer button:hover {
    background: #0056b3; /* Un tono más oscuro del color base */
  }
</style>



  <!-- Script de JavaScript -->
  <script>
    document.getElementById("chatBubble").addEventListener("click", function () {
        var chatWindow = document.getElementById("chatWindow");
        chatWindow.style.display = chatWindow.style.display === "none" ? "flex" : "none";
    });

    document.getElementById("sendButton").addEventListener("click", function () {
        sendMessage();
    });

    document.getElementById("chatInput").addEventListener("keypress", function (e) {
        if (e.key === "Enter") sendMessage();
    });

    function sendMessage() {
        let input = document.getElementById("chatInput");
        let message = input.value.trim();
        if (message === "") return;

        let chatBody = document.getElementById("chatBody");
        chatBody.innerHTML += `<div><strong>Tú:</strong> ${message}</div>`;
        input.value = "";

        fetch("/chat", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            body: JSON.stringify({ message: message }),
        })
        .then(response => response.json())
        .then(data => {
            let aiResponse = data.choices[0]?.message?.content || "Error al obtener respuesta.";
            chatBody.innerHTML += `<div><strong>AI:</strong> ${aiResponse}</div>`;
            chatBody.scrollTop = chatBody.scrollHeight;
        })
        .catch(error => console.error("Error:", error));
    }
  </script>

  <!-- Scripts externos -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <!-- Scripts personalizados compilados -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
