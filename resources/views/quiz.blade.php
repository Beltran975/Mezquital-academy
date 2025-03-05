@extends('layouts.app')

@section('title', 'Simulaciones - Mezquital Academy')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div id="quizContainer" class="quiz-container">
                <form id="quizForm" action="{{ route('procesar-respuestas') }}" method="POST">
                    @csrf
                    <div id="questionBox" class="question-box"></div>
                    <button id="submitBtn" type="submit" style="display:none;">Enviar respuestas</button>
                </form>
                <div id="timer" class="timer"></div>
            </div>
        </div>
    </section>

    <style>
        .quiz-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #1a1a1a; /* Negro */
            padding: 20px;
            border-radius: 10px;
            position: relative;
            min-height: 100vh;
        }

        .question {
            background-color: #333; /* Gris oscuro */
            color: #fff; /* Blanco */
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
            width: 80%;
            max-width: 600px;
        }

        .answers {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            grid-template-areas: 
                "answer1 answer2"
                "answer3 answer3";
            width: 80%;
            max-width: 600px;
        }

        .answer-btn:nth-child(1) {
            grid-area: answer1;
            background-color: #1a1a1a; /* Negro */
            color: #00ff00; /* Verde */
            border: 2px solid #00ff00;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .answer-btn:nth-child(2) {
            grid-area: answer2;
            background-color: #1a1a1a; /* Negro */
            color: #00ff00; /* Verde */
            border: 2px solid #00ff00;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .answer-btn:nth-child(3) {
            grid-area: answer3;
            background-color: #1a1a1a; /* Negro */
            color: #00ff00; /* Verde */
            border: 2px solid #00ff00;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .answer-btn:hover {
            background-color: #00ff00; /* Verde */
            color: #1a1a1a; /* Negro */
        }

        .timer {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #333; /* Gris oscuro */
            color: #fff; /* Blanco */
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.5em;
            font-weight: bold;
        }
    </style>

    <script>
        const preguntas = <?php echo json_encode($preguntas); ?>; 

        let currentQuestionIndex = 0;
        let timerSeconds = 90;
        let timerInterval;

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
                    const formElement = document.getElementById("quizForm");
                    if (formElement) {
                        const lastAnswerIndex = document.querySelector('.answer-btn[data-index]:last-child').getAttribute('data-index');
                        const hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = `respuesta_${currentQuestionIndex}`;
                        hiddenInput.value = lastAnswerIndex;
                        formElement.appendChild(hiddenInput);
                        formElement.submit();
                    }
                } else {
                    timerSeconds--;
                    updateTimer();
                }
            }, 1000);
        }

        function showNextQuestion() {
            if (currentQuestionIndex < preguntas.length) {
                const question = preguntas[currentQuestionIndex];
                const questionBox = document.getElementById("questionBox");

                if (questionBox) {
                    questionBox.innerHTML = '';

                    const questionText = document.createElement('p');
                    questionText.classList.add('question');
                    questionText.textContent = question.pregunta;
                    questionBox.appendChild(questionText);

                    const answersDiv = document.createElement('div');
                    answersDiv.classList.add('answers');

                    question.respuestas.forEach((respuesta, index) => {
                        const button = document.createElement('button');
                        button.type = 'button';
                        button.classList.add('answer-btn');
                        button.textContent = respuesta.respuesta;
                        button.setAttribute('data-index', index);
                        button.onclick = () => nextQuestion(button);
                        answersDiv.appendChild(button);
                    });

                    questionBox.appendChild(answersDiv);
                }
            } else {
                const formElement = document.getElementById("quizForm");
                if (formElement) {
                    formElement.submit();
                }
            }
        }

        function nextQuestion(button) {
            const answerIndex = button.getAttribute('data-index');
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = `respuesta_${currentQuestionIndex}`;
            hiddenInput.value = answerIndex;
            const formElement = document.getElementById("quizForm");
            if (formElement) {
                formElement.appendChild(hiddenInput);
            }

            currentQuestionIndex++;
            showNextQuestion();
        }

        window.onload = () => {
            updateTimer();

            startTimer();
            showNextQuestion();
        };
    </script>
@endsection
