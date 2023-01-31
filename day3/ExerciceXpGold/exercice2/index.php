<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
<?php 
   function multiply_two_lists($x, $y)
     {
        // explode() Fractionne une chaîne par une chaîne
        //trim() Supprime les espaces en debut et fin d'une chaîne
       $a = explode(' ',trim($x));
       $b = explode(' ',trim($y));
       foreach($a as $key=>$value){
           $output[$key] = $a[$key]*$b[$key];
       }
    //    implode() Rassemble les éléments d'un tableau en une chaîne
       return implode(' ',$output);
   }
   echo multiply_two_lists(("20 12 5"), ("1 3 3"))."\n";
  
   ?>
</body>
</html>