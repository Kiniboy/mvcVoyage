<?php 

require 'bddConfig.php';

function getTravel(){

    $db = connect();
    $response = $db->query('SELECT * FROM voyages');
    return $travels = $response->fetchall(PDO::FETCH_ASSOC);

}
