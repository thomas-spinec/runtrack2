<!-- Partie PHP -->
<?php
    // $str = "Bonjour";
    // $char = "o";

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
    <form action="" method="get">
        <input type="text" name="str" placeholder="entrez une phrase">
        <br>
        <input type="text" name="char" placeholder="entrez un charactère">
        <input type="submit" value="chercher">
    </form>
    <?php
        if (isset($_GET["str"]) && isset($_GET["char"])) {
            $str = $_GET["str"];
            $char = $_GET["char"];
            for ($i=0; isset($char[$i]); $i++){
            }
            if ($i > 1) {
                echo "Vous ne pouvez entrer qu'un seul charactère";
            }
            else {
                echo $str;
                echo "<br>";
                echo "Le charactère '" . $char . "' apparait " . occurences($str, $char) . " fois";
            }
        }
    ?>

</body>
</html>