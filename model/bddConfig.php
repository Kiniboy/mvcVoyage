<?php
require_once 'config.php';

function connect(){

    global $acces,$login,$pwd;

    try{

        $db = new PDO('mysql:host=localhost;dbname=voyage;charset=utf8','root','');

        return $db;
    }
    
    catch (Exception $e){
    
        die('Erreur : '. $e->getMessage());
    
    }

}

