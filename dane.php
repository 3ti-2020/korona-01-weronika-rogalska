<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
	<div class="container_2">
		<div class="przyciski item">
			<button class="btn1">Epoki</button>
			<button class="btn2">Obrazy</button>
			<button class="btn3">+++</button>
		</div>
		<div class="tabelka item">
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "rogalska";

		$conn = new mysqli($servername, $username, $password, $dbname);

		echo("<div class='item1'>");
		$result = $conn -> query("SELECT * FROM epoka");
		echo("<h1>EPOKI</h1>");
		echo("<table class='tabelka_moja'>");
		echo("<tr>
		<th>id</th>
		<th>wiek</th>
		<th>epoka</th>
		</tr>");
		while($row = $result -> fetch_assoc()){
			echo("<tr>");
				echo("<td>".$row['id']."</td>");
				echo("<td>".$row['wiek']."</td>");
				echo("<td>".$row['epoka']."</td>");
			echo("</tr>");
		}
		echo("</table>");
		echo("</div>");

		echo("<div class='item2'>");
		$result = $conn -> query("SELECT * FROM obrazy");
		echo("<h1>OBRAZY</h1>");
		echo("<table class='tabelka_moja'>");
		echo("<tr>
		<th>wiek</th>
		<th>malarz</th>
		<th>tytul</th>
		</tr>");
		while($row = $result -> fetch_assoc()){
			echo("<tr>");
				echo("<td>".$row['wiek']."</td>");
				echo("<td>".$row['malarz']."</td>");
				echo("<td>".$row['tytul']."</td>");
			echo("</tr>");
		}
		echo("</table>");
		echo("</div>");

		echo("<div class='item3'>");
		$result = $conn -> query("SELECT  epoka, malarz, tytul FROM obrazy, epoka where obrazy.wiek=epoka.wiek");
		echo("<h1>+++</h1>");
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
		echo("<div>");

		?>
		</div>
	</div>
	<script src="dane.js"></script>
</body>
</html>