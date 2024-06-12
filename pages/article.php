<?php 
include __DIR__ . '/../data/data.php';

// Fonction pour récupérer l'article par son id 
function getArticleById($id, $articles) {
    foreach($articles as $article) {
        if($article['id'] == $id) {
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
 
    <main class="main-content">
        <h1><?= $article['title']; ?></h1>
        <div class="article-image">
            <img src="<?= $article['image']; ?>" alt="article">
        </div>
        <p><?= $article['content']; ?></p>
    </main>

  