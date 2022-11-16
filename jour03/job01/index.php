<!-- Partie PHP -->
<?php
    $tableau=[200, 204, 173, 98, 171, 404, 459];
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 3 job01</title>
</head>
<body>
    <h1>jour 3 job01</h1>
    <br>
    <p><?php 
        for($i=0; isset($tableau[$i]); $i++){
            if($tableau[$i] % 2 === 0){
                echo "$tableau[$i] est paire<br>"; //affichage des nombres paires
            }
            else{
                echo "$tableau[$i] est impaire<br>";  //affichage des nombres impaires
            }
        }
    ?></p>
</body>
</html>