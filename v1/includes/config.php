<?php

$url = $_SERVER['PHP_SELF'];
$debut_url = '/Afpa/08_fil_rouge/locabox/v1/';
switch($url) {
    case $debut_url . 'index.php':
        $title = 'Accueil';
        break;
    case $debut_url . 'pages/boxs.php':
        $title = 'Boxs';
        break;
    case $debut_url . 'pages/simulateur.php':
        $title = 'Simulateur';
        break;
    case $debut_url . 'pages/securite.php':
        $title = 'Sécurité';
        break;
    case $debut_url . 'pages/actus.php':
        $title = 'Actualités';
        break;
    case $debut_url . 'pages/contact.php':
        $title = 'Contact';
        break;
    default : '';
}

$head = "C:wamp64/www/Afpa/08_fil_rouge/locabox/v1/includes/head.php";
$header = "C:wamp64/www/Afpa/08_fil_rouge/locabox/v1/includes/header.php";
$footer = "C:wamp64/www/Afpa/08_fil_rouge/locabox/v1/includes/footer.php";
$script = "C:wamp64/www/Afpa/08_fil_rouge/locabox/v1/includes/script.php";

$css_perso = "http://localhost/Afpa/08_fil_rouge/locabox/v1/style/style.css";

$accueil_site = "http://localhost/Afpa/08_fil_rouge/locabox/v1/";
$boxs_site = "http://localhost/Afpa/08_fil_rouge/locabox/v1/pages/boxs.php";
$simulateur_site = "http://localhost/Afpa/08_fil_rouge/locabox/v1/pages/simulateur.php";
$securite_site = "http://localhost/Afpa/08_fil_rouge/locabox/v1/pages/securite.php";
$actus_site = "http://localhost/Afpa/08_fil_rouge/locabox/v1/pages/actus.php";
$contact_site = "http://localhost/Afpa/08_fil_rouge/locabox/v1/pages/contact.php";
