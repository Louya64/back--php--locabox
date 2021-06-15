<?php

include '../config/connection.php';

if (isset($_POST['btn_add'])) {
    $nom = addslashes(htmlspecialchars($_POST['nom']));
    $prenom = addslashes(htmlspecialchars($_POST['prenom']));
    $pseudo = addslashes(htmlspecialchars($_POST['pseudo']));
    $mp = password_hash(addslashes(htmlspecialchars($_POST['mp'])), PASSWORD_DEFAULT);
    $mail = addslashes(htmlspecialchars($_POST['mail']));
    $statut = intval(htmlspecialchars($_POST['statut']));

    $sql = "INSERT INTO utilisateur(nom, prenom, pseudo, mp, mail, statut) VALUES ('$nom', '$prenom', '$pseudo', '$mp', '$mail', $statut)";
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
    $id = '';
    $nom = '';
    $prenom = '';
    $pseudo = '';
    $mp = '';
    $mail = '';
    $statut = '';

    $id = intval(htmlspecialchars($_POST['id']));
    $nom = addslashes(htmlspecialchars($_POST['nom']));
    $prenom = addslashes(htmlspecialchars($_POST['prenom']));
    $pseudo = addslashes(htmlspecialchars($_POST['pseudo']));
    $mp = addslashes(htmlspecialchars($_POST['mp']));
    $mail = addslashes(htmlspecialchars($_POST['mail']));
    $statut = intval(htmlspecialchars($_POST['statut']));

    $sql = "UPDATE utilisateur SET nom = '$nom', prenom = '$prenom', pseudo = '$pseudo', mp = '$mp', mail = '$mail', statut = $statut WHERE id = $id";
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

    $sql = "UPDATE utilisateur SET statut = 1 WHERE id = $id";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        echo 'erreur execution requete suppr';
        die;
    }
    header('location: index.php');
    die;
}