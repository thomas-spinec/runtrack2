<!-- Partie PHP -->
<?php
    // $a = 5;
    // $b = 3;
    // $operation = "+";

    function calcul($a, $operation, $b){
        if ($operation === "+") {
            return $a + $b;
        } 
        else if ($operation === "-"){
            return $a - $b;
        }
        else if ($operation === "*"){
            return $a * $b;
        }
        else if ($operation === "/"){
            return $a / $b;
        }
        else if ($operation === "%"){
            return $a % $b;
        }
        else {
            echo "l'opération n'est pas valide";
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
    <title>jour 7 job04</title>
</head>
<body>
    <h1>Les fonctions</h1>
    <br>
    <h1>jour 7 job04</h1>
    <br>
    <br>
    <form action="" method="get">
        <input type="number" name="a" id="a" value="">
        <select name="operation" id="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="number" name="b" id="b" value="">
        <input type="submit" value="=">
        <input type="number" name="result" id="result" value="<?php 
        if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["operation"])) {
        $a = $_GET["a"];
        $b = $_GET["b"];
        $operation = $_GET["operation"];
        echo calcul($a, $operation, $b);
    } 
    ?>">
    </form>
    <br>
    <br>
    <?php
        if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["operation"])) {
            $a = $_GET["a"];
            $b = $_GET["b"];
            $operation = $_GET["operation"];
            echo "$a $operation $b";
        }
    ?>
</body>
</html>