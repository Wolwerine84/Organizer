<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1f - Einfaches Rechnen mit PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<h1>Zauberei mit Geometrie</h1>
	<p>Dieser Computer ist ein Mathe-Genie! Beweis gefällig?</p>
	<form action="auswertung.php" method="post">
		<fieldset>
			<legend>Rechteck - Maße</legend>

			<label for="tfBreite">Breite des Rechtecks:</label>
			<input type="number" id="tfBreite" name="tfBreite" value="6">
			<br><br>
			<label for="tfLaenge">Länge des Rechtecks</label>
			<input type="number" id="tfLaenge" name="tflaenge" value="4">

			<input type="submit" id="btAbschicken" name="btAbschicken" value="Berechnen!">
		</fieldset>
	</form>
</body>

</html>