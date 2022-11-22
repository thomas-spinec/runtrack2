<!-- Partie PHP -->
<?php
    // $str = "Une phrase de tEst tout à fAit normale";

    function leetSpeak($str){ // transforme certaine lettre dans leur charactère 'leet speak'
        for ($i=0; isset($str[$i]); $i++) { 
            if ($str[$i] === "A" || $str[$i] === "a") {
                $str[$i] = "4";
            }
            else if ($str[$i] === "B" || $str[$i] === "b") {
                $str[$i] = "8";
            }
            else if ($str[$i] === "E" || $str[$i] === "e") {
                $str[$i] = "3";
            }
            else if ($str[$i] === "G" || $str[$i] === "g") {
                $str[$i] = "6";
            }
            else if ($str[$i] === "L" || $str[$i] === "l") {
                $str[$i] = "1";
            }
            else if ($str[$i] === "S" || $str[$i] === "s") {
                $str[$i] = "5";
            }
            else if ($str[$i] === "T" || $str[$i] === "t") {
                $str[$i] = "7";
            }
            else if ($str[$i] === "O" || $str[$i] === "o") {
                $str[$i] = "0";
            }
        }
        return $str;
    }
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 7 job06</title>
</head>
<body>
    <h1>Les fonctions</h1>
    <br>
    <h1>jour 7 job06</h1>
    <br>
    <br>
    <form action="" method="get">
        <input type="text" name="str" placeholder="Entrez une phrase">
        <input type="submit" value="Encodez">
    </form>
    <?php
        if (isset($_GET["str"])) {
            $str = $_GET["str"];
            echo "La phrase est : <br>";
            echo $str . "<br><br>";
            echo "La phrase convertie en leet speak devient : <br>";
            echo leetSpeak($str);
        }
    ?>

</body>
</html>