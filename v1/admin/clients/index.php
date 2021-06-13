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
            <th class="th0" scope="col">Id</th>
            <th class="th1" scope="col">Nom</th>
            <th class="th2" scope="col">Prénom</th>
            <th class="th3" scope="col">mail</th>
            <th class="th4" scope="col">Téléphone fixe</th>
            <th class="th5" scope="col">Téléphone portable</th>
            <th class="th6" scope="col">Adresse</th>
            <th class="th7" scope="col">ville</th>
            <th class="th8" scope="col">Code postal</th>
            <th class="th9" scope="col">N° siret</th>
            <th class="th10" scope="col">Dénomination sociale</th>
            <th class="th11" scope="col">Statut</th>
            <th class="th12" scope="col"></th>
            <th class="th13" scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($clients as $client): ?>
        <tr>
            <td class="td0"><?= $client['id'] ?></td>
            <td class="td1"><?= $client['nom'] ?></td>
            <td class="td2"><?= $client['prenom'] ?></td>
            <td class="td3"><?= $client['mail'] ?></td>
            <td class="td4"><?= $client['telephone_fixe'] ?></td>
            <td class="td5"><?= $client['telephone_portable'] ?></td>
            <td class="td6"><?= $client['adresse'] ?></td>
            <td class="td7"><?= $client['ville'] ?></td>
            <td class="td8"><?= $client['code_postal'] ?></td>
            <td class="td9"><?= $client['num_siret'] ?></td>
            <td class="td10"><?= $client['denomination_sociale'] ?></td>
            <td class="td11"><?= $client['statut'] ?></td>
            <td class="td12"><a class="btn btn-warning" href="update.php?id=<?= $client['id'] ?>">Modifier</a></td>
            <td class="td13"><a class="btn btn-danger" href="action.php?id=<?= $client['id'] ?>">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>
