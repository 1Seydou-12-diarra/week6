<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Longueur De La Ficelle</title>
</head>
<body>
<?php
//function sum_of_digits prend en paramètre la variable $my_num
   function sum_of_digits($my_num){
    // la variable $sum est initialiser à 0
      $sum = 0;
      // un bouclr for permettant de caluculer la longeur du nombre avec la function strlen()
      for ($i = 0; $i < strlen($my_num); $i++){
         $sum += $my_num[$i];
      }
      return $sum;
   }
   $my_num = "99";
   //affichage de la somme du digit
   echo "la somme du digit est:".sum_of_digits($my_num);
?>
    
</body>
</html>