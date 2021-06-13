<?php

session_start();

define('URL_ADMIN', 'http://localhost/Afpa/08_fil_rouge/v1/admin/');

function checkConnection() {
    if (isset($_SESSION['connect']) && $_SESSION['connect'] == true) {
        echo "connecté à l'admin<br>";
        return true;
    }
    echo "déconnecté";
    return false;
}