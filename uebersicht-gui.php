<!doctype html>




<html>
<head>
<meta charset="utf-8">
<title>FamArch</title>
	<script type='text/javascript' src="jquery/jquery-3.4.1.min.js">	
	</script>
	<script type='text/javascript' src="ajaxReloadTree.js"> </script>
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="style.css" >
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<div id="wholeTree">
	</div>
	
</head>

<body>
	<?php 
	echo $meldung; ?>
	<!-- NAVBAR -->
	<nav>
		<div class="nav-wrapper grey darken-4">
<<<<<<< HEAD
		  <a href="index.php" class="brand-logo logo">FamArch</a>
			
			  <!-- Dropdown Trigger -->
			<ul id="nav-mobile" class="left hide-on-med-and-down famChooser">
				<li><a class='dropdown-trigger btn navBar grey darken-2' href='#' data-target='dropdown1'>
				Stammbaum wählen
				</a></li>
			</ul>
			  

		  <!-- Dropdown Structure -->
		  <ul id='dropdown1' class='dropdown-content'>
			 <?php
			  $ausgabe="";
			  
			  $arraySize=count($aPersonen);
			  for($i=0;$i<$arraySize;$i++) {
				  $ausgabe.="<li><a href='javascript:reloadTree(" . $i . ");' id='" . "sel" . $i . "' class='grey-text text-darken-4'>";
				  $ausgabe.=$pdo -> query("SELECT vorname FROM Lebensdaten WHERE id='$aPersonen[$i]'")->fetchColumn() . " ";
				  $ausgabe.=$pdo -> query("SELECT nachname FROM lebensdaten WHERE id='$aPersonen[$i]'")->fetchColumn();
				  $ausgabe.="</a></li>";
			  }
			  
			  echo $ausgabe;
			 
			  ?>
			 <!--
			<li><a href="#!"></a></li>
			<li><a href="#!">two</a></li> -->
		  </ul>	
			
=======
		  <a href="uebersicht.php" class="brand-logo logo">FamArch</a>
>>>>>>> origin/master
		  <ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="uebersicht.php" class="navBar">Übersicht</a></li>
			<li><a href="badges.html" class="navBar">Personen</a></li>
			<li><a href="collapsible.html" class="navBar">Suche</a></li>
		  </ul>
		</div>
  	</nav>
	
<<<<<<< HEAD
	
=======
	<script>
	$.ajax({  
    type: 'POST',  
    url: 'uebersicht.php', 
	//context: document.body
    data: { width:  screen.width },
    success: function(data) {
		
		  var data2 = data.replace('<body', '<body><div id="body"').replace('</body>','</div></body>');
		  var body = $(data).filter('#wholeTree');
		
		//alert(data2);
        //$('#wholeTree').html(<?php echo $output."haha";?>);
		$("#wholeTree").html(body).find( '#wholeTree' );
		//$('#wholeTree').load(data);
		//this.html(blabla);
		
		
    }
});
		
		//xmlHttp.open('GET', 'uebersicht.php?fn=TearsForFears', true);
	</script>
>>>>>>> origin/master
		
		<svg>
			<g id='scene'>
				<?php
					createTree();
					echo $output;
				?>	
				
			</g>
		</svg>
	
		
<<<<<<< HEAD
		<div id="tree">
			<div id="createTreeClass">
				<?php echo rand(0,100) . $meldung; ?>
				<svg>
					<g id='scene'>
						<?php

							createTree();
							echo $output;

						?>	

					</g>
				</svg>
			</div>
=======
		
		<div id="wholeTree">
		<?php echo $meldung; ?>
		<?php
			
			
			//createTree();
			//echo $output;
		?>
		
>>>>>>> origin/master
		</div>
	
	
<!--	
	<a href ="#" class="btn-floating btn-large waves-effect waves-light red addPersonIcon"><i class="material-icons"><img src="img/add.png" width="20px" height="20px"> </i></a>
-->
	<script type="text/javascript" src="http://ariutta.github.io/svg-pan-zoom/dist/svg-pan-zoom.min.js">
			panZoom = svgPanZoom("#tree", {
			  viewportSelector: '.svg-pan-zoom_viewport'
			, panEnabled: false
			, controlIconsEnabled: false
			, zoomEnabled: false
			, dblClickZoomEnabled: true
			, mouseWheelZoomEnabled: true
			, preventMouseEventsDefault: true
			, zoomScaleSensitivity: 0.2
			, minZoom: 0.5
			, maxZoom: 10
			, fit: true
			, contain: false
			, center: true
			, refreshRate: 'auto'
			});
	</script>
	<script type='text/javascript' src='https://unpkg.com/panzoom@8.6.2/dist/panzoom.min.js'></script>
<<<<<<< HEAD
	<script>
		var element = document.querySelector('#scene');panzoom(element);
		
		
		//Dropdown in der Navbar
		document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.dropdown-trigger');
		var instances = M.Dropdown.init(elems, 'left');
		  });

	
	</script>
=======
	<script>var element = document.querySelector('#scene');panzoom(element);</script>
	
>>>>>>> origin/master
</body>
</html>