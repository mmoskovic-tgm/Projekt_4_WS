<html>
<head>
<meta charset="utf-8">
<title>FamArch</title>
	<script type='text/javascript' src="jquery/jquery-3.4.1.min.js"></script>
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="style.css" >
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<div id="wholeTree">
	<?php echo $meldung; ?>
	</div>
</head>
	
<body>
	
	<div class="indexBox">
		
		<?php
		  $ausgabe="";

		  $arraySize=count($aPersonen);
		  for($i=0;$i<$arraySize;$i++) {
			  $ausgabe.="<a href=\"uebersicht.php?stammbaumID=" . $aPersonen[$i] . "\" class='waves-effect waves-light btn' value=\"" . $i . "\">";
			  $ausgabe.=$pdo -> query("SELECT vorname FROM Lebensdaten WHERE id='$aPersonen[$i]'")->fetchColumn() . " ";
			  $ausgabe.=$pdo -> query("SELECT nachname FROM lebensdaten WHERE id='$aPersonen[$i]'")->fetchColumn();
			  $ausgabe.="</a>";
		  }

		  echo $ausgabe;

		?>
		

		
		<!--
		<div class="input-field col s12">
			
			
			<select onChange="setGet" id="stammbaumSelect">
					
				
			</select>
			<label>Wählen Sie den gewünschten Stammbaum</label>
		 </div>

		<a href="uebersicht.php?">Weiter zum Staummbaum</a>
		-->
	</div>
	
	
	<script>
	function setGet()	{
			var select=document.getElementById("stammbaumSelect");
			
	}
		
		
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, 0);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
	
	</script>
</body>
</html>