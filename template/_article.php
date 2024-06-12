<article class="article">
    <div class="image">
        <img src="<?= $article['image']; ?>" alt="article">
    </div>
    <div class="description">
        <h1 class="title"><?= $article['title']; ?></h1>
        <p><?= $article['content']; ?> </p>
    </div>

    <button class="button"
    onclick="window.location.href='../pages/article.php?id=<?php echo $article['id']; ?>'">
    Plus
    </button>
</article>