<?php 
include("../includes/config.php");
include("../includes/connection.php"); 

$sql = "SELECT * FROM actualite WHERE statut = 0 ORDER BY 'date_creation' DESC LIMIT 5";
$req = $bdd->prepare($sql);
$req->execute();
$actus = $req->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include($head); ?>
    </head>
    <body>
        <?php include($header); ?>

        <main>
            <h1 class="text-center my-5">Actualités</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 container mx-auto">
                <?php foreach($actus as $actu): ?>
                <?php  
                $longueur_max = 300;
                if (strlen($actu['contenu']) > $longueur_max) {
                    $actu['contenu'] = substr($actu['contenu'], 0 , $longueur_max) . ' [...]';
                }    
                ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?= $actu['miniature'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title pb-3"><?= $actu['titre'] ?> <span class="fw-light fs-6">(<?= date('d-m-Y', strtotime($actu['date_creation'])) ?>)</span></h5>
                            <p class="card-text"><?= $actu['contenu'] ?></p>
                            <a href="affiche_actu.php?id=<?= $actu['id'] ?>">Voir l'article</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </main>

        <?php include($footer); ?>
        
        <?php include($script); ?>
    </body>
</html>