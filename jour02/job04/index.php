<!-- Partie PHP -->
<?php
// inutile dans ce job
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 2 job04</title>
</head>
<body>
    <h1>jour 2 job04</h1>
    <br>
    <p><?php 
        for($i=1; $i<=100; $i++){
            if($i % 3 === 0 && $i % 5 === 0){ //multiple de 3 ET 5
                echo "<b><u>FizzBuzz</u></b><br>";
            }
            else if($i % 3 === 0){ //multiple de 3
                echo "<b>Fizz</b><br>";
            }
            else if($i % 5 === 0){  //multiple de 5
                echo "<u>Buzz</u><br>";
            }
            else{ // les autres
                echo "$i<br>";
            }
        }
    ?></p>
</body>
</html>