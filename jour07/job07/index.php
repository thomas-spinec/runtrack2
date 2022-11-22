<!-- Partie PHP -->
<?php
    $decalage = 2;

    $maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $min = "abcdefghijklmnopqrstuvwxyz";
    $dic = [$min,$maj];

    function gras($str){ //met les mots commençant par une majuscule en gras
        $maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $mot ="";
        $j=0;
        echo $str;
        echo "<br>";
        for ($i=0; isset($str[$i]); $i++) {
            if ($str[$i] === " ") {
                $mot[$j] = $str[$i];
                for ($k=0; isset($maj[$k]); $k++) {
                    if ($mot[0] == $maj[$k]) {
                        echo "<b>$mot</b>";
                        $mot = "";
                        $j=0;
                        break;
                    }
                    else if ($k==25){
                        echo $mot;
                        $mot = "";
                        $j=0;
                        break;
                    }
                }
            }
            else {
                $mot[$j] = $str[$i];
                $j++;
            }
        }
        for ($k=0; isset($maj[$k]); $k++) {
            if ($mot[0] == $maj[$k]) {
                echo "<b>$mot</b>";
                $mot = "";
                $j=0;
                break;
            }
            else if ($k==25){
                echo $mot;
                $mot = "";
                $j=0;
                break;
            }
        }
    }

    function cesar($str, $decalage){ // encodage via le chiffre de césar (décaler les lettre dans l'alphabet)
        $maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $min = "abcdefghijklmnopqrstuvwxyz";
        $dic = [
            "minuscule" => $min,
            "majuscule" => $maj];
        echo $str;
        echo "<br>";
        for ($i=0; isset($str[$i]); $i++) {
            foreach ($dic as $casse => $letter) {
                if ($casse == "minuscule") {
                    for ($j=0; isset($letter[$j]); $j++) {
                        if ($str[$i] == $letter[$j]) {
                            $str[$i] = $letter[($j+$decalage)%26]; //le modulo permet de rester dans l'interval 0-26 (l'alphabet)
                            break;
                        }
                    }
                }
                else if ($casse == "majuscule") {
                    for ($j=0; isset($letter[$j]); $j++) {
                        if ($str[$i] == $letter[$j]) {
                            $str[$i] = $letter[($j+$decalage)%26];
                            break;
                        }
                    }
                }
            }
        }
        return $str;
    }

    function plateforme($str){ // rajout de "_" à la fin des mot se terminant par "me"
        $mot ="";
        $j=0;
        echo $str;
        echo "<br>";
        for ($i=0; isset($str[$i]); $i++) {
            if ($str[$i] === " ") {
                $mot[$j] = $str[$i];
                for ($k=0; isset($mot[$k]); $k++) {

                }
                if ($mot[$k-3] == "m" && $mot[$k-2] == "e") { //vérification des dernière lettre du mot (il y a l'espace)
                    $mot[$k-1] = "_";
                    $mot[$k] = " ";
                    echo $mot;
                    $mot = "";
                    $j=0;
                }
                else {
                    echo $mot;
                    $mot = "";
                    $j=0;
                }
            }
            else {
                $mot[$j] = $str[$i];
                $j++;
            }
        }
        for ($k=0; isset($mot[$k]); $k++) {

        }
        if ($mot[$k-2] == "m" && $mot[$k-1] == "e") {
            $mot[$k-1] = "_";
            $mot[$k] = " ";
            echo $mot;
            $mot = "";
            $j=0;
        }
        else {
            echo $mot;
            $mot = "";
            $j=0;
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
    <title>jour 7 job07</title>
</head>
<body>
    <h1>Les fonctions</h1>
    <br>
    <h1>jour 7 job07</h1>
    <br>
    <br>
    <form action="" method="get">
        <input type="text" name="str" placeholder="Entrez une phrase">
        <br>
        <br>
        <select name="fonction">
            <option value="">Choisissez une fonction à appliquer</option>
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>
        <br>
        <br>
        <input type="submit" value="envoyer">
    </form>

    <?php
        if (isset($_GET["str"]) && isset($_GET["fonction"])) {
            $str = $_GET["str"];
            echo '<br>';
            $fonction = $_GET["fonction"];
            if ($fonction == "gras") {
                gras($str);
            }
            else if ($fonction == "cesar") {
                echo cesar($str, $decalage);
            }
            else if ($fonction == "plateforme") {
                plateforme($str);
            }
            else {
                echo "Veuillez choisir une fonction";
            }
        }
        
    ?>
</body>
</html>