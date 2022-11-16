<!-- Partie PHP -->
<?php
    $str= "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 3 job02</title>
</head>
<body>
    <h1>jour 3 job02</h1>
    <br>
    <p><?php 
        for($i=0; isset($str[$i]); $i += 2){
            echo $str[$i]; //affichage de la phrase mais seulement tous les 2 charactères
        }
    ?></p>
</body>
</html>