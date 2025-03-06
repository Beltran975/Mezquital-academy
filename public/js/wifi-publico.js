document.addEventListener("DOMContentLoaded", function () {
    const btnEvitarBanca = document.getElementById("btnEvitarBanca");
    const btnUsarVPN = document.getElementById("btnUsarVPN");
    const btnAccederDirecto = document.getElementById("btnAccederDirecto");
    const resultado = document.getElementById("resultado");

    btnEvitarBanca.addEventListener("click", function () {
        mostrarResultado(true); 
    });

    btnUsarVPN.addEventListener("click", function () {
        mostrarResultado(true); 
    });

    btnAccederDirecto.addEventListener("click", function () {
        mostrarResultado(false); 
    });

    function mostrarResultado(esCorrecto) {
        if (esCorrecto) {
            resultado.innerHTML = "<strong>¡Correcto!:</strong> Usar una VPN o evitar realizar transacciones es lo mejor en redes Wi-Fi públicas.";
            resultado.classList.add("correcto");
            resultado.classList.remove("incorrecto");
        } else {
            resultado.innerHTML = "<strong>¡Incorrecto!:</strong> No es seguro acceder a tus cuentas directamente en redes Wi-Fi públicas.";
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
