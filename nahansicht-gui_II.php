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
	<?php
		echo $meldung;
	?>
	
	<div class="nahansichtFonttype">
	<nav>
    <div class="nav-wrapper grey darken-4">	
		<!--<img src="img/logo.png" class="brand-logo" width="3.5%" height="90%" hspace="20">	-->	
		<a href="index.php" class="brand-logo logo">FamArch</a>
    	<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="uebersicht.php" class="navBar">Übersicht</a></li>
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
	
	<h4 style="margin-left:10%"><b>Teil II:</b> Persönlichkeitsmerkmale von <?php echo $person['nachname']?> <?php echo $person['vorname']?> (soweit bekannt)</h4>
		<?php if($bearbeiten==true){
				echo "<form id=\"editform\" action=\"nahansicht.php?curPerson=" . $curPerson . "&stammblattnr=2&edit=false\" method=\"POST\" >";
			  }
		?>
		<?php 
			if($bearbeiten==false){
				echo "<a href=\"nahansicht.php?curPerson=" . $curPerson . "&stammblattnr=2&edit=true\" class=\"btn-flat editBtn\" ><img src=\"img/edit.png\" alt=\"Bearbeitung\" class=\"editIcon\"></a>";
			}
			else {
				//echo "<a href=\"nahansicht.php?curPerson=" . $curPerson . "&stammblattnr=1&edit=false\" class=\"btn-flat editBtn\" ><img src=\"img/save.png\" alt=\"Bearbeitung\" class=\"editIcon\"></a>";
				
				echo "<button class=\"btn-flat editBtn\" type=\"sumbit\" name=\"saveEdit1\" value=\"saveEdit\"><img src=\"img/save.png\" alt=\"Bearbeitung\" class=\"editIcon\"></button>";
			}
			?>
	<br>
		<h5 style="margin-left:10%"><b>1. Charakterliche Merkmale </b></h5>
		
		<p class="nahansichtGesamtTabelle">
			<?php echo $merkmaleArray['charMerkmale'] ?>
		</p> 
		
		
	<h5 style="margin-left:10%"><b>2. Besondere Begabungen und Fähigkeiten</b> </h5>	
		
		<p class="nahansichtGesamtTabelle">
			<?php echo $merkmaleArray['faehigkeiten'] ?>
		</p>
		
	<h5 style="margin-left:10%"><b>3. Bewährung in spezifischen Situationen</b> </h5>	
		<p class="nahansichtGesamtTabelle">
			<?php echo $merkmaleArray['besonSituation'] ?>	
		</p>
		
	<h5 style="margin-left:10%"><b>4. Fügungen (günstige/ungünstige)</b></h5>
		<p class="nahansichtGesamtTabelle">
			<?php echo $merkmaleArray['fuegungen'] ?>
		</p>
		
	<h5 style="margin-left:10%"><b>5. Sonstige ergänzende Kommentare</b></h5>
		
		<p class="nahansichtGesamtTabelle">
			<?php echo $merkmaleArray['kommentare'] ?>
		</p>
		
	  </div>
	<?php if($bearbeiten==true){
				echo "</form>";
			  }
	?>
</body></html>