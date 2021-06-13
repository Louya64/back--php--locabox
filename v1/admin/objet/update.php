<?php 
    include '../config/config.php';
    if (!checkConnection()) {
        header('location: ../login.php');
        die;
    } 

    $id = '';
    $libelle = '';
    $surface = '';
    $volume = '';
    $image = '';
    $statut = '';
    
    if (isset($_GET['id'])) {

        include '../config/connection.php';

        $id = intval(htmlspecialchars($_GET['id']));

        $sql = "SELECT * FROM objet WHERE id = $id";
        $req = $bdd->prepare($sql);
        if (!$req->execute()) {
            echo 'erreur exécution requete';
        }
        $objet = $req->fetch(PDO::FETCH_ASSOC);
        $id = $objet['id'];
        $libelle = $objet['libelle'];
        $surface = $objet['surface'];
        $volume = $objet['volume'];
        $image = $objet['image'];
        $statut = $objet['statut'];

    }


    include '../includes/head.php';
    include '../includes/sidebar.php';
    include '../includes/topbar.php';
?>

<h1 class="text-center">Modifier un objet</h1>

<form action="action.php" method="POST">
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">Id (non modifiable)</th>
                <th scope="col">Libellé</th>
                <th scope="col">Surface</th>
                <th scope="col">Volume</th>
                <th scope="col">image</th>
                <th scope="col">Statut</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="number" class="form-control" name="id" id="id" value="<?= $id ?>" required readonly></td>
                <td><input type="text" class="form-control" name="libelle" id="libelle" value="<?= $libelle ?>" required></td>
                <td><input type="number" class="form-control" name="surface" id="surface" value="<?= $surface ?>" required step="0.01"></td>
                <td><input type="number" class="form-control" name="volume" id="volume" value="<?= $volume ?>" required step="0.01"></td>
                <td><input type="text" class="form-control" name="image" id="image" value="<?= $image ?>"></td>
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