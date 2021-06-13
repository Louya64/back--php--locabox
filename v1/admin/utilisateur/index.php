<?php 
    include '../config/config.php';
    if (!checkConnection()) {
        header('location: ../login.php');
        die;
    } 
    include '../config/connection.php';

    $sql = "SELECT * FROM utilisateur WHERE statut = 0";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        echo 'erreur exécution requete';
    }
    $utilisateurs = $req->fetchAll(PDO::FETCH_ASSOC);
    include '../includes/head.php';
    include '../includes/sidebar.php';
    include '../includes/topbar.php';
?>

<h1 class="text-center">Liste des utilisateurs</h1>

<div class="text-center">
    <a class="btn btn-success my-5" href="add.php">Ajouter</a>
</div>


<table class="table mt-5 text-center">
    <thead class="titre_colonnes">
        <tr>
            <th class="th0" scope="col">Id</th>
            <th class="th1" scope="col">Nom</th>
            <th class="th2" scope="col">Prénom</th>
            <th class="th3" scope="col">Pseudo</th>
            <th class="th4" scope="col">Mot de passe</th>
            <th class="th5" scope="col">Mail</th>
            <th class="th6" scope="col">Statut</th>
            <th class="th7" scope="col"></th>
            <th class="th8" scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($utilisateurs as $utilisateur): ?>
        <tr>
            <td class="td0"><?= $utilisateur['id'] ?></td>
            <td class="td1"><?= $utilisateur['nom'] ?></td>
            <td class="td2"><?= $utilisateur['prenom'] ?></td>
            <td class="td3"><?= $utilisateur['pseudo'] ?></td>
            <td class="td4"><?= $utilisateur['mp'] ?></td>
            <td class="td5"><?= $utilisateur['mail'] ?></td>
            <td class="td6"><?= $utilisateur['statut'] ?></td>
            <td class="td7"><a class="btn btn-warning" href="update.php?id=<?= $utilisateur['id'] ?>">Modifier</a></td>
            <td class="td8"><a class="btn btn-danger" href="action.php?id=<?= $utilisateur['id'] ?>">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>