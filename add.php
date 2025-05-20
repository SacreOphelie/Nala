<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>

<?php 
    if(isset($_GET['error']))
    {
        echo "<div class='error'>Une erreur est Survenue</div>";
    }else{
        echo "<div class='succes'>Vous avez bien envoyé votre magnifique Nala</div>";
    }
?>

    <form action="traitement.php" method="POST">
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date :</label>
            <input type="date" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="text" name="photo" id="photo">
        </div>
        <div class="btn">
            <input type="submit" value="Send">
            <a href="index.php" class="btn_return">Back</a>
        </div>
    </form>
</body>
</html>