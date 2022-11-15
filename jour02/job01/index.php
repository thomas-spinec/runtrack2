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
    <title>jour 2 job01</title>
</head>
<body>
    <h1>jour 2 job01</h1>
    <br>
    <p><?php 
        for($i=1; $i<1337; $i++){
            if($i === 42){
                echo "<b><u>$i</u></b>"; //affichage du 42 en gras et souligné
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