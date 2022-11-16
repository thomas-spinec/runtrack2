<!-- Partie PHP -->
<?php
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";
    $voy = ["a", "e", "i", "o", "u", "y"];
    $maj = ["A", "E", "I", "O", "U", "Y"];
    $nb_voy = 0;
    $nb_cons = 0;
    $dic = [
        "voyelles" => 0,
        "consonnes" => 0
    ];
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
    <p><?php 
        echo "<b>$str</b><br><br>";
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
</body>
</html>