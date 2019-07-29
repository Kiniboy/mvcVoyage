<?php


ob_start();

?>

<form action="" name="logg" id="form" method="post">

        <p> CONNEXION </p>
        <input type="text" name="mail" id="mail">
        <input type="password" name="pwd" id="pwd">
        <input type="submit" name="loggin" value="VALIDER" id="loggin">

</form>


<?php

$content = ob_get_clean();

require_once 'template.php';



