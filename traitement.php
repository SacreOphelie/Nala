<?php 
    // m'assurer que je viens du fichier add.php
    if(isset($_POST['titre']))
    {
        // traitement des données
        // init $error=0
        $err = 0;

        if(empty($_POST['titre']))
        {
            $err = 1;
        }else{
            $titre = htmlspecialchars($_POST['titre']);
        }
        if(empty($_POST['description']))
        {
            $err = 2;
        }else{
            $description = htmlspecialchars($_POST['description']);
        }
        if(empty($_POST['date']))
        {
            $err = 3;
        }else{
            $date = htmlspecialchars($_POST['date']);
        }
        if(empty($_POST['photo']))
        {
            $err = 4;
        }else{
            $photo = htmlspecialchars($_POST['photo']);
        }

        if($err == 0)
        {
            // insertion dans la bdd 
            require "connexion.php";
            $req= $bdd -> prepare("INSERT INTO infos(titre,description,date,photo) VALUES(:titre,:description,:date,:photo) ");
            $req->execute([
                ":titre"=>$titre,
                ":description"=>$description,
                ":date"=>$date,
                ":photo"=>$photo]);

            header("LOCATION:add.php?success");

        }else{
            // redirection vers le formulaire 
            header("LOCATION:add.php?error=".$err);
            exit();
        }


    }else{
        // redirection vers l'index
        header("LOCATION:index.php.");
        exit();
    }
?>