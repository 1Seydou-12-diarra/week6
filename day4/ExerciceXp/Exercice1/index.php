<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1 Display The Cars/title>
</head>
<body>
<?php
$cars = array('Dastun', 'Honda', 'BMW');

//la function sort() trie un tableau en ordre croissant
sort($cars);
//on a parcourir le tableau et lister dans ul 
echo "<ul>";
foreach ($cars as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";

?>
</body>
</html>