<?php



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="animate.css">
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <title>Voyage</title>
</head>


<body>
<div class="container-fluid">

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
      <a class="navbar-brand" href="#">Voyajero</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?page=voyages" id="parcourir"> Parcourir <span class="sr-only">(current)</span></a>
          </li>
          <?php
          if(!isset($_SESSION['mail'])){
            ?>
          <li class="nav-item ">
            <a href="index.php?page=loginForm"><button class="btn btn-sm btn-outline-secondary bg-danger" name="deco" id="deco" type="submit"> Connexion </button></a>
          </li>

          <?php
          }
          ?>
          <?php
          if(isset($_SESSION['mail'])){
            ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=displayAdd" id="addTravel" name="addTravel">Ajouter Voyage </a>
          </li>
          <?php
          } else {
            displayTravels();
          }
          if(isset($_SESSION['mail'])){
            ?>
          <li class="nav-item">
            <a href="index.php?sd=1"><button class="btn btn-sm btn-outline-secondary bg-danger " name="sd" id="deco"> Deconnexion </button></a>
          </li>
          <?php
          }
          ?>
        </ul>
      </div>
  
  </nav>
</div>


<?= $content;?>

<?php