// Initialise l'index 
let currentIndex = 0;

// Fonction pour afficher une diapositive spécifique
function showSlide(index) {
    // Sélectionne toutes les diapositives
    const slides = document.querySelectorAll('.carousel-item');
    // Enlève la classe 'active' de la diapositive actuellement affichée
    slides[currentIndex].classList.remove('active');
    // Calcule le nouvel index en utilisant le modulo pour boucler
    currentIndex = (index + slides.length) % slides.length;
    // Ajoute la classe 'active' à la nouvelle diapositive
    slides[currentIndex].classList.add('active');
}

// Fonction pour changer de diapositive en avant ou en arrière
function changeSlide(step) {
    // Affiche la diapositive suivante ou précédente
    showSlide(currentIndex + step);
}

// Appel initial pour afficher la première diapositive
showSlide(currentIndex);
