<?php
include 'config/config.php';
include 'config/connection.php';

if(isset($_POST['btn_connect'])) {
    // var_dump($_POST);
    $mail = htmlspecialchars($_POST['mail']);
    $mp = htmlspecialchars($_POST['mp']);

    $sql = "SELECT * FROM utilisateur WHERE mail = '$mail'";
    $req = $bdd->prepare($sql);
    $req->execute();

    $user = $req->fetchAll(PDO::FETCH_ASSOC);

    if (count($user) == 0) {
        $_SESSION['erreur'] = 'erreur mail / mot de passe';
        header('location: login.php');
        die;
    }
    if (!password_verify($mp, $user[0]['mp'])) {
        $_SESSION['erreur'] = 'erreur mail / mot de passe';
        header('location: login.php');
        die;
    }
    unset($_SESSION['erreur']);
    $_SESSION['connect'] = true;
    unset($user[0]['mp']);
    $_SESSION['user'] = $user[0];
    // var_dump($_SESSION['user']);
    header('location: index.php');
    die;
}