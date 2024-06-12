<?php

function getURI(): string
{
    $adresse = $_SERVER['PHP_SELF'];
    $i = 0;
    foreach($_GET as $cle => $valeur){
        $adresse .= ($i === 0 ? '?' : '&').$cle.($valeur ? '='.$valeur : '');
        $i++;
    }
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
        case "/accueil":
            include "./pages/home.php";
            break;
    
    default:
        include "./pages/article.php";
        break;
}

include "./template/_footer.php";
?>
</body>
</html>