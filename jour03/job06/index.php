<!-- Partie PHP -->
<?php
    $str = "redessop suon rap tnessinif edessop no'l euq sesohc seL";
    $caract = 0
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 3 job06</title>
</head>
<body>
    <h1>jour 3 job06</h1>
    <br>
    <p><?php 
        echo "<b>$str</b><br><br>";
        for($i=0; isset($str[$i]); $i++){ // on mesure la longueur de la chaine de caractère
            $caract++;
        }
        echo "La phrase à l'endroit est :<br>";
        for ($i = $caract; $i >= 0; $i--) { //écriture de la phrase en partant de la fin (décrémentation de i)
            echo $str[$i];
        }
    ?></p>
</body>
</html>