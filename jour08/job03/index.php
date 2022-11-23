<!-- Partie PHP -->
<?php
    session_start();
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job03</title>
</head>
<body>
    <h1>Les sessions/cookies</h1>
    <h2>jour 8 job03</h2>
    <br>
    <br>
    <form action="" method="post">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="submit" value="Envoyer">
    </form>
    <br>
    <br>
    <?php
        // Empêcher de mettre 2 fois le même prénom (pas nécessaire)

        // if (isset($_POST['prenom'])) {
        //     if (isset($_SESSION['prenom'])) {
        //         foreach ($_SESSION['prenom'] as $index => $value){
        //             if ($_POST['prenom'] == $value) {
        //                 break;
        //             }
        //             else {
        //                 $_SESSION['prenom'][] = $_POST['prenom'];
        //                 break;
        //             }
        //         }
        //     }
        //     else {
        //         $_SESSION['prenom'][] = $_POST['prenom'];
        //     }
        // }

        // Ajouter le prénom dans le tableau
        if (isset($_POST['prenom'])) {
            $_SESSION['prenom'][] = $_POST['prenom'];
        }

    ?>

    <ul>
        <?php
            if (isset($_SESSION['prenom'])) {
                foreach ($_SESSION['prenom'] as $index => $value) {
                    echo '<li>' . $value . '</li>';
                } 
            }
        ?>
    </ul>

    <form action="" method="post">
        <br>
        <br>
        <label for="reset">Effacez la liste de prénom :</label><br>
        <input type='submit' value='reset' name='reset'>
        <br>
        <br>
    </form>

    <?php
    //reset de cookie
    if (isset($_POST['reset'])) {
        unset($_SESSION['prenom']);
    }

    ?>

</body>
</html>