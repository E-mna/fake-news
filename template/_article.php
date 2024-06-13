<?php
global $article;
?>

<article class="article">
    <div class="image">
        <img src="<?= $article['image'] ?>" alt="article">
    </div>
    <div class="description">
        <h1 class="title"><?= $article['title'] ?></h1>
        <p><?= $article['description'] ?> </p>
    </div>

    <button class="button"
    onclick="window.location.href='/article?id=<?= $article['id'] ?>'">
    Plus
</button>
</article>