<?php 
    include '../config/config.php';
    if (!checkConnection()) {
        header('location: ../login.php');
        die;
    } 
    include '../config/connection.php';

    $sql = "SELECT * FROM objet WHERE statut = 0";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        echo 'erreur exécution requete';
    }
    $objets = $req->fetchAll(PDO::FETCH_ASSOC);
    include '../includes/head.php';
    include '../includes/sidebar.php';
    include '../includes/topbar.php';
?>

<h1 class="text-center">Liste des objets</h1>

<div class="text-center">
    <a class="btn btn-success my-5" href="add.php">Ajouter</a>
</div>


<table class="table mt-5 text-center">
    <thead class="titre_colonnes">
        <tr>
            <th class="th1" scope="col">Libellé</th>
            <th class="th2" scope="col">Surface</th>
            <th class="th3" scope="col">Volume</th>
            <th class="th4" scope="col">Image</th>
            <th class="th5" scope="col"></th>
            <th class="th6" scope="col"></th>
        </tr>
    </thead>
    <tbody class="bg-success">
        <?php foreach($objets as $objet): ?>
        <tr>
            <td class="td1"><?= $objet['libelle'] ?></td>
            <td class="td2"><?= $objet['surface'] ?> m²</td>
            <td class="td3"><?= $objet['volume'] ?> m<sup>3</sup></td>
            <td class="td4"><img width="40" src="http://localhost/Afpa/08_fil_rouge/locabox/v1/images/objets/<?= $objet['libelle'] ?>.png"></td>
            <td class="td6"><a class="btn btn-warning" href="update.php?id=<?= $objet['id'] ?>">Modifier</a></td>
            <td class="td7"><a class="btn btn-danger" href="action.php?id=<?= $objet['id'] ?>">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>
