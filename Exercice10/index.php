<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les tableaux, exercice 10</title>
    </head>
    <!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
    Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département -->
    <body>
        <?php
        $county = array(
            '02' => 'Aisne',
            '60' => 'Oise',
            '80' => 'Somme',
            '59' => 'Nord',
            '62' => 'Pas-de-Calais');
        foreach ($county as $numberCounty => $nameCounty) {
            ?>
            <p><?= 'Le département ' . $numberCounty . ' a le numéro ' . $nameCounty . '.' ?></p>
        <?php } ?>
    </body>
</html>
