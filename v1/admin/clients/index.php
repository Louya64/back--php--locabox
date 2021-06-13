<?php 
    include '../config/config.php';
    if (!checkConnection()) {
        header('location: ../login.php');
        die;
    } 
    include '../config/connection.php';

    $sql = "SELECT * FROM client WHERE statut = 0";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        echo 'erreur exécution requete';
    }
    $clients = $req->fetchAll(PDO::FETCH_ASSOC);
    include '../includes/head.php';
    include '../includes/sidebar.php';
    include '../includes/topbar.php';
?>

<h1 class="text-center">Liste des clients</h1>

<div class="text-center">
    <a class="btn btn-success my-5" href="add.php">Ajouter</a>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">mail</th>
            <th scope="col">Téléphone fixe</th>
            <th scope="col">Téléphone portable</th>
            <th scope="col">Adresse</th>
            <th scope="col">ville</th>
            <th scope="col">Code postal</th>
            <th scope="col">N° siret</th>
            <th scope="col">Dénomination sociale</th>
            <th scope="col">Statut</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clients as $client): ?>
        <tr>
            <td><?= $client['id'] ?></td>
            <td><?= $client['nom'] ?></td>
            <td><?= $client['prenom'] ?></td>
            <td><?= $client['mail'] ?></td>
            <td><?= $client['telephone_fixe'] ?></td>
            <td><?= $client['telephone_portable'] ?></td>
            <td><?= $client['adresse'] ?></td>
            <td><?= $client['ville'] ?></td>
            <td><?= $client['code_postal'] ?></td>
            <td><?= $client['num_siret'] ?></td>
            <td><?= $client['denomination_sociale'] ?></td>
            <td><?= $client['statut'] ?></td>
            <td><a class="btn btn-warning" href="update.php?id=<?= $client['id'] ?>">Modifier</a></td>
            <td><a class="btn btn-danger" href="action.php?id=<?= $client['id'] ?>">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>
