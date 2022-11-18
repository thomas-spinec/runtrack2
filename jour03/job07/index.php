<!-- Partie PHP -->
<?php
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    $caract = 0
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 3 job07</title>
</head>
<body>
    <h1>jour 3 job07</h1>
    <br>
    <p><?php 
        echo "<b>$str</b><br><br>";
        for($i=0; isset($str[$i]); $i++){ // on mesure la longueur de la chaine de caractère
            $caract++;
        }
        for ($i=1; $i <= $caract; $i++){ // boucle permettant de remplacer le caractère par le suivant
            if ($i == $caract){  // Si on atteint le dernier caractère, on le remplace par le premier
                echo $str[0];
            }
            else{
                echo $str[$i]; //affichage tous les caractères sauf le premier (qui devient le dernier)
            }
        }
    ?></p>
    <br>
    <h2>Deuxième méthode (simplifiée)</h2>
    <p><?php
        for ($i=1; $i < $caract; $i++){ // boucle permettant de remplacer le caractère par le suivant
            echo $str[$i]; //affichage tous les caractères sauf le premier (qui devient le dernier)
        }
        echo $str[0]; //affichage du premier en dernier
    ?></p>
</body>
</html>