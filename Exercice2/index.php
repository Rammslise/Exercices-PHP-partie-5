<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les tableaux, exercice 2</title>
</head>
<!-- Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.-->
<body>
  <p>
    <?php
    $months = array('janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');
    ?>
  </p>
  <p><?= $months[2] ?></p>
</body>
</html>
