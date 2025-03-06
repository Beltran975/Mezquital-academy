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

  @include('partials.header')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <div class="chat-bubble" id="chatBubble">💬</div>

  <div class="chat-window" id="chatWindow">
    <div class="chat-header">
      <span>Asistente AI</span>
      <button class="close-chat" id="closeChat">X</button>
    </div>
    <div class="chat-body" id="chatBody"></div>
    <div class="chat-footer">
      <input type="text" id="chatInput" placeholder="Escribe un mensaje...">
      <button id="sendButton">➤</button>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const chatWindow = document.getElementById("chatWindow");
      const chatBubble = document.getElementById("chatBubble");
      const closeChatButton = document.getElementById("closeChat");

      chatWindow.style.display = "none";

      chatBubble.addEventListener("click", function () {
        const isVisible = chatWindow.style.display === "flex"; 
        chatWindow.style.display = isVisible ? "none" : "flex";
      });

      closeChatButton.addEventListener("click", function () {
        chatWindow.style.display = "none";
      });
    });

    document.getElementById("sendButton").addEventListener("click", sendMessage);
    document.getElementById("chatInput").addEventListener("keypress", function (e) {
        if (e.key === "Enter") sendMessage();
    });

    function sendMessage() {
        let input = document.getElementById("chatInput");
        let message = input.value.trim();
        if (message === "") return;

        let chatBody = document.getElementById("chatBody");

        chatBody.innerHTML += `<div class="message user-message"><strong>Tú:</strong> ${message}</div>`;
        input.value = "";

        chatBody.innerHTML += `<div class="message ai-message"><strong>AI:</strong> <i>Escribiendo...</i></div>`;
        chatBody.scrollTop = chatBody.scrollHeight;

        const prompt = `${message} Responde de manera breve, limitando tu respuesta a un máximo de 200 palabras.`;

        fetch("/ask", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            body: JSON.stringify({ prompt: prompt })
        })
        .then(response => response.json())
        .then(data => {
            let aiResponse = data.answer || "Error al obtener respuesta.";

            let aiMessages = document.querySelectorAll('.ai-message i');
            aiMessages.forEach(msg => msg.parentElement.innerHTML = `<strong>AI:</strong> ${processText(aiResponse)}`);

            chatBody.scrollTop = chatBody.scrollHeight;
        })
        .catch(error => console.error("Error:", error));
    }

    function processText(text) {

        text = text.replace(/(#{1,6})\s*(.*)/g, (match, hashes, header) => {
            const level = hashes.length; 
            return `<h${level}>${header}</h${level}>`;
        });

        text = text.replace(/(\*\*|__)(.*?)\1/g, '<strong>$2</strong>');

        text = text.replace(/(^|\n)[*-]\s*(.*)/g, '<ul><li>$2</li></ul>');

        text = text.replace(/\n/g, '<br>');

        return text;
    }
  </script>

  <style>
 
    .chat-bubble {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #007bff; 
      color: white;
      padding: 15px;
      border-radius: 50%;
      cursor: pointer;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
      z-index: 9999; 
      font-size: 1.5rem;
      transition: transform 0.3s ease;
    }

    .chat-bubble:hover {
      transform: scale(1.1);
    }

    .chat-window {
      position: fixed;
      bottom: 20px; 
      right: 20px; 
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

    .chat-header {
      background: #007bff; 
      color: white;
      padding: 15px;
      text-align: center;
      font-weight: bold;
      font-size: 1.1rem;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      position: relative;
    }

    .close-chat {
      position: absolute;
      top: 10px;
      right: 10px;
      background: transparent;
      color: white;
      border: none;
      font-size: 1.5rem;
      cursor: pointer;
    }

    .chat-body {
      flex: 1;
      overflow-y: auto;
      padding: 10px;
      background-color: #f5f5f5;
      font-size: 1rem;
      line-height: 1.5;
      color: black; 
    }

    .message {
      padding: 5px 10px;
      margin-bottom: 10px;
      border-radius: 10px;
      background-color: #e1e1e1;
      max-width: 80%;
    }

    .user-message {
      background-color: #007bff; 
      color: white;
      text-align: right;
      margin-left: auto;
      border-radius: 10px;
    }

    .ai-message {
      background-color: #f1f1f1; 
      color: black;
      text-align: left;
    }

    .chat-footer {
      display: flex;
      padding: 12px;
      background-color: #f9f9f9;
      border-bottom-left-radius: 12px;
      border-bottom-right-radius: 12px;
      border-top: 1px solid #ddd;
    }

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
      border-color: #007bff; 
    }

    .chat-footer button {
      background: #007bff; 
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
      background: #0056b3; 
    }
  </style>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
