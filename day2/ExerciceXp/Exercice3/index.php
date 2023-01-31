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
    //  $note1 = 15;
    //  $note2 =20;
    //  $sumNote = $note1 + $note2;
     
    
    //  if ( $sumNote >= 0.06) {
    //     echo "grade will be First Division";
        
    //  }
    //  elseif ($sumNote >= 0.45 && $sumNote < 0.59)
    //  {
    //     echo "grade will be Second Division";
    //  }
    //  elseif($numNote >= 0.33 && $numNote < 0.44){
    //     echo "grade will be Third Division";}
    // elseif($numNote < 0.33){
    // echo"student will be Fail.";
    // }
    

$notes = 70;

if ($notes>=60)
{
	$notes = "First Division";
}
else if($notes>=45 && $notes < 59)
{
	$notes = "Second Division";
}
else if($notes>=33 && $notes < 59)
{
	$notes = "Third Division";
}
else
{
	$notes = "Fail";
}

echo "Student notes: $notes";

    ?>
    


 
</body>
</html>