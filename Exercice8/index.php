<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les tableaux, exercice 8</title>
    </head>
    <!--Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->
    <body>
        <?php
        $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
        //'foreach', est une sorte de boucle 'for' spécialisée dans les tableaux.
        //'foreach' va passer en revue chaque ligne du tableau, et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire.
        foreach ($months as $variable) {
            ?>
            <p><?= ' Voici le mois de ' . $variable ?></p>
        <?php } ?>
    </body>
</html>
