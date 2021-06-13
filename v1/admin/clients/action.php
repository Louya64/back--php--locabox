<?php

include '../config/connection.php';

if (isset($_POST['btn_add'])) {
    
    $nom = addslashes(htmlspecialchars($_POST['nom']));
    $prenom = addslashes(htmlspecialchars($_POST['prenom']));
    $mail = addslashes(htmlspecialchars($_POST['mail']));
    $tel_fix = htmlspecialchars($_POST['tel_fix']);
    $tel_port = htmlspecialchars($_POST['tel_port']);
    $adresse = addslashes(htmlspecialchars($_POST['adresse']));
    $ville = addslashes(htmlspecialchars($_POST['ville']));
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $num_siret = htmlspecialchars($_POST['num_siret']);
    $denom_social = addslashes(htmlspecialchars($_POST['denom_social']));
    $statut = intval(htmlspecialchars($_POST['statut']));

    $sql = "INSERT INTO client(nom, prenom, mail, telephone_fixe, telephone_portable, adresse, ville, code_postal, num_siret, denomination_sociale, statut) 
            VALUES ('$nom', '$prenom', '$mail', '$tel_fix', '$tel_port', '$adresse', '$ville', '$code_postal', '$num_siret', '$denom_social', $statut)";
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
    $nom = addslashes(htmlspecialchars($_POST['nom']));
    $prenom = addslashes(htmlspecialchars($_POST['prenom']));
    $mail = addslashes(htmlspecialchars($_POST['mail']));
    $tel_fix = htmlspecialchars($_POST['tel_fix']);
    $tel_port = htmlspecialchars($_POST['tel_port']);
    $adresse = addslashes(htmlspecialchars($_POST['adresse']));
    $ville = addslashes(htmlspecialchars($_POST['ville']));
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $num_siret = htmlspecialchars($_POST['num_siret']);
    $denom_social = addslashes(htmlspecialchars($_POST['denom_social']));
    $statut = intval(htmlspecialchars($_POST['statut']));

    $sql = "UPDATE client SET nom = '$nom', prenom = '$prenom', mail = '$mail', telephone_fixe = '$tel_fix', telephone_portable = '$tel_port', adresse = '$adresse', ville = '$ville', code_postal = '$code_postal', num_siret = '$num_siret', denomination_sociale = '$denom_social', statut = '$statut' WHERE id = $id";
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

    $sql = "UPDATE client SET statut = 1 WHERE id = $id";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        echo 'erreur execution requete suppr';
        die;
    }
    header('location: index.php');
    die;
}