document.addEventListener("DOMContentLoaded", function () {
    const btnAtaque = document.getElementById("btnAtaque");
    const btnLegitimo = document.getElementById("btnLegitimo");
    const resultado = document.getElementById("resultado");

    btnAtaque.addEventListener("click", function () {
        mostrarResultado(true); // Correcto
    });

    btnLegitimo.addEventListener("click", function () {
        mostrarResultado(false); // Incorrecto
    });

    function mostrarResultado(esAtaque) {
        if (esAtaque) {
            resultado.innerHTML = `<strong>¡Correcto!:</strong> Este es un intento de phishing. Nunca ingreses tus credenciales en enlaces sospechosos.`;
            resultado.classList.add("correcto");
            resultado.classList.remove("incorrecto");
        } else {
            resultado.innerHTML = `<strong>¡Incorrecto!:</strong> Este es un intento de phishing disfrazado. Hay señales de alerta como un enlace sospechoso.`;
            resultado.classList.add("incorrecto");
            resultado.classList.remove("correcto");
        }

        resultado.style.display = "block";
        resultado.style.opacity = 0;
        resultado.style.transform = "translateY(-10px)";

        setTimeout(() => {
            resultado.style.opacity = 1;
            resultado.style.transform = "translateY(0)";
        }, 300);
    }
});
