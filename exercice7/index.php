<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 7</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 7 - PHP</h1>
        <h3>Partie 2</h3>
        <p class="lead">TEn allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
      for ($x = 1; $x <= 100; $x=$x+15) {
        echo "<p>On tient le bambou !</p>";
      }
      ?>
  </div>
</body>
</html>
