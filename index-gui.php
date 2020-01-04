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
		<div class="input-field col s12">
			<select>
			  <option value="" disabled selected>Choose your option</option>
			  <option value="1">Option 1</option>
			  <option value="2">Option 2</option>
			  <option value="3">Option 3</option>
			</select>
			<label>Wählen Sie den gewünschten Stammbaum</label>
		 </div>

		<a href="uebersicht.php">Weiter zum Staummbaum</a>
	</div>
	
	
	<script>
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