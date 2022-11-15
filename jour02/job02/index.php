<!-- Partie PHP -->
<?php
// inutile dans ce job
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 2 job02</title>
</head>
<body>
    <h1>jour 2 job02</h1>
    <br>
    <p><?php 
        for($i=0; $i<=1337; $i++){
            if($i === 26 OR $i === 37 OR $i === 88 OR $i === 1111 OR $i === 3233){ //en l'occurence on arrivera jamais à 3233
                echo "<br>";
                continue; //n'affiche pas les nombres au dessus
            }
            else{
                echo $i;  //affichage des autres chiffres et nombres normalement
                echo "<br>";
            }
        }
    ?></p>
</body>
</html>