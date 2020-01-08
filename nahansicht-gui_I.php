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
		<a href="" class='btn grey' value="0">I</a>
		<a href="" class='btn grey' value="0">II</a>
		<a href="" class='btn grey' value="0">III</a>
		<a href="" class='btn grey' value="0">IV</a>
	</p>

	<br>
	<h4 style="margin-left:10%;"><b>Stammblatt</b> für <?php echo $person['nachname']?> <?php echo $person['vorname']?></h4>
	<h5 style="margin-left:10%;"><b>Teil 1:</b> Lebensdaten</h5>
	<br>
	<div class="nahansichtGesamtTabelle">
		<table>
			<tbody>
			  <tr>
				
				<td style="width:10%"><b>Name:</b></td>
				<td style="width:40%"><?php echo $person['nachname']?></td>							
				<td style="width:10%"><b>Mädchenname:</b></td>
				<td style="width:40%"><?php echo $person['maedName']?></td>
														
			  </tr>
			  <tr>
				<td style="width:10%"><b>Vorname:</b></td>
				<td style="width:40%"><?php echo $person['vorname']?></td> 
				<td style="width:10%"><b>Rufname:</b></td>
				<td style="width:40%"><?php echo $person['rufname']?></td>        
			  </tr>
			  <tr>
				<td style="width:10%"><b>Titel</b></td>
				<td style="width:40%"><?php echo $person['titel']?></td>          
			  </tr>
			  <tr>
				<td style="width:10%"><b>Identifizierung</b></td>
				<td style="width:40%"><?php echo $person['kurzzeichen']?></td>          
			  </tr>
			  <tr>
				<td style="width:10%"><b>Geboren am</b></td>
				<td style="width:40%"><?php echo $person['gebDatum']?></td>
				<td style="width:10%"><b>In:</b></td>
				<td style="width:40%"><?php echo $person['gebOrt']?></td>           
			  </tr>
			  <tr>
				<td style="width:10%"><b>Konfession</b></td>
				<td style="width:40%"><?php echo $person['konfession']?></td>          
			  </tr>
			  <tr>		
				<td style="width:10%"><b>Ausbildung:</b></td>
				<td style="width:40%"><?php echo $person['ausbildung']?></td> 
			  </tr>
			  <tr>		
				<td style="width:10%"><b>Beruf:</b></td>
				<td style="width:40%"><?php echo $person['berufLaufbahn']?></td> 
			  </tr>
			  <tr>		
				<td style="width:10%"><b>professionelle Tätigkeiten:</b></td>
				<td style="width:40%"><?php echo $person['profTaetigkeiten']?></td> 
			  </tr>
			  <tr>		
				<td style="width:10%"><b>Hobbies:</b></td>
				<td style="width:40%"><?php echo $person['hobbies']?></td> 
			  </tr>
			  <tr>		
				<td style="width:10%"><b>Vater:</b></td>
				<td style="width:40%"><?php echo $vater ?></td> 
			  </tr>
			  <tr>		
				<td style="width:10%"><b>Mutter:</b></td>
				<td style="width:40%"><?php echo $mutter?></td> 
				<td style="width:10%"><b>geb:</b></td>
				<td style="width:40%"><?php echo $person['gebMutter']?></td> 
			  </tr>
			  <tr>		
				<td style="width:10%"><b>Partner/in:</b></td>
				<td style="width:40%"><?php echo $partnerin?></td> 
			  </tr>	
			  <tr>		
				<td style="width:10%"><b>Trauung am:</b></td>
				<td style="width:40%"><?php echo $person['trauDatum']?></td> 
				<td style="width:10%"><b>In:</b></td>
				<td style="width:40%"><?php echo $person['trauOrt']?></td>
			  </tr>		
			  <tr>		
				<td style="width:10%"><b>Kinder:</b></td>
				<td style="width:40%"><?php echo $person['kind']?></td> 
			  </tr>		
			  <tr>		
				<td style="width:10%"><b>Verstorben am:</b></td>
				<td style="width:40%"><?php echo $person['verstorbenAm']?></td>
				<td style="width:10%"><b>In:</b></td>
				<td style="width:40%"><?php echo $person['verstorbenIn']?></td> 
			  </tr>					
			  <tr>		
				<td style="width:10%"><b>Todesursache:</b></td>
				<td style="width:40%"><?php echo $person['todUrsache']?></td>
			  </tr>		
			  <tr>		
				<td style="width:10%"><b>Begräbnis am:</b></td>
				<td style="width:40%"><?php echo $person['begraebnisAm']?></td>
				<td style="width:10%"><b>In:</b></td>
				<td style="width:40%"><?php echo $person['begraebnisIn']?></td> 
			  </tr>		
			  <tr>		
				<td style="width:10%"><b>Militärdienst:</b></td>
				<td style="width:40%"><?php echo $person['militaerdienst']?></td> 
			  </tr>

			</tbody>
		  </table>
	</div>
	  </div>


</body></html>