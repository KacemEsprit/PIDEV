document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour mettre à jour l'affichage du like
    function updateLikeButton(button, data) {
        const icon = button.querySelector('i');
        const count = button.querySelector('.like-count');
        
        if (data.liked) {
            icon.classList.remove('far');
            icon.classList.add('fas');
            button.classList.add('liked');
        } else {
            icon.classList.remove('fas');
            icon.classList.add('far');
            button.classList.remove('liked');
        }
        
        count.textContent = data.likeCount;
    }

    // Gestion des likes pour les publications
    document.querySelectorAll('.like-publication-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const publicationId = this.dataset.publicationId;

            fetch(`/like/publication/${publicationId}`, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => updateLikeButton(this, data))
            .catch(error => console.error('Error:', error));
        });
    });

    // Gestion des likes pour les commentaires
    document.querySelectorAll('.like-comment-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const commentId = this.dataset.commentId;

            fetch(`/like/comment/${commentId}`, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => updateLikeButton(this, data))
            .catch(error => console.error('Error:', error));
        });
    });
});
