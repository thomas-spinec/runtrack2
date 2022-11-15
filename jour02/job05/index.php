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
    <title>jour 2 job05</title>
</head>
<body>
    <h1>jour 2 job05</h1>
    <br>
    <p><?php 
        for($i=1; $i<=1000; $i++){
            for($x=2; $x<$i; $x++){
                if ($i % $x === 0){ // si le modulo de i par rapport à n'importe quel chiffre au dessous = 0 on passe au prochain i
                    break;
                }
                else if($x === $i-1){ // si on est arrivé jusqu'à i-1 sans déclencher la conditions précédente, c'est un nombre premier
                    echo "$i<br>";
                }
            }
        }
    ?></p>
</body>
</html>