<!-- Partie PHP -->
<?php
    $str = "Les choses que l'on possede finissent par nous posseder.";
    $caract = 0;
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> <!-- iso-8859-1 -->
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

        echo "La phrase à l'envers est :<br>";
        for ($j = $caract-1; $j >= 0; $j--) { //écriture de la phrase en partant de la fin (décrémentation de i)
            echo $str[$j];
        }
    ?></p>
</body>
</html>