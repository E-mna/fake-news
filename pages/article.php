<?php
global $articles;
include __DIR__ . '/../data/data.php';

// Fonction pour récupérer l'article par son id 
function getArticleById($id, $articles) {
    foreach($articles as $article) {
        if((string)$article['id'] === (string)$id) {
            return $article;
        }
    }
    return null;
}

// Récupère l'id de l'article depuis l'URL
$id = $_GET['id'] ?? null;

// Obtient les détails de l'article grâce à l'id
$article = getArticleById($id, $articles);

// Vérifie si l'article existe
if ($article === null) {
    echo "Article non trouvé !";
    exit;
}
?>
<main class="main">
    <section class="articles">
        <div class="article">
            <div class="image">
                <img src="<?= $article['image'] ?>" alt="article">
            </div>
            <div class="description">
                <h1 class="title"><?= $article['title'] ?></h1>
                <p><?= $article['content'] ?></p>
                <button class="button" onclick="history.back()">Revenir </button>
            </div>
        </div>
    </section>
</main>
