<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 4</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 4 - PHP</h1>
        <h3>Partie 2</h3>
        <p class="lead">Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :
l'afficher et l'incrementer de la moitié de sa valeur
</p>
      </div>
    </div>
      <!-- Balise signifiant que la suite est en PHP -->
      <?php
      for ($x = 1; $x <= 10; $x=$x+($x/2)) {
        echo '<p>Le nombre est égale à '.$x.'</p>';
      }
    ?>
  </div>
</body>
</html>
