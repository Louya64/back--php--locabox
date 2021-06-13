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

<h1 class="text-center">Ajouter un client</h1>

<form action="action.php" method="POST">
    <table class="table">
        <thead>
            <tr>
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" class="form-control" name="nom" id="nom" required></td>
                <td><input type="text" class="form-control" name="prenom" id="prenom"></td>
                <td><input type="email" class="form-control" name="mail" id="mail" required></td>
                <td><input type="text" class="form-control" name="tel_fix" id="tel_fix"></td>
                <td><input type="text" class="form-control" name="tel_port" id="tel_port"></td>
                <td><input type="text" class="form-control" name="adresse" id="adresse" required></td>
                <td><input type="text" class="form-control" name="ville" id="ville" required></td>
                <td><input type="text" class="form-control" name="code_postal" id="code_postal" required maxlength="5"></td>
                <td><input type="text" class="form-control" name="num_siret" id="num_siret"></td>
                <td><input type="text" class="form-control" name="denom_social" id="denom_social"></td>
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