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

function setTravel(){

    $db = connect();
    if(isset($_POST['title']) && isset($_POST['content']) && isset($_FILES['image'])){

        $title= $_POST['title'];
        $content = $_POST['content'];
    }    
    if (isset($_FILES['image'])){

        $image = $_FILES['image']['name'];
        $path = pathinfo($_FILES['image']['name']);
        $ext= strtolower($path['extension']);
        $extension_autorisees = array('jpg','jpeg','png','gif');

        if(in_array($ext, $extension_autorisees)){

            //on peut stocker le fichier définitivement
            move_uploaded_file( $_FILES['image']['tmp_name'], 'images/' . 
            basename($_FILES['image']['name']));
        }
    } else {
        $image = null;
    }
    // on insert les valeurs dans la base de données
    $sql = 'INSERT INTO voyages VALUES (NULL, :title, :content, :image)';
    // execution de la requete
    $request = $go_bdd->prepare($sql);
    $request->execute([
        ':title' => $title,
        ':content' => $content,
        ':image' => $image
    ]);

} echo "Le fichier à bien été envoyé !";
    displayTravels();





