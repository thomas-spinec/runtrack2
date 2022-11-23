<!-- Partie PHP -->
<?php
    session_start();
    
    //opérateur ternaire
    // Si la variable est déjà créée, rajouter 1, sinon juste écrire 1
    isset($_SESSION['nbvisites']) ?  $_SESSION['nbvisites']++ : $_SESSION['nbvisites'] = 1;

?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job01</title>
</head>
<body>
    <h1>Les sessions/cookies</h1>
    <h2>jour 8 job01</h2>

    <form action="" method="post">
        <br>
        <br>
        <label for="reset">Remettre à zéro le compteur de visite :</label><br>
        <input type='submit' value='reset' name='reset'>
        <br>
        <br>
    </form>

    <?php
        if (isset($_POST['reset'])) {
            $_SESSION['nbvisites'] = 1;
        }
        echo 'La page a été visité <b>' . $_SESSION['nbvisites'] . '</b> fois';
    ?>
</body>
</html>