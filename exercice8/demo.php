<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 8</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 8 - PHP</h1>
        <h2>Partie 2</h2>
        <p class="lead">En allant de 200 à 0 avec un pas de 12,
          afficher le message Enfin !!!!.</p>
      </div>
    </div>
      <?php
        $x=11;
        do {
      ?>
          <p>Enfin !!!</p>
      <?php
          $x++;
        } while ($x <= 10);
      ?>
  </div>
</body>
</html>
