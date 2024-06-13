<?php
function getURI(): string
{
    $adresse = $_SERVER['PHP_SELF'];
    return substr($adresse, 10);
}
?>

<!DOCTYPE html>
<html lang="fr">
<?php include "./template/_head.php"?>
<body>
<?php
include "./template/_header.php";

switch(getURI())
{
   
    case "/news":
        include "./pages/news.php";
        break;
    case "/about":
        include "./pages/about.php";
        break;
    case "/contact":
        include "./pages/contact.php";
        break;
    case "/article":
        include "./pages/article.php";
        break;
    default:
        include "./pages/home.php";
        break;
}

include "./template/_footer.php";
?>
</body>
</html>