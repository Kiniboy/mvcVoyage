<?php 


ob_start();

?>
<form method="post" enctype="multipart/form-data" id="formAddTravel" action="index.php">
        <label for="title"> Titre</label>
        <input type="text" name="title" id="title" >
        <label for="title"> Contenu </label>
        <input type="text" name="content" id="content">
        <input type="file" name="image" id="picvoyage">
        <input type="submit" value="Créer voyage" id="createTravel">
</form>

<?php
$content = ob_get_clean();
require_once 'template.php';