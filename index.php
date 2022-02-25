<?php 
require_once __DIR__.'/classes/movies.php' ;

$Movie = [
    new movies("title1", "description1")
];
$Movie[0]->title= "ted 1 --"; 
$Movie[0]->description= "lorem";

$Movie2 = [
    new movies("title2", "description2")
];
$Movie2[0]->title= "ted 2 --"; 
$Movie2[0]->description= "Ipsum";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpMovies oop</title>
</head> 
<body>
    <ul>
        <?php
            foreach($Movie as $elemento){
                echo "<li>{$elemento->getData()}</li>";
            }
            foreach($Movie2 as $elemento){
                echo "<li>{$elemento->getData()}</li>";
            }
        ?>
    </ul>  
</body>
</html>