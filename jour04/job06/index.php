<!-- Partie PHP -->
<?php

?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 4 job06</title>
</head>
<body>
    <h1>jour 4 job06</h1>
    <br>
    <h3>Voici le formulaire :</h3>
    <br>

    <form action="" method="get">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <br>
    <br>
        <?php
            if (isset($_GET['nombre'])){
                if ($_GET['nombre'] % 2 == 0){
                    echo "Le nombre ".$_GET['nombre']." est pair";
                }
                else{
                    echo "Le nombre ".$_GET['nombre']." est impair";
                }
            }
            else{
                echo "Veuillez entrer un nombre dans le formulaire";
            }
        ?>
</body>
</html>