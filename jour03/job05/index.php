<!-- Partie PHP -->
<?php
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";
    $voy = ["a", "e", "i", "o", "u", "y"];
    $maj = ["A", "E", "I", "O", "U", "Y"];
    $voy2 = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    $cons = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z"];
    $dic = [
        "voyelles" => 0,
        "consonnes" => 0
    ];
    $dic2 = [
        "voyelles" => $voy2,
        "consonnes" => $cons
    ];
    $nb_voy = 0;
    $nb_cons = 0;
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 3 job05</title>
</head>
<body>
    <h1>jour 3 job05</h1>
    <br>
    <?php
        echo "<b>$str</b><br><br>";
    ?>
    <br>
    <h2>Avec un tableau pour les voyelles seulement</h2>
    <p><?php
        for($i=0; isset($str[$i]); $i++){
            for($j=0; $j<6; $j++){
                if($str[$i] === $voy[$j] OR $str[$i] === $maj[$j]){  // cherche dans les voyelles en majuscule et en minuscule
                    $dic["voyelles"]++;
                    break;
                }
                else if($j==5 AND $str[$i]!=" " AND $str[$i]!="'" AND $str[$i]!="." AND $str[$i]!=","){
                    $dic["consonnes"]++;
                }
            }
        }
    ?></p>
    <table border : 1px> <!-- Affichage du Tableau -->
        <tr>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
        <tr>
            <td><?php echo $dic["consonnes"] ?></td>
            <td><?php echo $dic["voyelles"] ?></td>
        </tr>
    </table>
    <br>
    <h2>Avec un tableau multidimensionnel</h2>
    <br>
    <p><?php
        for ($i=0; isset($str[$i]); $i++){
            foreach($dic2 as $type => $letters){
                if ($type === "voyelles"){
                    for($j=0; $j<12; $j++){
                        if($str[$i] === $letters[$j]){
                            $nb_voy++;
                        }
                    }
                }
                else if ($type === "consonnes"){
                    for($j=0; $j<42; $j++){
                        if($str[$i] === $letters[$j]){
                            $nb_cons++;
                        }
                    }
                }
            }
        }
    ?></p>
     <table border : 1px> <!-- Affichage du Tableau -->
        <tr>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
        <tr>
            <td><?php echo $nb_cons ?></td>
            <td><?php echo $nb_voy ?></td>
        </tr>
    </table>
</body>
</html>