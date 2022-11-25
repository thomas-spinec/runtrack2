<!--  Partie PHP -->
<?php
    // connexion à la base de donnée
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');

    // requête
    $request = $mysqli -> query("select nom, capacite from salles");

    // affichage

    // $result_all = $request -> fetch_all();
    // var_dump($result_all);

    // while(($result_array = $request -> fetch_array()) != null){
    //     var_dump($result_array);
    //     echo "<br>";
    //     echo $result_array[1];

    // }


?>

<!--  Partie HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <title>job02 jour 10</title>
</head>

<body>
    <h1>SQL + PHP</h1>
    <h3>job02 jour 10</h3>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while(($result = $request -> fetch_array()) != null)
                {
                    echo "<tr>";
                    echo "<td>".$result['nom']."</td>";
                    echo "<td>".$result['capacite']."</td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>