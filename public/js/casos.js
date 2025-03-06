document.addEventListener('DOMContentLoaded', function() {
  
    document.querySelectorAll('.filter-button').forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

           
            document.querySelectorAll('.caso-card').forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });

            document.querySelectorAll('.filter-button').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        });
    });
});