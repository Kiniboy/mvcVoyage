<?php 

ob_start();

// pour afficher les données 

foreach($travels as $travel){

     echo '<h2>'. utf8_encode($travel['title']) . '</h2>' 
    . '<br><br><br>' . 
    '<p>' . utf8_encode($travel['content']) . '</p>'
     . '<br><br><img src="view/images/' . $travel['image'] . '" class="img">'; 
    
}

$content = ob_get_clean();

require_once 'template.php';





