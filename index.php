<!-- Site onepage -->

<?php 
    // sans cette ligne de code la bdd n'est pas reconnue
    require ("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nala La Best</title>
</head>
<body>
    <!-- on inclut le header ( c'est un site onepage mais je le fais pour le fun ) -->
    <?php include ("partials/header.php"); ?>
    <div class="slide" id="home"></div>
    <div class="slide" id="about">
        <h3>Welcome to the World of My Cat.</h3>
        <hr>
        <img src="images/about.png" alt="about">
        <p>
            She's clumsy, she's shy, and she's absolutely perfect.
            This is the little corner of the internet where my cat — my awkward sunshine — takes the spotlight.
            From quiet naps to unexpected tumbles, she fills my days with soft chaos and pure love.
            Come meet the timid queen who stole my heart… one pawstep at a time.</p>
        
    </div>
    <div class="slide" id="galerie">
        <h1>Galerie</h1>
        <a href="add.php"><div id="btn_add">Add a picture</div></a>
        
        <div class="group-images">
        <?php 
            $req =$bdd -> query("SELECT id,photo,titre FROM infos");
            while($don = $req->fetch(PDO::FETCH_ASSOC))
            {
                echo "<a href='infos.php?id=".$don['id']."' class='images'>";
                    echo "<img src='images/".$don['photo']."'>";
                    echo "<div class='overlay'>";
                        echo "<h2>".$don['titre']."</h2>";
                    echo "</div>";
                echo "</a>";

                
            }
        ?>

        </div>
            
    </div>
    <div class="slide" id="contact">
        <h1>Contact</h1>
    </div>
</body>
</html>