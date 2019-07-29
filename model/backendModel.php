<?php

require_once 'bddConfig.php';



function getUser($mail){

    $db = connect();

    // on récupere les données "mail" et "password" de la base de données


    $sql = 'SELECT * FROM users WHERE mail = :mail ';

    $request = $db->prepare($sql);


    // on execute la requete

    $request->execute([

        ':mail' => htmlentities(strip_tags($mail))
        
    ]);

  
    return $request->fetch(PDO::FETCH_ASSOC);

}


