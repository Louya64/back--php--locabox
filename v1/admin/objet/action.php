<?php

include '../config/connection.php';

if (isset($_POST['btn_add'])) {
    $libelle = htmlspecialchars($_POST['libelle']);
    $surface = doubleval(htmlspecialchars($_POST['surface']));
    $volume = doubleval(htmlspecialchars($_POST['volume']));
    $image = htmlspecialchars($_POST['image']);
    $statut = intval(htmlspecialchars($_POST['statut']));

    $sql = "INSERT INTO objet(libelle, surface, volume, image, statut) VALUES ('$libelle', $surface, $volume, '$image', $statut)";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        echo 'erreur execution requete ajout';
        header('location: index.php');
        die;
    }
    header('location: index.php');
    die;

}

if (isset($_POST['btn_update'])) {
    $id = intval(htmlspecialchars($_POST['id']));
    $libelle = htmlspecialchars($_POST['libelle']);
    $surface = doubleval(htmlspecialchars($_POST['surface']));
    $volume = doubleval(htmlspecialchars($_POST['volume']));
    $image = htmlspecialchars($_POST['image']);
    $statut = intval(htmlspecialchars($_POST['statut']));

    $sql = "UPDATE objet SET libelle = '$libelle', surface = $surface, volume = $volume, image = '$image', statut = $statut WHERE id = $id";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        echo 'erreur execution requete modif';
        header('location: index.php');
        die;
    }
    header('location: index.php');
    die;

}

if (isset($_GET['id'])) {
    $id = intval(htmlspecialchars($_GET['id']));

    $sql = "UPDATE objet SET statut = 1 WHERE id = $id";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        echo 'erreur execution requete suppr';
        die;
    }
    header('location: index.php');
    die;
}