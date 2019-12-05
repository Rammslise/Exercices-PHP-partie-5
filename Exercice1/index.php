<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Les tableaux, exercice 1</title>
</head>
<!--Créer un tableau months et l'initialiser avec les valeurs suivantes :
janvier, février, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, décembre -->
<body>
  <p>  <?php
    //Pour créer un tableau numéroté en PHP, on utilise généralement la fonction 'array'.
    //Tableau numéroté commence toujours par 0.
    $months = array('janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');
    ?> </p>
    <p><?= $months[3] ?></p>
</body>
</html>
