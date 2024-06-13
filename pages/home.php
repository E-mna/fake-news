<?php 
include './data/data.php';
?>

<div class="carousel-container">
    <!-- Début du carrousel -->
    <div class="carousel">
        <!-- Première diapositive, affichée par défaut -->
        <div class="carousel-item active">
            <img src="../assets/img/img1.webp" alt="Image 1">
            <div class="carousel-caption">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, voluptatem.</p>
            </div>
        </div>
        <!-- Deuxième diapositive -->
        <div class="carousel-item">
            <img src="../assets/img/img2.webp" alt="Image 2" >
            <div class="carousel-caption">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem, ab?</p>
            </div>
        </div>
        <!-- Troisième diapositive -->
        <div class="carousel-item">
            <img src="../assets/img/img3.jpeg" alt="Image 3">
            <div class="carousel-caption">
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, consectetur.</p>
            </div>
        </div>
        <!-- Bouton pour aller à la diapositive précédente -->
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <!-- Bouton pour aller à la diapositive suivante -->
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
    <!-- Fin du carrousel -->
</div>

<!-- Articles-->
<main class="main">
   
    <section class="articles">
    <?php 
        if (!empty($articles)) {
            foreach ($articles as $article) {
                include './template/_article.php';
            }
        } else {
            echo "Aucun article disponible.";
        }
        ?>
    </section>
</main>