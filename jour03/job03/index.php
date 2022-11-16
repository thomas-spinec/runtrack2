<!-- Partie PHP -->
<?php
    $str = "I'm sorry Dave I'm afraid I can't do that.";
    $voyelles = ["a", "e", "i", "o", "u", "y"];
    $maj = ["A", "E", "I", "O", "U", "Y"];
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 3 job03</title>
</head>
<body>
    <h1>jour 3 job03</h1>
    <br>
    <p><?php 
        for($i=0; isset($str[$i]); $i++){
            for($j=0; isset($voyelles[$j]); $j++){
                if($str[$i] === $voyelles[$j] OR $str[$i] === $maj[$j]){  // cherche dans les voyelles en majuscule et en minuscule
                    echo $str[$i]; //affichage des voyelles uniquement
                }
            }
        }
    ?></p>
</body>
</html>