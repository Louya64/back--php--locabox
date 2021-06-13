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

<?php
    include '../includes/footer.php';
    include '../includes/bottom.php';
?>