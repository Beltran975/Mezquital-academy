document.addEventListener("DOMContentLoaded", function () {
    const btnReal = document.getElementById("btnReal");
    const btnFalso = document.getElementById("btnFalso");
    const resultado = document.getElementById("resultado");

    btnReal.addEventListener("click", function () {
        mostrarResultado(true); 
    });

    btnFalso.addEventListener("click", function () {
        mostrarResultado(false); 
    });

    function mostrarResultado(esCorrecto) {
        if (esCorrecto) {
            resultado.innerHTML = `<strong>¡Correcto!:</strong> Este es un correo sin phishing.`;
            resultado.classList.add("correcto");
            resultado.classList.remove("incorrecto");
        } else {
            resultado.innerHTML = `<strong>¡Error!:</strong> Este es un ejemplo de phishing.`;
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
