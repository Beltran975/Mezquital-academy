@extends('layouts.app')

@section('title', 'Simulaciones - Mezquital Academy')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
        <div id="quizContainer" class="quiz-container">
            <form id="quizForm">
            @csrf
                <div id="questionBox" class="question-box"></div>
                <button id="submitBtn" type="button" style="display:none;">Enviar respuestas</button>
            </form>
            <div id="timer" class="timer"></div>
            </div>

            <!-- Contenedor de resultados oculto al inicio -->
            <div id="resultContainer" class="result-container" style="display: none;">
                <h2>Resultados del Quiz</h2>
                <p>Respuestas correctas: <span id="correctAnswers">0</span> de <span id="totalQuestions">0</span></p>
                <div class="progress-bar">
                    <div id="progressFill" class="progress-fill"></div>
                </div>
                <p id="resultMessage"></p>
                <button onclick="location.reload()" class="restart-btn">Reintentar</button>
            </div>
        </div>
    </section>

    <script>
document.addEventListener("DOMContentLoaded", function () {
    const preguntas = <?php echo json_encode($preguntas); ?>;
    let currentQuestionIndex = 0;
    let timerSeconds = 90;
    let timerInterval;
    let correctAnswers = 0;

    function updateTimer() {
        const minutes = Math.floor(timerSeconds / 60);
        const seconds = timerSeconds % 60;
        const timerElement = document.getElementById("timer");

        if (timerElement) {
            timerElement.innerText = `Tiempo restante: ${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }
    }

    function startTimer() {
        timerInterval = setInterval(() => {
            if (timerSeconds <= 0) {
                clearInterval(timerInterval);
                showResults();
            } else {
                timerSeconds--;
                updateTimer();
            }
        }, 1000);
    }

    function showNextQuestion() {
        const questionBox = document.getElementById("questionBox");

        if (currentQuestionIndex < preguntas.length) {
            const question = preguntas[currentQuestionIndex];

            questionBox.innerHTML = `
                <p class="question">${question.pregunta}</p>
                <div class="answers">
                    ${question.respuestas.map((respuesta, index) => `
                        <button type="button" class="answer-btn" data-index="${index}" data-correct="${respuesta.correcta}">${respuesta.respuesta}</button>
                    `).join('')}
                </div>
            `;

            document.querySelectorAll(".answer-btn").forEach(button => {
                button.addEventListener("click", () => nextQuestion(button));
            });
        } else {
            showResults();
        }
    }

    function nextQuestion(button) {
        const answerIndex = button.getAttribute("data-index");
        const isCorrect = button.getAttribute("data-correct") === "true";

        if (isCorrect) correctAnswers++;

        currentQuestionIndex++;
        showNextQuestion();
    }

    function showResults() {
        clearInterval(timerInterval);
        document.getElementById("quizContainer").style.display = "none";
        document.getElementById("resultContainer").style.display = "block";

        document.getElementById("correctAnswers").innerText = correctAnswers;
        document.getElementById("totalQuestions").innerText = preguntas.length;

        let porcentaje = (correctAnswers / preguntas.length) * 100;
        document.getElementById("progressFill").style.width = porcentaje + "%";

        let mensaje = "";
        if (porcentaje >= 80) {
            mensaje = "¡Excelente trabajo! 🚀";
        } else if (porcentaje >= 50) {
            mensaje = "¡Bien hecho! Pero aún puedes mejorar. 💪";
        } else {
            mensaje = "Necesitas estudiar más. 📚";
        }

        document.getElementById("resultMessage").innerText = mensaje;
    }

    document.getElementById("quizContainer").innerHTML = `
        <button id="startQuizBtn" class="start-btn">Iniciar Quiz</button>
    `;

    document.getElementById("startQuizBtn").addEventListener("click", function () {
        document.getElementById("quizContainer").innerHTML = `
            <form id="quizForm">
                <div id="questionBox" class="question-box"></div>
                <button id="submitBtn" type="button" style="display:none;">Enviar respuestas</button>
            </form>
            <div id="timer" class="timer"></div>
        `;

        updateTimer();
        startTimer();
        showNextQuestion();
    });
});
    </script>
@endsection
