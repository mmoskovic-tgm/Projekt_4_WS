<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FamArch</title>
	
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="style.css" >
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="uebersicht.php">Übersicht</a></li>
        <li><a href="badges.html">Personen</a></li>
        <li><a href="collapsible.html">Suche</a></li>
      </ul>
    </div>
  </nav>
	
	<table>
		
		<!-- Tablle 1 mit Bild und Lebensdaten -->
		<tr>
			<table class="nahansichtGesamtTabelle">
				<tr>
					<td><img src="img/testImg/person.jpg" width="300px" height="300px"></td>
					<td>
						
						<div class="lebensdatenHeadingBox">
							<i class="material-icons editPersonIcon">
								<a href="nahansicht-bearbeiten.php">
									<img src="img/edit.png" width="20px" height="20px">
								</a>
							</i>
							<h2 class="lebensdatenHeading">Lebensdaten</h2>
							
							
						</div>
	
						<table class="wichtigeLebensdaten">
							<tr>
								<td>Vorname</td>
								<td><?php echo $person['vorname']?></td>
							</tr>
							<tr>
								<td>Nachname</td>
								<td><?php echo $person['nachname']?></td>
							</tr>
							<tr>
								<td>Geburtsort</td>
								<td><?php echo $person['gebOrt']?></td>
							</tr>
							<tr>
								<td>Geburtsdatum</td>
								<td><?php echo $person['gebDatum']?></td>
							</tr>
						</table>
						
					</td>
				</tr>
			</table>
			
		</tr>
		
		<br>
		
		<!-- Tablle 2 mit Persoenlichkeitsmerkmalen -->
		<tr>
			<td>
			<h2> Persönlichkeitsmerkmale</h2>
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
			</td>
		</tr>
			
		
		
		<!-- Tablle 3 mit Charakteristischen Merkmalen -->
		<tr>
			<td>
			<h2>Charakteristische Merkmale</h2>
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
			</td>
		</tr>
			
	
	</table>
	
	
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>