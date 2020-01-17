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
		<h5><b>Teil I:</b> Lebensdaten 
			<a href="nahansicht.php?curPerson=<?php echo $curPerson; ?>&stammblattnr=1&edit=true" class="btn-flat editBtn" ><img src="img/edit.png" alt="Bearbeitung" class="editIcon"></a>
		</h5>	
	</div>
	<br>
	<div class="nahansichtGesamtTabelle">
		<table>
			<tbody>
			  <tr>
				
				<td><b>Name:</b></td>
				<td><?php echo "<input id=\"first_name\" type=\"text\" class=\"validate\">" ?></td>							
				<td><b>Mädchenname:</b></td>
				<td><?php echo $person['maedName']?></td>
														
			  </tr>
			  <tr>
				<td><b>Vorname:</b></td>
				<td><?php echo $person['vorname']?></td> 
				<td><b>Rufname:</b></td>
				<td><?php echo $person['rufname']?></td>        
			  </tr>
			  <tr>
				<td><b>Titel</b></td>
				<td><?php echo $person['titel']?></td>          
			  </tr>
			  <tr>
				<td><b>Identifizierung</b></td>
				<td><?php echo $person['kurzzeichen']?></td>          
			  </tr>
			  <tr>
				<td><b>Geboren am</b></td>
				<td><?php echo $person['gebDatum']?></td>
				<td><b>In:</b></td>
				<td><?php echo $person['gebOrt']?></td>           
			  </tr>
			  <tr>
				<td><b>Konfession</b></td>
				<td><?php echo $person['konfession']?></td>          
			  </tr>
			  <tr>		
				<td><b>Ausbildung:</b></td>
				<td><?php echo $person['ausbildung']?></td> 
			  </tr>
			  <tr>		
				<td><b>Beruf:</b></td>
				<td><?php echo $person['berufLaufbahn']?></td> 
			  </tr>
			  <tr>		
				<td><b>professionelle Tätigkeiten:</b></td>
				<td><?php echo $person['profTaetigkeiten']?></td> 
			  </tr>
			  <tr>		
				<td><b>Hobbies:</b></td>
				<td><?php echo $person['hobbies']?></td> 
			  </tr>
			  <tr>		
				<td><b>Vater:</b></td>
				<td><?php echo $vater ?></td> 
			  </tr>
			  <tr>		
				<td><b>Mutter:</b></td>
				<td><?php echo $mutter?></td> 
				<td><b>geb:</b></td>
				<td ><?php echo $person['gebMutter']?></td> 
			  </tr>
			  <tr>		
				<td><b>Partner/in:</b></td>
				<td><?php echo $partnerin?></td> 
			  </tr>	
			  <tr>		
				<td><b>Trauung am:</b></td>
				<td><?php echo $person['trauDatum']?></td> 
				<td><b>In:</b></td>
				<td><?php echo $person['trauOrt']?></td>
			  </tr>		
			  <tr>		
				<td><b>Kinder:</b></td>
				<td><?php echo $person['kind']?></td> 
			  </tr>		
			  <tr>		
				<td><b>Verstorben am:</b></td>
				<td><?php echo $person['verstorbenAm']?></td>
				<td><b>In:</b></td>
				<td><?php echo $person['verstorbenIn']?></td> 
			  </tr>					
			  <tr>		
				<td><b>Todesursache:</b></td>
				<td><?php echo $person['todUrsache']?></td>
			  </tr>		
			  <tr>		
				<td><b>Begräbnis am:</b></td>
				<td><?php echo $person['begraebnisAm']?></td>
				<td><b>In:</b></td>
				<td><?php echo $person['begraebnisIn']?></td> 
			  </tr>		
			  <tr>		
				<td><b>Militärdienst:</b></td>
				<td><?php echo $person['militaerdienst']?></td> 
			  </tr>

			</tbody>
		  </table>
	</div>
	  


</body></html>