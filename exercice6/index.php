<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 6</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 6 - PHP</h1>
        <h3>Partie 2</h3>
        <p class="lead">En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
        for ($x = 20; $x >= 0; $x--) {
          echo "<p>C'est presque bon</p>";
        }
      ?>
  </div>
</body>
</html>
