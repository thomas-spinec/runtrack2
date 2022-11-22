<!-- Partie PHP -->
<?php
    $a = 5;
    $b = 3;
    $operation = "+";

    function calcul($a, $operation, $b){
        if ($operation === "+") {
            return $a + $b;
        } 
        else if ($operation === "-"){
            return $a - $b;
        }
        else if ($operation === "*"){
            return $a * $b;
        }
        else if ($operation === "/"){
            return $a / $b;
        }
        else if ($operation === "%"){
            return $a % $b;
        }
        else {
            echo "l'opération n'est pas valide";
        }
    }
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 7 job04</title>
</head>
<body>
    <h1>Les fonctions</h1>
    <br>
    <h1>jour 7 job04</h1>
    <br>
    <br>
    <?php
        echo "Le premier nombre est $a <br>";
        echo "Le deuxième nombre est $b <br>";
        echo "L'opération est $operation <br>";
        $result = calcul($a, $operation, $b);
        echo 'Le résultat de l\'opération est ' .$result;
    ?>

</body>
</html>