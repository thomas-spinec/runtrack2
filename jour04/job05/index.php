<!-- Partie PHP -->
<?php
$Rambo = "C'est pas ma guerre";
$Autre = "Votre pire cauchemar";
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 4 job05</title>
</head>
<body>
    <h1>jour 4 job05</h1>
    <br>
    <h3>Voici le formulaire (méthode 'post'):</h3>
    <p>Méthode POST et pas GET pour éviter d'afficher le mot de passe en clair</p>
    <br>

    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" require>
        <br>
        <br>
        <label for="password">Password :</label>
        <input type="text" name="password" id="password" require>
        <br>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <p><?php 

        if (isset($_POST['username']) && isset($_POST['password'])){
            if ($_POST['username'] == "John" && $_POST['password'] == "Rambo"){ // vérification de la similitude avec ces info pour afficher une phrase particulière
                echo $Rambo;
            } else {
                echo $Autre;
            }
        }

    ?></p>
</body>
</html>