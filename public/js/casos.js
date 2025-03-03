document.addEventListener('DOMContentLoaded', function() {
    // Filtros
    document.querySelectorAll('.filter-button').forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            // Muestra u oculta las tarjetas según el filtro
            document.querySelectorAll('.caso-card').forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });

            // Actualiza el estado activo de los botones de filtro
            document.querySelectorAll('.filter-button').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        });
    });
});