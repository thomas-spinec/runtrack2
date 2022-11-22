<!-- Partie PHP -->
<?php
    $maj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $min = "abcdefghijklmnopqrstuvwxyz";
    $dic = [$min,$maj];

    function gras($str){
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
            var_dump($str);
            $fonction = $_GET["fonction"];
            if ($fonction == "gras") {
                gras($str);
            }
            else if ($fonction == "cesar") {
                cesar($str);
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