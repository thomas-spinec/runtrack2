<!-- Partie PHP -->
<?php
$str = 'Hello';

$integer = 4;

$myBool = true;

$float = 4.4;
?>

<!-- Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 1 job03</title>
</head>
<body>
    <h1>jour 1 job03</h1>
    <table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>

        <tr>
            <td>chaîne de caractères</td>
            <td>str</td>
            <td><?php echo $str; ?></td>
        </tr>

        <tr>
            <td>entier</td>
            <td>integer</td>
            <td><?php echo $integer; ?></td>
        </tr>

        <tr>
            <td>booléen</td>
            <td>myBool</td>
            <td><?php echo $myBool; ?></td> 
        </tr>

        <tr>
            <td>nombre à virgule flottante</td>
            <td>float</td>
            <td><?php echo $float; ?></td>
        </tr>
        
    </table>
</body>
</html>

