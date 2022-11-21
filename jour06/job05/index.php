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
    <?php
        if(isset($_GET["style"])){
            $style = $_GET["style"];
            if ($style != ""){
                echo "<link rel='stylesheet' href='".$style.".css'>";
            }
            else {
                echo "<link rel='stylesheet' href='style1.css'>";
            }
            
        }
        else{
            echo "<link rel='stylesheet' href='style1.css'>";
        }
    ?>
    <title>jour 6 job05</title>
</head>
<body>
    <h1>jour 6 job05</h1>
    <br>
    <h3>Voici le formulaire :</h3>
    <br>

    <div>
        <form action="" method="get">
            <label for="style_select">Choisissez un style :</label>
            <select name="style" id="style-select">
                <option value="">--Choisissez une option--</option>
                <option value="style1">style1 (par défaut)</option>
                <option value="style2">style2</option>
                <option value="style3">style3</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Envoyer" id="button">
        </form>
    </div>
    <br>
    <br>

</body>
</html>