<?php 
    include '../config/config.php';
    if (!checkConnection()) {
        header('location: ../login.php');
        die;
    } 
    $id = '';
    $nom = '';
    $prenom = '';
    $mail = '';
    $tel_fix = '';
    $tel_port = '';
    $adresse = '';
    $ville = '';
    $code_postal = '';
    $num_siret = '';
    $denom_social = '';
    $statut = '';
    
    if (isset($_GET['id'])) {

        include '../config/connection.php';

        $id = intval(htmlspecialchars($_GET['id']));

        $sql = "SELECT * FROM client WHERE id = $id";
        $req = $bdd->prepare($sql);
        if (!$req->execute()) {
            echo 'erreur exécution requete';
        }
        $client = $req->fetch(PDO::FETCH_ASSOC);
        $id = $client['id'];
        $nom = $client['nom'];
        $prenom = $client['prenom'];
        $mail = $client['mail'];
        $tel_fix = $client['telephone_fixe'];
        $tel_port = $client['telephone_portable'];
        $adresse = $client['adresse'];
        $ville = $client['ville'];
        $code_postal = $client['code_postal'];
        $num_siret = $client['num_siret'];
        $denom_social = $client['denomination_sociale'];
        $statut = $client['statut'];

    }


    include '../includes/head.php';
    include '../includes/sidebar.php';
    include '../includes/topbar.php';
?>

<h1 class="text-center">Modifier un client</h1>

<form action="action.php" method="POST">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id (non modifiable)</th>
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
                <td><input type="number" class="form-control" name="id" id="id" value="<?= $id ?>" required readonly></td>
                <td><input type="text" class="form-control" name="nom" id="nom" value="<?= $nom ?>" required></td>
                <td><input type="text" class="form-control" name="prenom" id="prenom" value="<?= $prenom ?>"></td>
                <td><input type="email" class="form-control" name="mail" id="mail" value="<?= $mail ?>" required></td>
                <td><input type="text" class="form-control" name="tel_fix" id="tel_fix" value="<?= $tel_fix ?>"></td>
                <td><input type="text" class="form-control" name="tel_port" id="tel_port" value="<?= $tel_port ?>"></td>
                <td><input type="text" class="form-control" name="adresse" id="adresse" value="<?= $adresse ?>" required></td>
                <td><input type="text" class="form-control" name="ville" id="ville" value="<?= $ville ?>" required></td>
                <td><input type="text" class="form-control" name="code_postal" id="code_postal" value="<?= $code_postal ?>" required maxlength="5"></td>
                <td><input type="text" class="form-control" name="num_siret" id="num_siret" value="<?= $num_siret ?>"></td>
                <td><input type="text" class="form-control" name="denom_social" id="denom_social" value="<?= $denom_social ?>"></td>
                <td><input type="number" class="form-control" name="statut" id="statut" value="<?= $statut ?>" required></td>
                <td><button type="submit" name="btn_add" class="btn btn-primary">Ajouter</button></td>
            </tr>
        </tbody>
    </table>
</form>

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>