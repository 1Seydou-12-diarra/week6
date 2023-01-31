<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerice2</title>
</head>
<body>
<?php
$effacer_mois = 'march';
// ici on prend une liste de mois dans un tableau
$mois = array('jan', 'feb', 'march', 'april', 'may'); // ici jai pris march dont la clé est 2
//on parcour les clés du tableau
foreach (array_keys($mois, $effacer_mois) as $key) {
    // unset() fonction permetat de détruire les variables spécifiées.
    unset($mois[$key]);
}

// retant des mois non supprimer
var_dump($mois);
?>
</body>
</html>