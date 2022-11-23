<!-- Partie PHP -->
<?php

    //incrémentation cookie
    if (isset($_COOKIE['nbvisites'])) {

        setcookie('nbvisites', $_COOKIE['nbvisites'] + 1, time() + 365*24*3600); //dure 1 an

    }
    else {
        setcookie('nbvisites', '1', time() + 365*24*3600);
    }
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job02</title>
</head>
<body>
    <h1>Les sessions/cookies</h1>
    <h2>jour 8 job02</h2>

    <form action="" method="post">
        <br>
        <br>
        <label for="reset">Remettre à zéro le compteur de visite :</label><br>
        <input type='submit' value='reset' name='reset'>
        <br>
        <br>
    </form>

    <?php
    //reset de cookie
    if (isset($_POST['reset'])) {
        setcookie('nbvisites', '1', time() -3600);
        setcookie('nbvisites', '1', time() + 365*24*3600);
        $_COOKIE['nbvisites'] = 1;
    }

    ?>

    <?php
    echo 'La page a été visité <b>' . $_COOKIE['nbvisites'] . '</b> fois';
    ?>
</body>
</html>