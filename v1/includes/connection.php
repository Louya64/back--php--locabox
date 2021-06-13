<?php
$dsn = 'mysql:dbname=locabox;host=localhost;charset=UTF8';
$user = 'locabox';
$password = 'C7aOoFDgtrFbj9UK';


try {
    $bdd = new PDO($dsn, $user, $password);
    echo 'connection bdd ok';
} catch (PDOException $e) {
    echo('erreur: ' . $e->getMessage());
}