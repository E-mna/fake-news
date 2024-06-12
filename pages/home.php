<?php 
include './data/data.php';
?>
 
<div class="verticalNavbar">
    <input id="verticalMenu-toggle" type="checkbox">
    <label class="verticalMenu-container" for="verticalMenu-toggle">
        &#187;
    </label>

    <ul>
        <li><a href="#">Environnement</a></li>
        <li><a href="#">Politique</a></li>
        <li><a href="#">Sport</a></li>
        <li><a href="#">Économie</a></li>
        <li><a href="#">Société</a></li>
    </ul>
</div>

<main class="main">
    <div class="search">
        <label for="search">Saisissez votre recherche</label>
        <input type="search" id="search" placeholder="Rechercher">
    </div>

    <section class="articles">
    <?php 
        if (!empty($articles)) {
            foreach ($articles as $article) : ?>
                <?php include './template/_article.php'; ?>
            <?php endforeach; 
        } else {
            echo "Aucun article disponible.";
        }
        ?>
    </section>
</main>