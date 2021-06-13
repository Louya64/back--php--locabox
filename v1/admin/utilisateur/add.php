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

<h1 class="text-center">Ajouter un utilisateur</h1>

<form action="action.php" method="POST">
    <table class="table">
        <thead>
            <tr class="text-center">
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Pseudo</th>
            <th scope="col">Mot de passe</th>
            <th scope="col">Mail</th>
            <th scope="col">Statut</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" class="form-control" name="nom" id="nom" required></td>
                <td><input type="text" class="form-control" name="prenom" id="prenom" required></td>
                <td><input type="text" class="form-control" name="pseudo" id="pseudo"></td>
                <td><input type="text" class="form-control" name="mp" id="mp" required></td>
                <td><input type="email" class="form-control" name="mail" id="mail" required></td>
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