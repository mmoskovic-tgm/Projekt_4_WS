<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>FamArch</title>
	
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection">
	<link rel="stylesheet" href="style.css">
	<script type='text/javascript' src="jquery/jquery-3.4.1.min.js"></script>
	<script type='text/javascript' src="materialize/js/materialize.min.js"></script>
														   
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<?php echo $meldung; ?>
	
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
	<div class="stammblattHeading">
		<h4 ><b>Stammblatt</b> für <?php echo $person['nachname']?> <?php echo $person['vorname']?></h4>
		<?php if($bearbeiten==true){
				echo "<form id=\"editform\" action=\"nahansicht.php?curPerson=" . $curPerson . "&stammblattnr=1&edit=false\" method=\"POST\" >";
			  }
		?>
		<h5><b>Teil I:</b> Lebensdaten
			<?php 
			if($bearbeiten==false){
				echo "<a href=\"nahansicht.php?curPerson=" . $curPerson . "&stammblattnr=1&edit=true\" class=\"btn-flat editBtn\" ><img src=\"img/edit.png\" alt=\"Bearbeitung\" class=\"editIcon\"></a>";
			}
			else {
				//echo "<a href=\"nahansicht.php?curPerson=" . $curPerson . "&stammblattnr=1&edit=false\" class=\"btn-flat editBtn\" ><img src=\"img/save.png\" alt=\"Bearbeitung\" class=\"editIcon\"></a>";
				
				echo "<button class=\"btn-flat editBtn\" type=\"sumbit\" name=\"saveEdit\" value=\"saveEdit\"><img src=\"img/save.png\" alt=\"Bearbeitung\" class=\"editIcon\"></button>";
			}
			?>
		</h5>	
	</div>
	<br>
	<div class="nahansichtGesamtTabelle">
		
		<table>
			<tbody>
			  <tr>
				
				<td><b>Name:</b></td>
				<td><?php echo $personArray['nachname']; ?></td>							
				<td><b>Mädchenname:</b></td>
				<td><?php echo $personArray['maedName']?></td>
														
			  </tr>
			  <tr>
				<td><b>Vorname:</b></td>
				<td><?php echo $personArray['vorname']?></td> 
				<td><b>Rufname:</b></td>
				<td><?php echo $personArray['rufname']?></td>        
			  </tr>
			  <tr>
				<td><b>Titel</b></td>
				<td><?php echo $personArray['titel']?></td>          
			  </tr>
			  <tr>
				<td><b>Identifizierung</b></td>
				<td><?php echo $personArray['kurzzeichen']?></td>          
			  </tr>
			  <tr>
				<td><b>Geboren am</b></td>
				<td><?php echo $personArray['gebDatum']?></td>
				<td><b>In:</b></td>
				<td><?php echo $personArray['gebOrt']?></td>           
			  </tr>
			  <tr>
				<td><b>Konfession</b></td>
				<td><?php echo $personArray['konfession']?></td>          
			  </tr>
			  <tr>		
				<td><b>Ausbildung:</b></td>
				<td><?php echo $personArray['ausbildung']?></td> 
			  </tr>
			  <tr>		
				<td><b>Beruf:</b></td>
				<td><?php echo $personArray['berufLaufbahn']?></td> 
			  </tr>
			  <tr>		
				<td><b>professionelle Tätigkeiten:</b></td>
				<td><?php echo $personArray['profTaetigkeiten']?></td> 
			  </tr>
			  <tr>		
				<td><b>Hobbies:</b></td>
				<td><?php echo $personArray['hobbies']?></td> 
			  </tr>
			  <tr>		
				<td><b>Vater:</b></td>
				<td><?php echo $personArray['vater'] ?></td> 
			  </tr>
			  <tr>		
				<td><b>Mutter:</b></td>
				<td><?php echo $personArray['mutter']?>	</td> 
				<td><b>geb:</b></td>
				<td ><?php echo $personArray['gebMutter']?></td> 
			  </tr>
			  <tr>		
				<td><b>Partner/in:</b></td>
				<td><?php echo $personArray['partnerin']?></td> 
			  </tr>	
			  <tr>		
				<td><b>Trauung am:</b></td>
				<td><?php echo $personArray['trauDatum']?></td> 
				<td><b>In:</b></td>
				<td><?php echo $personArray['trauOrt']?></td>
			  </tr>		
			  <tr>		
				<td><b>Kinder:</b></td>
				<td><?php echo $personArray['kind']?></td> 
			  </tr>		
			  <tr>		
				<td><b>Verstorben am:</b></td>
				<td><?php echo $personArray['verstorbenAm']?></td>
				<td><b>In:</b></td>
				<td><?php echo $personArray['verstorbenIn']?></td> 
			  </tr>					
			  <tr>		
				<td><b>Todesursache:</b></td>
				<td><?php echo $personArray['todUrsache']?></td>
			  </tr>		
			  <tr>		
				<td><b>Begräbnis am:</b></td>
				<td><?php echo $personArray['begraebnisAm']?></td>
				<td><b>In:</b></td>
				<td><?php echo $personArray['begraebnisIn']?></td> 
			  </tr>		
			  <tr>		
				<td><b>Militärdienst:</b></td>
				<td><?php echo $personArray['militaerdienst']?></td> 
			  </tr>

			</tbody>
		  </table>
		<?php if($bearbeiten==true){
				echo "</form>";
			  }
		?>
	</div>
	<br>

	
	<script>
		function confirmDelete() {
  			var c = confirm("Sind Sie sich sicher, dass Sie diese Personen löschen wollen?");
			if(c == true) {
				window.location.assign("uebersicht.php?delPerson=<?php echo $curPerson; ?>");
				
			}
			if(c == false) {
				//alert("canceled");
			}
		}
	</script>
	
	<script>
	  $(document).ready(function(){
		$('input.autocomplete').autocomplete({
		  data: {
			<?php echo $outputJSArray; ?>

		  },
		  limit: 5,	
		});
	  });
	</script>
	<button class="btn-flat editBtn" onclick="confirmDelete()" type="sumbit" name="delete" value="delete"><img src="img/delete.png" alt="Entfernen" class="editIcon"></button>
	
	  


</body></html>