<!-- Partie PHP -->
<?php
    $str = "Dans l'espace, personne ne vous entend crier.";
    $caract = 0
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 3 job04</title>
</head>
<body>
    <h1>jour 3 job04</h1>
    <br>
    <p><?php 
        echo "<b>$str</b><br><br>";
        for($i=0; isset($str[$i]); $i++){
            $caract++;
        }
        echo "La phrase contient $caract caractères";
    ?></p>
</body>
</html>