<?php

session_start();



require_once 'controller/frontendController.php';


if (isset($_GET['sd']) && $_GET['sd'] == 1) {
    session_destroy();
    header ('Location: index.php');
}

else if(isset($_POST['mail'])){
    include 'controller/backend.php';
    login();
}


elseif(isset($_GET['page'])) {
    displayPage();
}else{
    displayTravels();
}












