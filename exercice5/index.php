<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 5</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 5 - PHP</h1>
        <h3>Partie 2</h3>
        <p class="lead">En allant de 1 à 15 avec un pas de 1,
            afficher le message On y arrive presque.</p>
      </div>
    </div>
      <?php
        // Balise signifiant que la suite est en PHP
        // On split le php pour le saut de ligne
        $var = 42;
        for ($x = 1; $x <= 15; $x++) {
      ?>
          <p>On y arrive presque <?=$var+$x?></p>
      <?php
        }
      ?>
  </div>
</body>
</html>
