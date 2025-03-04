@extends('layouts.app')

@section('title', 'Noticias de Ciberseguridad - Mezquital Academy')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
</head>
<body>

<div id="quizContainer">
    <form id="quizForm" action="{{ route('procesar-respuestas') }}" method="POST">
        @csrf
        <div id="questionBox"></div>
        <button id="submitBtn" type="submit" style="display:none;">Enviar respuestas</button>
    </form>
    <div id="timer"></div>
</div>

<script>
    const preguntas = <?php echo json_encode($preguntas); ?>; 

    let currentQuestionIndex = 0;
    let timerSeconds = 90
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

</body>
</html>