<!-- Partie PHP -->
<?php
    $str = "Bonjour";
    $char = "o";

    function occurences($str, $char){
        $count = 0;
        for ($i=0; isset($str[$i]); $i++) { 
            if ($str[$i] === $char) {
                $count++;
            }
        }
        return $count;
    }
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 7 job05</title>
</head>
<body>
    <h1>Les fonctions</h1>
    <br>
    <h1>jour 7 job05</h1>
    <br>
    <br>
    <?php
        echo "La phrase est $str <br>";
        echo "Le charactère recherché est $char <br>";
        echo "Le nombre d'occurences de cette lettre est " . occurences($str, $char);
    ?>

</body>
</html>