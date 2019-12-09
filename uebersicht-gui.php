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
	<!-- NAVBAR -->
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
	

	


	<script>
		<?php
		$noParent=false;
		$currentPerson=$aID;
		$waitingPersons=[null,null,null,null,null,null,null,null,null,null,null];
		$mother="";
		$father="";
	
		while($noParent==false)	{
			
			$output=createDiv($currentPerson);
			
			
			$mother=$pdo -> query("SELECT mutter FROM lebensdaten WHERE id=$currentPerson")->fetchColumn();
			$father=$pdo -> query("SELECT vater FROM lebensdaten WHERE id=$currentPerson")->fetchColumn();
			
			
			if($mother!="")	{
				
			}
			else	{
				$noParent=true;
			}
			
			$noParent=true;
		}	
		
		?>
	</script>
	
	
	<p><?php echo $output; ?></p>
	
	<a href ="#" class="btn-floating btn-large waves-effect waves-light red addPersonIcon"><i class="material-icons"><img src="img/add.png" width="20px" height="20px"> </i></a>
	
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>