<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=LXGW+WenKai+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/base.css">
    <script defer src="../assets/scripts/base.js"></script>
    <?php
    switch (getURI()) {
        case "/news":
    ?>
            <title>Fake News - News</title>
            <link rel="stylesheet" href="../assets/css/news.css">
            <script defer src="../assets/scripts/news.js"></script>
        <?php
            break;
        case "/about":
        ?>
            <title>Fake News - A propos</title>
            <link rel="stylesheet" href="../assets/css/about.css">
            <script defer src="../assets/scripts/about.js"></script>
        <?php
            break;
        case "/contact":
        ?>
            <title>Fake News - Contact</title>
            <link rel="stylesheet" href="../assets/css/contact.css">
            <script defer src="../assets/scripts/contact.js"></script>
        <?php
            break;
        case "/article":
        ?>
            <title>Fake News - Article</title>
            <link rel="stylesheet" href="../assets/css/contact.css">
            <script defer src="../assets/scripts/news.js"></script>
        <?php
            break;
        default:
        ?>
            <title>Fake News - Accueil</title>
            <link rel="stylesheet" href="../assets/css/home.css">
            <link rel="stylesheet" href="../assets/css/news.css">
            <script defer src="../assets/scripts/home.js"></script>
    <?php
            break;
    }
    ?>
</head>