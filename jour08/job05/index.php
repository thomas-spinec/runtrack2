<!-- Partie PHP -->
<?php

if (isset($joueur)){
    $joueur = 'X';
}


function jeu($case, $joueur){

    setcookie($case, $joueur, time() + 365*24*3600);
    $_COOKIE[$case] = $joueur;
    if ($joueur == 'X'){
        $joueur = 'O';
    }
    else {
        $joueur = 'X';
    }

}


function victoire(){
    //lignes

    if (isset($_COOKIE['case1']) && isset($_COOKIE['case2']) && isset($_COOKIE['case3'])){
        if ($_COOKIE['case1'] == $_COOKIE['case2'] && $_COOKIE['case2'] == $_COOKIE['case3']){
            return 0;
        }
    }
    if (isset($_COOKIE['case4']) && isset($_COOKIE['case5']) && isset($_COOKIE['case6'])){
        if ($_COOKIE['case4'] == $_COOKIE['case5'] && $_COOKIE['case5'] == $_COOKIE['case6']){
            return 0;
        }
    }
    if (isset($_COOKIE['case7']) && isset($_COOKIE['case8']) && isset($_COOKIE['case9'])){
        if ($_COOKIE['case7'] == $_COOKIE['case8'] && $_COOKIE['case8'] == $_COOKIE['case9']){
            return 0;
        }
    }
    //colonnes
    for ($i=1; $i < 4; $i++) { 
        if (isset($_COOKIE['case' . $i]) && isset($_COOKIE['case' . $i+3]) && isset($_COOKIE['case' . $i+6])){
            if ($_COOKIE['case' . $i] == $_COOKIE['case' . $i+3] && $_COOKIE['case' . $i+3] == $_COOKIE['case' . $i+6]){
                return 0;
            }
        }
    }
    //diagonales
    if (isset($_COOKIE['case1']) && isset($_COOKIE['case5']) && isset($_COOKIE['case9'])){
        if ($_COOKIE['case1'] == $_COOKIE['case5'] && $_COOKIE['case5'] == $_COOKIE['case9']){
            return 0;
        }
    }
    if (isset($_COOKIE['case3']) && isset($_COOKIE['case5']) && isset($_COOKIE['case7'])){
        if ($_COOKIE['case3'] == $_COOKIE['case5'] && $_COOKIE['case5'] == $_COOKIE['case7']){
            return 0;
        }
    }
    //match nul
    $count = 0;
    for ($i=1; $i < 10; $i++) { 
        if (!isset($_COOKIE['case' . $i])){
            $count++;
        }
    }
    if ($count == 0){
        return 2;
    }
    return 1;
}

// RESET //
if (isset($_POST['reset'])){
    for ($i = 1; $i < 10; $i++){
        if (isset($_COOKIE['case' . $i])){
            setcookie('case' . $i, '', time() - 3600);
        $_COOKIE["case$i"] = null;
        }
        if (isset($_POST['case' . $i])){
            $_POST["case$i"] == null;
        }
    }
    $_POST['jouer']= null;
    $joueur ="X";
}


?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job05</title>
</head>
<body>
    <h1>morpion</h1>
    <h2>jour 8 job05</h2>
    <br>
    <br>
    <?php
    // if (!isset($_POST['jouer'])){
    //     echo "<form action='' method='post'>
    //     <input type='submit' value='jouer' name= 'jouer'>
    // </form>";
    // }
    // echo '<br>';
    // echo '<br>';
    ?>
    <?php
        // JEU //
        $joueur= 'X';
        while (victoire() == 1){
            if (isset($_POST['reset'])){
                break;
            }
            if (isset($_POST['case1'])){
                jeu('case1', $joueur);
            }
            if (isset($_POST['case2'])){
                jeu('case2', $joueur);
            }
            if (isset($_POST['case3'])){
                jeu('case3', $joueur);
            }
            if (isset($_POST['case4'])){
                jeu('case4', $joueur);
            }
            if (isset($_POST['case5'])){
                jeu('case5', $joueur);
            }
            if (isset($_POST['case6'])){
                jeu('case6', $joueur);
            }
            if (isset($_POST['case7'])){
                jeu('case7', $joueur);
            }
            if (isset($_POST['case8'])){
                jeu('case8', $joueur);
            }
            if (isset($_POST['case9'])){
                jeu('case9', $joueur);
            }
        }

        if (victoire() == 0){
            echo "Victoire du joueur $joueur";
        }
        else if (victoire() == 2){
            echo "Match nul! cliquez sur le bouton reset";
        }
    ?>
    <!-- jeu -->
    <table border : solid>
        <tr> <!-- 1ère ligne -->
            <td>
                <form action="" method="post">
                    <?php
                        if (isset($_POST['case1'])) {
                            echo $joueur;
                            $case1 = $_POST['case1'];
                        }
                        else {
                            echo "<input type='submit' value='-' name='case1'>";
                        }
                    ?>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <?php
                        if (isset($_POST['case2'])) {
                            echo $joueur;
                            $case2 = $_POST['case2'];
                        }
                        else {
                            echo "<input type='submit' value='-' name='case2'>";
                        }
                    ?>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <?php
                        if (isset($_POST['case3'])) {
                            echo $joueur;
                            $case3 = $_POST['case3'];
                        }
                        else {
                            echo "<input type='submit' value='-' name='case3'>";
                        }
                    ?>
                </form>
            </td>
        </tr>
        <tr> <!-- 2ère ligne -->
            <td>
                <form action="" method="post">
                    <?php
                        if (isset($_POST['case4'])) {
                            echo $joueur;
                            $case4 = $_POST['case4'];
                        }
                        else {
                            echo "<input type='submit' value='-' name='case4'>";
                        }
                    ?>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <?php
                        if (isset($_POST['case5'])) {
                            echo $joueur;
                            $case5 = $_POST['case5'];
                        }
                        else {
                            echo "<input type='submit' value='-' name='case5'>";
                        }
                    ?>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <?php
                        if (isset($_POST['case6'])) {
                            echo $joueur;
                            $case6 = $_POST['case6'];
                        }
                        else {
                            echo "<input type='submit' value='-' name='case6'>";
                        }
                    ?>
                </form>
            </td>
        </tr>
        <tr> <!-- 3ère ligne -->
            <td>
                <form action="" method="post">
                    <?php
                        if (isset($_POST['case7'])) {
                            echo $joueur;
                            $case7 = $_POST['case7'];
                        }
                        else {
                            echo "<input type='submit' value='-' name='case7'>";
                        }
                    ?>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <?php
                        if (isset($_POST['case8'])) {
                            echo $joueur;
                            $case8 = $_POST['case8'];
                        }
                        else {
                            echo "<input type='submit' value='-' name='case8'>";
                        }
                    ?>
                </form>
            </td>
            <td>
                <form action="" method="post">
                    <?php
                        if (isset($_POST['case9'])) {
                            echo $joueur;
                            $case9 = $_POST['case9'];
                        }
                        else {
                            echo "<input type='submit' value='-' name='case9'>";
                        }
                    ?>
                </form>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <form action="" method="post">
        <input type="submit" value="reset" name="reset">
    </form>

</body>
</html>