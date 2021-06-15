<?php 
    include 'config/config.php';
    if (!checkConnection()) {
        header('location: ' . URL_ADMIN . 'login.php');
        die;
    }
    include 'includes/head.php';
    include 'includes/sidebar.php';
    include 'includes/topbar.php';
?>

<h1 class="text-center">Bienvenu sur l'admin <?php echo $_SESSION['user']['nom'] . ' ' . $_SESSION['user']['prenom']; ?></h1>

<?php 
    if(isset($_SESSION['erreur'])) {
        echo $_SESSION['erreur'];
        unset($_SESSION['erreur']);
    } 
    if(isset($_SESSION['ok_search'])): ?>
        <?php $categorie = $_SESSION['categorie']; ?>
        <h1 class='mt-5'>Résultat(s) de la recherche pour la catégorie <?= $categorie ?>:</h1>
        <?php
        include 'config/connection.php';
        $resultats = $_SESSION['ok_search'];
        $keys = array_keys($resultats[0]);
        ?>

        <table class="table mt-5 text-center">
            <thead class="titre_colonnes">
                <tr>
                    <?php foreach($keys as $key): ?>
                    <th scope="col"><?= ucfirst($key) ?></th>
                    <?php endforeach; ?>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultats as $resultat): ?>
                <tr>
                    <?php foreach($resultat as $res_content): ?>
                    <td><?= $res_content ?></td>
                    <?php endforeach; ?>
                    <td><a class="btn btn-warning" href="<?= $categorie ?>/update.php?id=<?= $resultat['id'] ?>">Modifier</a></td>
                    <td><a class="btn btn-danger" href="<?= $categorie ?>/action.php?id=<?= $resultat['id'] ?>">Supprimer</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<?php
    unset($_SESSION['ok_search']); 
    endif;
?>

<?php
    include 'includes/footer.php';
    include 'includes/bottom.php';
?>

