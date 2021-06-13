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
            <th scope="col">Id</th>
            <th scope="col">Libellé</th>
            <th scope="col">Surface</th>
            <th scope="col">Volume</th>
            <th scope="col">Prix</th>
            <th scope="col">Disponibilité</th>
            <th scope="col"></th>
            <th scope="col"></th>
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
            <td class="col1" id="col1"><?= $box['id'] ?></td>
            <td><?= $box['libelle'] ?></td>
            <td><?= $box['surface'] ?></td>
            <td><?= $box['volume'] ?></td>
            <td><?= $box['prix'] ?></td>
            <td><span class="text-<?= $couleur ?>"><?= $dispo ?></span></td>
            <td><a class="btn btn-warning" href="update.php?id=<?= $box['id'] ?>">Modifier</a></td>
            <td><a class="btn btn-danger" href="action.php?id=<?= $box['id'] ?>">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>
