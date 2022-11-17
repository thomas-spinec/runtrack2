<!-- Partie PHP -->
<?php
$count = 0;
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 4 job03</title>
</head>
<body>
    <h1>jour 4 job03</h1>
    <br>
    <h3>Voici le formulaire (méthode 'post'):</h3>
    <br>

    <form action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom">
        <br>
        <br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <br>
        <br>
        <label for="age">Age :</label>
        <input type="text" name="age" id="age">
        <br>
        <br>
        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville">
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <p><?php 

        foreach($_POST as $args => $value){
            $len=0;
            for($i = 0; isset($value[$i]); $i++){
                $len++;
            }
            if ($len>0){ // on ne compte que les champs remplis
                $count++;
            }
        }
        echo "le nombre d'argument POST envoyé est : ".$count;
    ?></p>
</body>
</html>