<?php 
    require "connexion.php";
    // savoir si l'utilisateur vient bien de index.php on demande si l'id existe
    if(isset($_GET['id']) AND is_numeric($_GET['id']))
    // par contre je ne sais plus pourquoi on met is_numeric
    {
        $id =htmlspecialchars($_GET['id']);
    }else{
        header("LOCATION:index.php");
        exit();
    }

    // requete à la bdd pour avoir les valeurs sur la page
    $req = $bdd ->prepare ("SELECT titre, photo,DATE_FORMAT(date,'%d/%m/%Y') as mydate,description FROM infos WHERE id=?");
    $req ->execute([$id]);
    $don = $req->fetch(PDO::FETCH_ASSOC);
    $req->closeCursor();
    if(!$don)
    {
        // condition qu'il n'y a pas de valeur à $don
        header("LOCATION:index.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>infos</title>
</head>
<body>
    <div class="slide" id="infos">
        <div class="containinfo">
            <h2>
                <?= $don['titre'] ?> 
            </h2>
            <div class="date">
            <?= $don['mydate'] ?>
            </div>
            <p>
                <?= $don['description'] ?> 
            </p>
            <a href="index.php">Back</a>
        </div>
        <div class="photo">
            <img src="images/<?= ($don['photo']) ?>" alt="image de  <?= ($don['titre'])?>">
        </div>
       
    </div>
    
</body>
</html>