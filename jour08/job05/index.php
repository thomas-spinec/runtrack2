<!-- Partie PHP -->
<?php

// Définition du joueur (X ou O) dans un cookie pour qu'il le garde en mémoire
if (!isset($_COOKIE['joueur'])){
    setcookie('joueur', 'X', time() + 365*24*3600);
    $_COOKIE['joueur'] = 'X';
}

function jeu($case){
    $symbole = $_COOKIE['joueur'];
    setcookie("$case", $symbole, time() + 365*24*3600);
    $_COOKIE[$case] = $symbole;
    victoire();
}

function chgmt_joueur(){
    if ($_COOKIE['joueur'] == 'X'){
        $_COOKIE['joueur'] = 'O';
    }
    else {
        $_COOKIE['joueur'] = 'X';
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
        if (isset($_COOKIE['case' . $i])){
            $count++;
        }
    }
    if ($count == 9){
        return 2;
    }
    return 1;
}
// RESET //

function reset_fun(){
        for ($i = 1; $i < 10; $i++){
        if (isset($_COOKIE['case' . $i])){
            setcookie('case' . $i, '', time() - 3600);
        $_COOKIE["case$i"] = null;
        }
        if (isset($_POST['case' . $i])){
            $_POST["case$i"] == null;
        }
    }
    for ($i = 0; $i <9; $i++){
    }
    $_COOKIE['joueur'] = 'X';
}

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
    for ($i = 0; $i <9; $i++){
    }
    $_COOKIE['joueur'] = 'X';
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
    <?php  // JEU //
        if (isset($_POST['case1'])){
            $case1 = 'case1';
            jeu($case1);
        }
        if (isset($_POST['case2'])){
            $case2 = 'case2';
            jeu($case2);
        }
        if (isset($_POST['case3'])){
            $case3 = 'case3';
            jeu($case3);
        }
        if (isset($_POST['case4'])){
            $case4 = 'case4';
            jeu($case4 );
        }
        if (isset($_POST['case5'])){
            $case5 = 'case5';
            jeu($case5 );
        }
        if (isset($_POST['case6'])){
            $case6 = 'case6';
            jeu($case6 );
        }
        if (isset($_POST['case7'])){
            $case7 = 'case7';
            jeu($case7 );
        }
        if (isset($_POST['case8'])){
            $case8 = 'case8';
            jeu($case8 );
        }
        if (isset($_POST['case9'])){
            $case9 = 'case9';
            jeu($case9 );
        }
        // FIN JEU //
    ?>
    <?php // Verification victoire //
        if (victoire() == 0){
            echo 'Victoire du joueur ' . $_COOKIE['joueur'];
            echo sleep(1);
            reset_fun();
        }
        else if (victoire() == 2){
            echo "Match nul!";
            echo sleep(1);
            reset_fun();
        }
    ?>
    <br>
    <br>
    <!-- Tableau -->
    <table border : solid>
        <tr> <!-- 1ère ligne -->
            <td>
                    <?php
                        if (isset($_COOKIE['case1'])){
                            echo $_COOKIE['joueur'];
                            chgmt_joueur();
                        }
                        else {
                            echo "<form action='' method='post'>
                            <input type='submit' value='-' name='case1'>
                            </form>";
                        }
                    ?>
                
            </td>
            <td>
                    <?php
                        if (isset($_COOKIE['case2'])){
                            echo $_COOKIE['joueur'];
                            chgmt_joueur();
                        }
                        else {
                            echo "<form action='' method='post'>
                            <input type='submit' value='-' name='case2'>
                            </form>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if (isset($_COOKIE['case3'])){
                            echo $_COOKIE['joueur'];
                            chgmt_joueur();
                        }
                        else {
                            echo "<form action='' method='post'>
                            <input type='submit' value='-' name='case3'>
                            </form>";
                        }
                    ?>
            </td>
        </tr>
        <tr> <!-- 2ème ligne -->
            <td>
                    <?php
                        if (isset($_COOKIE['case4'])){
                            echo $_COOKIE['joueur'];
                            chgmt_joueur();
                        }
                        else {
                            echo "<form action='' method='post'>
                            <input type='submit' value='-' name='case4'>
                            </form>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if (isset($_COOKIE['case5'])){
                            echo $_COOKIE['joueur'];
                            chgmt_joueur();
                        }
                        else {
                            echo "<form action='' method='post'>
                            <input type='submit' value='-' name='case5'>
                            </form>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if (isset($_COOKIE['case6'])){
                            echo $_COOKIE['joueur'];
                            chgmt_joueur();
                        }
                        else {
                            echo "<form action='' method='post'>
                            <input type='submit' value='-' name='case6'>
                            </form>";
                        }
                    ?>
            </td>
        </tr>
        <tr> <!-- 3ème ligne -->
            <td>
                    <?php
                        if (isset($_COOKIE['case7'])){
                            echo $_COOKIE['joueur'];
                            chgmt_joueur();
                        }
                        else {
                            echo "<form action='' method='post'>
                            <input type='submit' value='-' name='case7'>
                            </form>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if (isset($_COOKIE['case8'])){
                            echo $_COOKIE['joueur'];
                            chgmt_joueur();
                        }
                        else {
                            echo "<form action='' method='post'>
                            <input type='submit' value='-' name='case8'>
                            </form>";
                        }
                    ?>
            </td>
            <td>
                    <?php
                        if (isset($_COOKIE['case9'])){
                            echo $_COOKIE['joueur'];
                            chgmt_joueur();
                        }
                        else {
                            echo "<form action='' method='post'>
                            <input type='submit' value='-' name='case9'>
                            </form>";
                        }
                    ?>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <form action="" method="post">
        <input type="submit" value="reset" name="reset">
    </form>
    <br>
    <br>
    <?php
        echo 'Au tour du joueur '. $_COOKIE['joueur'];
        echo '<br>';
    ?>
    <?php
        var_dump($_COOKIE);
        echo '<br>';
    ?>


</body>
</html>