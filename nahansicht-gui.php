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
    <div class="nav-wrapper">	
		<!--<img src="img/logo.png" class="brand-logo" width="3.5%" height="90%" hspace="20">	-->	
		<a href="" class="brand-logo" style="margin-left:1.5%">FamArch</a>
    	<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="uebersicht.php">Übersicht</a></li>
			<li><a href="#">Personen</a></li>
			<li><a href="#">Suche</a></li>
     	</ul>
    </div>
  </nav>
	
	<br>
	<h2 style="text-align:center;">Stammblatt für <?php echo $person['nachname']?> <?php echo $person['vorname']?></h2>
	<br>
	<div class="nahansichtGesamtTabelle">
		<table>
			<tbody>
			  <tr>
				
				 <td><b>Name:</b></td>
				<td><?php echo $person['nachname']?></td>
								
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
				<td><?php echo $person['gebMutter']?></td> 
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