<?php

session_start();

include '../includes/connection.php';

if (isset($_POST['btn_contact'])) {
    $nom = addslashes(htmlspecialchars($_POST['nom']));
    $prenom = addslashes(htmlspecialchars($_POST['prenom']));
    $mail = addslashes(htmlspecialchars($_POST['mail']));
    $telephone = addslashes(htmlspecialchars($_POST['telephone']));
    $objet = addslashes(htmlspecialchars($_POST['objet']));
    $message = addslashes(htmlspecialchars($_POST['message']));

    $sql = "INSERT INTO contact(nom, prenom, mail, telephone, objet, message) VALUES('$nom', '$prenom', '$mail', '$telephone', '$objet', '$message')";
    $req = $bdd->prepare($sql);
    if (!$req->execute()) {
        $_SESSION['message_erreur'] = "Problème lors de l'envoie du message, veuillez vérifier que tous les champs sont remplis.";
        header('location: contact.php');
        die();
    }
    $_SESSION['message_succes'] = "Votre message a bien été envoyé, nous vous contacteront d'ici 48h.";
    header('location: contact.php');
    die();
}