<?php include("../includes/config.php"); 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include($head); ?>
    </head>
    <body>
        <?php include($header); ?>

        <main>
            <h1 class="text-center my-5">Contactez-nous</h1>
            <div class="text-center">
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['message_erreur'])) {
                            echo $_SESSION['message_erreur'];
                            unset($_SESSION['message_erreur']);
                        }
                    ?>
                </span>
                <span class="text-success">
                    <?php
                        if(isset($_SESSION['message_succes'])) {
                            echo $_SESSION['message_succes'];
                            unset($_SESSION['message_succes']);
                        }
                    ?>
                </span>
            </div>

    
            <form class="container" action="action.php" method="POST">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom:</label>
                    <input name="nom" type="text" class="form-control" id="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom:</label>
                    <input name="prenom" type="text" class="form-control" id="prenom">
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">Adresse mail:</label>
                    <input name="mail" type="email" class="form-control" id="mail">
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone:</label>
                    <input name="telephone" type="number" class="form-control" id="telephone">
                </div>
                <div class="mb-3">
                    <label for="objet" class="form-label">Objet:</label>
                    <input name="objet" type="text" class="form-control" id="objet">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                </div>
                <button name="btn_contact" type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </main>

        <?php include($footer); ?>
        
        <?php include($script); ?>
    </body>
</html>