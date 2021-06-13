<?php 
    include 'config/config.php';
    include 'includes/head.php';
?>
<div class="container">
    <h1 class="text-center">Connection</h1>
    <?php //var_dump(password_hash('Tutu', PASSWORD_DEFAULT));
        if (isset($_SESSION['erreur'])) {
            echo $_SESSION['erreur'];
            unset($_SESSION['erreur']);
        }
    ?>
    <form action="action.php" method="POST" class="mt-5 container">
        <div class="mb-3">
            <label for="mail" class="form-label">Mail:</label>
            <input type="email" class="form-control" name="mail" id="mail">
        </div>
        <div class="mb-3">
            <label for="mp" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="mp" id="mp">
        </div>
        <button type="submit" name="btn_connect" class="btn btn-primary">Se connecter</button>
    </form>
</div>


<?php
    //var_dump($_SESSION);
    include 'includes/bottom.php';
?>

