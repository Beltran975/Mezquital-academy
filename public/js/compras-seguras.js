document.addEventListener("DOMContentLoaded", function () {
    const btnReal = document.getElementById("btnReal");
    const btnFalsa = document.getElementById("btnFalsa");
    const resultado = document.getElementById("resultado");

    btnReal.addEventListener("click", function () {
        mostrarResultado(false); // Incorrecto
    });

    btnFalsa.addEventListener("click", function () {
        mostrarResultado(true); // Correcto
    });

    function mostrarResultado(esFalsa) {
        if (esFalsa) {
            resultado.innerHTML = "<strong>¡Correcto!:</strong> Esta tienda es falsa, no es segura para realizar compras.";
            resultado.classList.add("correcto");
            resultado.classList.remove("incorrecto");
        } else {
            resultado.innerHTML = "<strong>¡Incorrecto!:</strong> Esta es una tienda legítima y segura para comprar.";
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
        document.getElementById("siguienteBtnContainer").style.display = "block";
    }

    document.getElementById("btnSiguiente").addEventListener("click", function () {
        window.location.href = siguienteUrl;
});
});
