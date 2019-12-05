<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les tableaux, exercice 9</title>
    </head>
    <!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. -->
    <body>
        <?php
        $county = array(
            '02' => 'Aisne',
            '60' => 'Oise',
            '80' => 'Somme',
            '59' => 'Nord',
            '62' => 'Pas-de-Calais');
        foreach ($county as $nameCounty) {
            ?>
            <p><?= $namecounty ?></p>
        <?php } ?>
    </body>
</html>
