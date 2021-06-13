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
    if(isset($_SESSION['ok_search'])) {
        $resultats = $_SESSION['ok_search'];
        foreach($resultats as $resultat) {
            echo implode("<br>",$resultat);
        }
        unset($_SESSION['ok_search']);
    } 
?>

<?php
    include 'includes/footer.php';
    include 'includes/bottom.php';
?>

