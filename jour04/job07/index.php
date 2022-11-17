<!-- Partie PHP -->
<?php
$h1 = 0;
$h2 = 0;
$e = "&nbsp;"; // pour echo un espace
$s = "_";
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 4 job07</title>
</head>
<body>
    <h1>jour 4 job07</h1>
    <br>
    <h3>Voici le formulaire :</h3>
    <br>

    <form action="" method="get">
        <label for="largeur">Entrez la largeur :</label>
        <input type="texte" name="largeur" id="largeur">
        <br>
        <br>
        <label for="hauteur">Entrez la hauteur :</label>
        <input type="texte" name="hauteur" id="hauteur">
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <br>
    <br>
        <pre><?php
            if (isset($_GET['largeur']) && isset($_GET['hauteur'])){
                $largeur = intval($_GET['largeur']);
                echo "La largeur est de : ".$largeur;
                echo "<br>";
                $hauteur = intval($_GET['hauteur']);
                echo "La hauteur est de : ".$hauteur;
                echo "<br>";
                echo "<br>";

                for ($h1 = 0; $h1 < $hauteur; $h1++){ // LE TOIT DE LA MAISON
                    for ($j = $largeur/2; $j > $h1; $j--){
                        echo $e;
                    }
                    echo "/"; 
                    for ($x = 0; $x < $h1; $x++){
                        echo $s;
                        echo $s;
                    }
                    echo "\\";
                    echo "<br>";
                } 
                for ($h2 = 0; $h2 < $hauteur; $h2++){ // LE RESTE DE LA MAISON
                    echo "|";
                    if ($h2 == $hauteur-1){
                        for ($y = 0; $y < $largeur; $y++){
                            echo $s;
                        }
                    }
                    else{
                        for ($y = 0; $y < $largeur; $y++){
                            echo $e;
                        }
                    }
                    echo "|";
                    echo "<br>";
                }
            }
            else{
                echo "Veuillez remplir le formulaire pour construire la maison";
            }
        ?></pre>
</body>
</html>