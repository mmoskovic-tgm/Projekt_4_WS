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
	

	<br>
	<div class="stammblattHeading">
		<h4 ><b>Stammblatt</b> für eine neue Person</h4>

	<form id="addPerson" action="uebersicht.php" method="POST" >

		<h5><b>Teil I:</b> Lebensdaten
			
		</h5>	
	</div>
	<br>
	<div class="nahansichtGesamtTabelle">
		
		<table>
			<tbody>
			  <tr>
				
				<td><b>Name:</b></td>
				<td><input value="" name="nachname" type="text" class="validate"></td>							
				<td><b>Mädchenname:</b></td>
				<td><input value="" name="maedName" type="text" class="validate"></td>
														
			  </tr>
			  <tr>
				<td><b>Vorname:</b></td>
				<td><input value="" name="vorname" type="text" class="validate"></td> 
				<td><b>Rufname:</b></td>
				<td><input value="" name="rufname" type="text" class="validate"></td>        
			  </tr>
			  <tr>
				<td><b>Titel</b></td>
				<td><input value="" name="titel" type="text" class="validate"></td>          
			  </tr>
			  <tr>
				<td><b>Identifizierung</b></td>
				<td><input value="" name="kurzzeichen" type="text" class="validate"></td>          
			  </tr>
			  <tr>
				<td><b>Geboren am</b></td>
				<td><input value="" name="gebDatum" type="text" class="validate"></td>
				<td><b>In:</b></td>
				<td><input value="" name="gebOrt" type="text" class="validate"></td>           
			  </tr>
			  <tr>
				<td><b>Konfession</b></td>
				<td><input value="" name="konfession" type="text" class="validate"></td>          
			  </tr>
			  <tr>		
				<td><b>Ausbildung:</b></td>
				<td><input value="" name="ausbildung" type="text" class="validate"></td> 
			  </tr>
			  <tr>		
				<td><b>Beruf:</b></td>
				<td><input value="" name="berufLaufbahn" type="text" class="validate"></td> 
			  </tr>
			  <tr>		
				<td><b>professionelle Tätigkeiten:</b></td>
				<td><input value="" name="profTaetigkeiten" type="text" class="validate"></td> 
			  </tr>
			  <tr>		
				<td><b>Hobbies:</b></td>
				<td><input value="" name="hobbies" type="text" class="validate"></td> 
			  </tr>
			  <tr>		
				<td><b>Vater:</b></td>
				<td>	
					<div class="row">
					<div class="input-field col s12">
					  <input type="text" name="vater" class="autocomplete">
					  <label for="demo-auto">Vater</label>
					</div>	
					</div>
				</td> 
			  </tr>
			  <tr>		
				<td><b>Mutter:</b></td>
				<td>	 
					<div class="input-field col s12">
					  <input type="text" name="mutter" class="autocomplete">
					  <label for="demo-auto">Mutter</label>
					</div>					
				</td>
				<td><b>geb:</b></td>
				<td ><input value="" name="gebMutter" type="text" class="validate"></td> 

			  </tr>
			  <tr>		
				<td><b>Partner/in:</b></td>
				<td>	 
					<div class="input-field col s12">
					  <input type="text" name="partnerin" class="autocomplete">
					  <label for="demo-auto">Partner/in</label>
					</div>					
				</td> 
			  </tr>	
			  <tr>		
				<td><b>Trauung am:</b></td>
				<td><input value="" name="trauDatum" type="text" class="validate"></td> 
				<td><b>In:</b></td>
				<td><input value="" name="trauOrt" type="text" class="validate"></td>
			  </tr>		
			  <tr>		
				<td><b>Kinder:</b></td>
				<td><input value="" name="kind" type="text" class="validate"></td> 
			  </tr>		
			  <tr>		
				<td><b>Verstorben am:</b></td>
				<td><input value="" name="verstorbenAm" type="text" class="validate"></td>
				<td><b>In:</b></td>
				<td><input value="" name="verstorbenIn" type="text" class="validate"></td> 
			  </tr>					
			  <tr>		
				<td><b>Todesursache:</b></td>
				<td><input value="" name="todUrsache" type="text" class="validate"></td>
			  </tr>		
			  <tr>		
				<td><b>Begräbnis am:</b></td>
				<td><input value="" name="begraebnisAm" type="text" class="validate"></td>
				<td><b>In:</b></td>
				<td><input value="" name="begraebnisIn" type="text" class="validate"></td> 
			  </tr>		
			  <tr>		
				<td><b>Militärdienst:</b></td>
				<td><input value="" name="militaerdienst" type="text" class="validate"></td> 
			  </tr>

			</tbody>
		  </table>
		
			<button class="btn-flat editBtn" type="sumbit" name="saveNewPerson" value="saveNewPerson"><img src="img/save.png" alt="Person speichern" class="editIcon"></button>
		</form>

	</div>
	  
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


</body></html>