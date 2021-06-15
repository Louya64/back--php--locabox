<?php 
    include '../config/config.php';
    if (!checkConnection()) {
        header('location: ../login.php');
        die;
    } 
    $id = '';
    $nom = '';
    $prenom = '';
    $pseudo = '';
    $mp = '';
    $mail = '';
    $statut = '';
    
    if (isset($_GET['id'])) {

        include '../config/connection.php';

        $id = intval(htmlspecialchars($_GET['id']));

        $sql = "SELECT * FROM utilisateur WHERE id = $id";
        $req = $bdd->prepare($sql);
        if (!$req->execute()) {
            echo 'erreur exécution requete';
        }
        $user = $req->fetch(PDO::FETCH_ASSOC);
        $id = $user['id'];
        $nom = $user['nom'];
        $prenom = $user['prenom'];
        $pseudo = $user['pseudo'];
        $mp = $user['mp'];
        $mail = $user['mail'];
        $statut = $user['statut'];

    }


    include '../includes/head.php';
    include '../includes/sidebar.php';
    include '../includes/topbar.php';
?>

<h1 class="text-center">Modifier un utilisateur</h1>

<form action="action.php" method="POST">
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">Id (non modifiable)</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Mot de passe</th>
                <th scope="col">Mail</th>
                <th scope="col">Statut</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="number" class="form-control" name="id" id="id" value="<?= $id ?>" required readonly></td>
                <td><input type="text" class="form-control" name="nom" id="nom" value="<?= $nom ?>" required></td>
                <td><input type="text" class="form-control" name="prenom" id="prenom" value="<?= $prenom ?>" required></td>
                <td><input type="text" class="form-control" name="pseudo" id="pseudo" value="<?= $pseudo ?>"></td>
                <td><input type="text" class="form-control" name="mp" id="mp" value="<?= $mp ?>" required></td>
                <td><input type="text" class="form-control" name="mail" id="mail" value="<?= $mail ?>" required></td>
                <td><input type="number" class="form-control" name="statut" id="statut" value="<?= $statut ?>" required></td>
                <td><button type="submit" name="btn_update" class="btn btn-warning">Mettre à jour</button></td>
            </tr>
        </tbody>
    </table>
</form>

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>