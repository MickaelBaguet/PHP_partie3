<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 3</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 3 - PHP</h1>
        <h3>Partie 2</h3>
        <p class="lead">Créer deux variables. Initialiser la première à 100 et la deuxième
          avec un nombre compris en 1 et 100. Tant que la première variable n'est pas
          inférieure ou égale à 10 : multiplier la première variable avec la deuxième,
          afficher le résultat et décrémenter la première variable
        </p>
      </div>
    </div>
    <!-- Balise signifiant que la suite est en PHP -->
    <?php
      // Nombre random entre 1 et 100
      $var = rand(1, 100);
      // Décrémentation de la boucle for
      for ($x = 100; $x >= 10; $x--):
    ?>
    <!-- On segmente le php afin de pouvoir insérer une balise <p> (permet saut de ligne, mise en page tout ça tout ça) -->
    <p> Multiplication de <?=$var?> et de <?=$x?> = <?=$x*$var?></p>
    <?php
      endfor;
    ?>
  </div>
</body>
</html>
