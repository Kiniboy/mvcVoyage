
<?php

require_once 'model/frontendModel.php';

function displayTravels(){
    
    $travels = getTravel();

    require 'view/displayTravels.php';

}


function displayLogin(){

    require 'view/displayLogin.php';

}

function displayPage(){
    switch ($_GET['page']) {
        case 'voyages':
            displayTravels();
            break;
        
        case 'loginForm':
            displayLogin();
            break;

        case 'addTravel' :
            displayAddTravel();
            break;
            
        default:
            displayTravels();
            break;
    }
}

