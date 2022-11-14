<!-- Partie PHP -->
<?php
$str = 'LaPlateforme';
$str2 = 'Vive';
$str3 = '!';

$val = 6;
$myBool = false
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 1 job01</title>
</head>
<body>
    <h1>jour 1 job01</h1>
    <h3><?php echo $str2 . ' ' . $str . ' ' . $str3; ?></h3>
    <br>
    <p>La variable "val" contient <?php echo $val?></p>
    <br>
    <p>La variable "val" devient <?php echo $val + 4?> en y ajoutant 4</p>
    <br>
    <p>La variable "myBool" contient <?php echo $myBool ?></p>
</body>
</html>