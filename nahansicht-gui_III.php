<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>FamArch</title>
	
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection">
	<link rel="stylesheet" href="style.css">
														   
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="nahansichtFonttype">
	<nav>
    <div class="nav-wrapper grey darken-4">	
		<!--<img src="img/logo.png" class="brand-logo" width="3.5%" height="90%" hspace="20">	-->	
		<a href="index.php" class="brand-logo logo">FamArch</a>
    	<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="uebersicht.php" class="navBar">Übersicht</a></li>
			<li><a href="#" class="navBar">Personen</a></li>
			<li><a href="#" class="navBar">Suche</a></li>
     	</ul>
    </div>
  </nav>
	<p align="right">		
		<a href="nahansicht.php?curPerson=<?php echo $curPerson; ?>&stammblattnr=1" class='btn grey' value="0">I</a>
		<a href="nahansicht.php?curPerson=<?php echo $curPerson; ?>&stammblattnr=2" class='btn grey' value="0">II</a>
		<a href="nahansicht.php?curPerson=<?php echo $curPerson; ?>&stammblattnr=3" class='btn grey' value="0">III</a>
		<a href="nahansicht.php?curPerson=<?php echo $curPerson; ?>&stammblattnr=4" class='btn grey' value="0">IV</a>
	</p>

	<br>
	
	<h4 style="margin-left:10%;"><b>Teil III:</b> Folgende <b>Arten von Objekten</b> sind von <br><?php echo $person['nachname']?> <?php echo $person['vorname']?> <br>im Archiv:</h4>
	<br>
	<h5 style="margin-left:10%;">
		1. WERKE/TÄTIGKEITEN:
	</h5>
	<h5 style="margin-left:10%;">
		2. LEBENSDOKUMENTE:
	</h5>
	<h5 style="margin-left:10%;">
		3. SONSTIGE DOKUMENTATIONEN:
	</h5>
	<h5 style="margin-left:10%;">
		4. KORRESPONDENZ:
	</h5>	
		
	  </div>


</body></html>