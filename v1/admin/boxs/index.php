<?php 
    include '../config/config.php';
    if (!checkConnection()) {
        header('location: ../login.php');
        die;
    } 
    include '../config/connection.php';

    $sql = "SELECT * FROM box WHERE statut = 0";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        echo 'erreur exécution requete';
    }
    $boxs = $req->fetchAll(PDO::FETCH_ASSOC);
    $couleur = '';
    $dispo = '';
    include '../includes/head.php';
    include '../includes/sidebar.php';
    include '../includes/topbar.php';
?>

<h1 class="text-center">Liste des boxs</h1>

<div class="text-center">
    <a class="btn btn-success my-5" href="add.php">Ajouter</a>
</div>


<table class="table mt-5 text-center">
    <thead class="titre_colonnes">
        <tr>
            <th class="th0" scope="col">Id</th>
            <th class="th1" scope="col">Libellé</th>
            <th class="th2" scope="col">Surface</th>
            <th class="th3" scope="col">Volume</th>
            <th class="th4" scope="col">Prix</th>
            <th class="th5" scope="col">Disponibilité</th>
            <th class="th6" scope="col"></th>
            <th class="th7" scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($boxs as $box): ?>
        <?php
            if ($box['disponibilite'] == 0) {
                $couleur = "success";
                $dispo = "disponible";
            }  
            if ($box['disponibilite'] == 1) {
                $couleur = "danger";
                $dispo = "indisponible";
            }
        ?>
        <tr>
            <td class="td0"><?= $box['id'] ?></td>
            <td class="td1"><?= $box['libelle'] ?></td>
            <td class="td2"><?= $box['surface'] ?></td>
            <td class="td3"><?= $box['volume'] ?></td>
            <td class="td4"><?= $box['prix'] ?></td>
            <td class="td5"><span class="text-<?= $couleur ?>"><?= $dispo ?></span></td>
            <td class="td6"><a class="btn btn-warning" href="update.php?id=<?= $box['id'] ?>">Modifier</a></td>
            <td class="td7"><a class="btn btn-danger" href="action.php?id=<?= $box['id'] ?>">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>
