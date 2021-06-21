<?php 
    include 'config/config.php';
    if (!checkConnection()) {
        header('location: ' . URL_ADMIN . 'login.php');
        die;
    }
    require_once 'vendor/autoload.php';
    include 'includes/head.php';
    include 'includes/sidebar.php';
    include 'includes/topbar.php';
?>

<?php

    $faker = Faker\Factory::create('fr_FR');
    $clients = array();
    // boucle generation client parts
    for ($i=0; $i < 65; $i++) { 
       // génération d'un client
       $client['nom'] = $faker->firstName;
       $client['prenom'] = $faker->LastName;
       $client['mail'] = $faker->safeEmail;
       $client['tel_portable'] = $faker->phoneNumber;
       $client['tel_fixe'] = $faker->phoneNumber;
       $client['ville'] = $faker->city;
       $client['code_postal'] = $faker->postCode;
       $client['siret'] = NULL;
       $client['denomination_sociale'] = NULL;
        //    var_dump($client);
       // ajoute au tableau $clients
        array_push($clients, $client);
    }
    
    // boucle generation client pro
    for ($i=0; $i < 35; $i++) { 
        // génération d'un client pro
        $client['nom'] = $faker->firstName;
        $client['prenom'] = $faker->LastName;
        $client['mail'] = $faker->safeEmail;
        $client['tel_portable'] = $faker->phoneNumber;
        $client['tel_fixe'] = $faker->phoneNumber;
        $client['ville'] = $faker->city;
        $client['code_postal'] = $faker->postCode;
        $client['siret'] = strval($faker->randomFloat($nbMaxDecimals = NULL, $min = 11111111111111, $max = 99999999999999));
        $client['denomination_sociale'] = $faker->company;
        // var_dump($client);
        // ajoute au tableau $clients
            array_push($clients, $client);
    }
    // var_dump($clients);

    // ajout des clients en bdd
    foreach ($clients as $client) {
        $sql = 'INSERT INTO client VALUES (NULL, "'.$client["nom"].'", "'.$client["prenom"].'", "'.$client["mail"].'", "'.$client["tel_fixe"].'", "'.$client["tel_portable"].'", "'.$client["ville"].'", "'.$client["code_postal"].'", "'.$client["siret"].'", "'.$client["denomination_sociale"].'", 0)';
        // var_dump($sql);
        // $requete = $bdd->prepare($sql);
        // $requete->execute();
    }
?>

<?php
    include 'includes/footer.php';
    include 'includes/bottom.php';
?>