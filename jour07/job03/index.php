<!-- Partie PHP -->
<?php

    function getHello(){
        return "Hello LaPlateforme!";
    }
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 7 job03</title>
</head>
<body>
    <h1>Les fonctions</h1>
    <br>
    <h1>jour 7 job03</h1>
    <br>
    <br>
    <?php
        $str = getHello();
        echo $str;
    ?>

</body>
</html>