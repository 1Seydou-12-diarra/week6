<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1</title>
</head>
<body>
    <?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// explode()une fonction qui  retourne un tableau de chaînes de caractères,
$tableau = explode(',', $month_temp);
$total = 0;
// ici on compte tous les éléments du tableau $month_temp
$longeur_tableau = count($tableau);
//on parcour le tableau
foreach($tableau as $temporaire)
{
 $total += $temporaire;
}
//calcul pour trouver la temperature moyenne 
 $températureMoyenne = $total/$longeur_tableau;
 echo "La température moyenne est : ".$températureMoyenne."
"; 
//sort() fonction de ranger par odre croissant
sort($tableau);
echo " Liste des cinq températures les plus basses  :";
// ici on cherche les 5 temp les plus basses
for ($i=0; $i< 5; $i++)
{ 
echo $tableau[$i].", ";
}
// ici on cherche les 5 temp les plus élévées
echo "Liste des cinq températures les plus élevées :";
for ($i=($longeur_tableau-5); $i< ($longeur_tableau); $i++)
{
echo $tableau[$i].", ";
}
?>

    
</body>
</html>