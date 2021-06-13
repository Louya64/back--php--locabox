<?php
include 'config/config.php';

$_SESSION['connect'] = false;
$_SESSION = array();
header('location: login.php');
die;