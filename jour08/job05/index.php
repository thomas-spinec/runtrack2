<!-- Partie PHP -->
<?php
    session_start();

    if (!isset($_SESSION['tour'])){
        $_SESSION['tour'] = 1;
    }

    // Définition du joueur (X ou O) dans une variable session pour qu'il le garde en mémoire
    if (!isset($_SESSION['joueur'])){
        $_SESSION['joueur'] = 'X';
    }

    function jeu($case){
        if ($_SESSION['tour'] % 2 != 0){
            $_SESSION[$case] = 'X';
        }
        else {
            $_SESSION[$case] = 'O';
        }
    }

    function chgmt_joueur(){
        if ($_SESSION['tour'] % 2 == 0){
            $_SESSION['joueur'] = 'O';
        }
        else {
            $_SESSION['joueur'] = 'X';
        }
    }

    function victoire(){
        //lignes
                                     // JE NE SAIS PAS POURQUOI çA NE FONCTIONNE PAS AVEC LA BOUCLE FOR //
        // for ($i=1; $i < 8; $i +3){
        //     if (isset($_SESSION['case' . $i]) && isset($_SESSION['case' . $i+1]) && isset($_SESSION['case' . $i+2])){
        //         if ($_SESSION['case' . $i] == $_SESSION['case' . $i+1] && $_SESSION['case' . $i] == $_SESSION['case' . $i+2]){
        //             return 'gagné';
        //         }
        //     }
        // }
        if (isset($_SESSION['case1']) && isset($_SESSION['case2']) && isset($_SESSION['case3'])){
            if ($_SESSION['case1'] == $_SESSION['case2'] && $_SESSION['case2'] == $_SESSION['case3']){
                return 'gagné';
            }
        }
        if (isset($_SESSION['case4']) && isset($_SESSION['case5']) && isset($_SESSION['case6'])){
            if ($_SESSION['case4'] == $_SESSION['case5'] && $_SESSION['case5'] == $_SESSION['case6']){
                return 'gagné';
            }
        }
        if (isset($_SESSION['case7']) && isset($_SESSION['case8']) && isset($_SESSION['case9'])){
            if ($_SESSION['case7'] == $_SESSION['case8'] && $_SESSION['case8'] == $_SESSION['case9']){
                return 'gagné';
            }
        }
        //colonnes
        for ($i=1; $i < 4; $i++) { 
            if (isset($_SESSION['case' . $i]) && isset($_SESSION['case' . $i+3]) && isset($_SESSION['case' . $i+6])){
                if ($_SESSION['case' . $i] == $_SESSION['case' . $i+3] && $_SESSION['case' . $i+3] == $_SESSION['case' . $i+6]){
                    return 'gagné';
                }
            }
        }
        //diagonales
        if (isset($_SESSION['case1']) && isset($_SESSION['case5']) && isset($_SESSION['case9'])){
            if ($_SESSION['case1'] == $_SESSION['case5'] && $_SESSION['case5'] == $_SESSION['case9']){
                return 'gagné';
            }
        }
        if (isset($_SESSION['case3']) && isset($_SESSION['case5']) && isset($_SESSION['case7'])){
            if ($_SESSION['case3'] == $_SESSION['case5'] && $_SESSION['case5'] == $_SESSION['case7']){
                return 'gagné';
            }
        }
        //match nul
        $count = 0;
        for ($i=1; $i < 10; $i++) { 
            if (isset($_SESSION['case' . $i])){
                $count++;
            }
        }
        if ($count == 9){
            return 'match nul';
        }
        return 1;
    }
    // RESET //

    function reset_fun(){
        for ($i = 1; $i < 10; $i++){
            if (isset($_SESSION['case' . $i])){
                $_SESSION["case$i"] = null;
            }
            if (isset($_POST['case' . $i])){
                $_POST["case$i"] == null;
            }
        }
        $_SESSION['joueur'] = 'X';
        $_SESSION['tour'] = 0;
    }

    if (isset($_POST['reset'])){
        for ($i = 1; $i < 10; $i++){
            if (isset($_SESSION['case' . $i])){
                $_SESSION["case$i"] = null;
            }
            if (isset($_POST['case' . $i])){
                $_POST["case$i"] == null;
            }
        }
        $_SESSION['joueur'] = 'X';
        $_SESSION['tour'] = 0;
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
    <br>
    <br>
    <!-- Tableau -->
    <table border : solid>
        <tr> <!-- 1ère ligne -->
            <td>
                    <?php
                        if (isset($_SESSION['case1'])){
                            echo $_SESSION['case1'];
                            victoire();
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
                        if (isset($_SESSION['case2'])){
                            echo $_SESSION['case2'];
                            victoire();
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
                        if (isset($_SESSION['case3'])){
                            echo $_SESSION['case3'];
                            victoire();
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
                        if (isset($_SESSION['case4'])){
                            echo $_SESSION['case4'];
                            victoire();
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
                        if (isset($_SESSION['case5'])){
                            echo $_SESSION['case5'];
                            victoire();
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
                        if (isset($_SESSION['case6'])){
                            echo $_SESSION['case6'];
                            victoire();
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
                        if (isset($_SESSION['case7'])){
                            echo $_SESSION['case7'];
                            victoire();
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
                        if (isset($_SESSION['case8'])){
                            echo $_SESSION['case8'];
                            victoire();
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
                        if (isset($_SESSION['case9'])){
                            echo $_SESSION['case9'];
                            victoire();
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
    <?php // Verification victoire //
        if (victoire() == 'gagné'){
            echo '<br>';
            echo 'Victoire du joueur ' . $_SESSION['joueur'];
            reset_fun();
            echo '<br>';
        }
        else if (victoire() == 'match nul'){
            echo '<br>';
            echo "Match nul!";
            reset_fun();
            echo '<br>';
        }
        else{
            $_SESSION['tour']++;
            chgmt_joueur();
            echo 'Au tour du joueur '. $_SESSION['joueur'];
            echo '<br>';
            echo 'tour : ' . $_SESSION['tour'];
        }
    ?>

</body>
</html>