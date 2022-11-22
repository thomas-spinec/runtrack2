<!-- Partie PHP -->
<?php
    $jour = false;

    function bonjour($arg){
        if ($arg === true) {
            echo "Bonjour";
        } 
        else if ($arg === false){
            echo "Bonsoir";
        }
        else {
            echo "le paramètre n'est pas un booléen";
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
    <title>jour 7 job02</title>
</head>
<body>
    <h1>Les fonctions</h1>
    <br>
    <h1>jour 7 job02</h1>
    <br>
    <br>
    <?php
        bonjour($jour);
    ?>

</body>
</html>