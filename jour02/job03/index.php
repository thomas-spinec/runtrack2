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
    <title>jour 2 job03</title>
</head>
<body>
    <h1>jour 2 job03</h1>
    <br>
    <p><?php 
        for($i=0; $i<=100; $i++){
            if($i <=20){ //jusqu'à 20
                echo "<i>$i</i>"; //affichage en italique
                echo "<br>";
            }
            else if($i===42){
                echo "La Plateforme_"; //affichage à la place de 42
                echo "<br>";
            }
            else if($i>=25 && $i<=50){
                echo "<u>$i</u>";  //affichage souligné
                echo "<br>";
            }
            else{
                echo $i;  //affichage des autres chiffres et nombres normalement
                echo "<br>";
            }
        }
    ?></p>
</body>
</html>