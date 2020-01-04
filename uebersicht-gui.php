<!doctype html>




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
	</div>
</head>

<body>
	
	<!-- NAVBAR -->
	<nav>
		<div class="nav-wrapper grey darken-4">
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
				  $ausgabe.="<li><a href='#' id='reloadTree' class='grey-text text-darken-4'>";
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
			
		  <ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="uebersicht.php" class="navBar">Übersicht</a></li>
			<li><a href="badges.html" class="navBar">Personen</a></li>
			<li><a href="collapsible.html" class="navBar">Suche</a></li>
		  </ul>
		</div>
  	</nav>
	
	
	
	<script>
	$(document).ready(function(){
        $(function(){
        $('#reloadTree').submit(function(e){
				
                e.preventDefault();
                var form = $(this);
                var post_url = form.attr('action');
                var post_data = form.serialize();
                $('#createTreeClass', form).html('hallo');
                $.ajax({
                    type: 'POST',
                    url: post_url, 
                    data: post_data,
                    success: function(msg) {
                        $(form).fadeOut(800, function(){
                            form.html(msg).fadeIn().delay(2000);
							
                        });
                    }
                });
            });
        });
	 });
		
		//xmlHttp.open('GET', 'uebersicht.php?fn=TearsForFears', true);
	</script>
		
		
	
		
		
		<div id="createTreeClass">
			<svg >
				<g id='scene'>
					<?php
						createTree();
						echo $output;
					?>	

				</g>
			</svg>
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
	<script>
		var element = document.querySelector('#scene');panzoom(element);
		
		
		//Dropdown in der Navbar
		document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.dropdown-trigger');
		var instances = M.Dropdown.init(elems, 'left');
		  });

	
	</script>
	
</body>
</html>