<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 1</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 1 - PHP</h1>
        <h3>Partie 3</h3>
        <p class="lead">Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut l'afficher et l'incrementer.
</p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
    for ($x = 0; $x <= 10; $x++) {
      echo '<p>Le nombre est égale à '.$x.'</p>';
    }
    ?>
  </div>
</body>
</html>
