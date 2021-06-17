<?php 
include("../includes/config.php");
include("../includes/connection.php"); 
$id = htmlentities($_GET['id']);

$sql = "SELECT * FROM actualite WHERE id = $id";
$req = $bdd->prepare($sql);
$req->execute();
$actu = $req->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include($head); ?>
    </head>
    <body>
        <?php include($header); ?>

        <main>
            <img class="d-block mx-auto" src="<?= $actu['illustration'] ?>" alt="">
            <h1 class="text-center my-5"><?= $actu['titre'] ?> (<?= date('d-m-Y', strtotime($actu['date_creation'])) ?>)</h1>
            <p class="container"><?= $actu['contenu'] ?></p>
        </main>

        <?php include($footer); ?>
        
        <?php include($script); ?>
    </body>
</html>