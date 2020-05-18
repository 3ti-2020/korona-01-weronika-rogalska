<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="dane.css">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rogalska";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $result = $conn -> query("SELECT  epoka, malarz, tytul FROM obrazy, epoka where obrazy.wiek=epoka.wiek");

    echo("<table class='tabelka_moja'>");
    echo("<tr>
    <th>epoka</th>
    <th>malarz</th>
    <th>tytul</th>
    </tr>");

    while($row = $result -> fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row['epoka']."</td>");
            echo("<td>".$row['malarz']."</td>");
            echo("<td>".$row['tytul']."</td>");
        echo("</tr>");
    }

    echo("</table>");


    ?>
</body>
</html>