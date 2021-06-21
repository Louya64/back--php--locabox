<?php

session_start();

define('URL_ADMIN', 'http://localhost/Afpa/08_fil_rouge/locabox/v1/admin/');

$url = $_SERVER['PHP_SELF'];
$debut_url = '/Afpa/08_fil_rouge/locabox/v1/admin/';
switch($url) {
    case $debut_url . 'index.php':
        $title = 'Accueil';
        break;
    case $debut_url . 'clients/index.php':
        $title = 'Clients';
        break;
    case $debut_url . 'clients/add.php':
        $title = 'Ajout client';
        break;
    case $debut_url . 'clients/update.php':
        $title = 'Modif client';
        break;
    case $debut_url . 'boxs/index.php':
        $title = 'Boxs';
        break;
    case $debut_url . 'boxs/add.php':
        $title = 'Ajout box';
        break;
    case $debut_url . 'boxs/update.php':
        $title = 'Modif box';
        break;
    case $debut_url . 'locations/index.php':
        $title = 'Locations';
        break;
    case $debut_url . 'locations/add.php':
        $title = 'Ajout location';
        break;
    case $debut_url . 'locations/update.php':
        $title = 'Modif location';
        break;
    case $debut_url . 'actus/index.php':
        $title = 'Actualités';
        break;
    case $debut_url . 'actus/add.php':
        $title = 'Ajout actualité';
        break;
    case $debut_url . 'actus/update.php':
        $title = 'Modif actualité';
        break;
    case $debut_url . 'utilisateur/index.php':
        $title = 'Utilisateurs';
        break;
    case $debut_url . 'utilisateur/add.php':
        $title = 'Ajout utilisateur';
        break;
    case $debut_url . 'utilisateur/update.php':
        $title = 'Modif utilisateur';
        break;
    case $debut_url . 'objet/index.php':
        $title = 'Objets';
        break;
    case $debut_url . 'objet/add.php':
        $title = 'Ajout objet';
        break;
    case $debut_url . 'objet/update.php':
        $title = 'Modif objet';
        break;
    default : '';
}

function checkConnection() {
    if (isset($_SESSION['connect']) && $_SESSION['connect'] == true) {
        return true;
    }
    return false;
}
