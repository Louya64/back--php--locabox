<?php 
    include '../config/config.php';
    if (!checkConnection()) {
        header('location: ../login.php');
        die;
    } 

    include '../includes/head.php';
    include '../includes/sidebar.php';
    include '../includes/topbar.php';
?>

<h1 class="text-center">Ajouter un objet</h1>

<form action="action.php" method="POST">
    <table class="table">
        <thead>
            <tr class="text-center">
                <th scope="col">Libellé</th>
                <th scope="col">Surface</th>
                <th scope="col">Volume</th>
                <th scope="col">Image</th>
                <th scope="col">Statut</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" class="form-control" name="libelle" id="libelle" required></td>
                <td><input type="number" class="form-control" name="surface" id="surface" required step="0.01"></td>
                <td><input type="number" class="form-control" name="volume" id="volume" required step="0.01"></td>
                <td><input type="text" class="form-control" name="image" id="image"></td>
                <td><input type="number" class="form-control" name="statut" id="statut" value="0" required></td>
                <td><button type="submit" name="btn_add" class="btn btn-primary">Ajouter</button></td>
            </tr>
        </tbody>
    </table>
</form>

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>