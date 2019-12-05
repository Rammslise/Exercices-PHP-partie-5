<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les tableaux, exercice 6</title>
</head>
<!--Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.-->
<body>
  <p>
    <?php
    $county = array ('02' => 'Aisne','60' => 'Oise','80' => 'Somme','59' => 'Nord','62' => 'Pas-de-Calais');
    echo $county['59'];
    ?>
  </p>
</body>
</html>
