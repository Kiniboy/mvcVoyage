<?php

require_once 'controller/frontendController.php';


function login() {

    require_once 'model/backendModel.php';

    $user = getUser($_POST['mail']);

    if($user){

        if (password_verify($_POST['pwd'], $user['password'])) {
            $_SESSION['mail']= $_POST['mail'];
            echo 'connecté(e)';
            displayTravels();
        }
        else {
            echo 'Mot de passe invalide';
        } 
    } else {
            echo 'pas de user';
        }


}

function displayAddTravel(){
    require_once 'view/displayAddTravel.php';

}










