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
	<?php echo $meldung; ?>
	</div>
</head>

<body>
	
	<!-- NAVBAR -->
	<nav>
		<div class="nav-wrapper">
		  <a href="#" class="brand-logo">FamArch</a>
		  <ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="uebersicht.php">Übersicht</a></li>
			<li><a href="badges.html">Personen</a></li>
			<li><a href="collapsible.html">Suche</a></li>
		  </ul>
		</div>
  	</nav>
	
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
		
		<svg>
			<g id='scene'>
				<?php
					createTree();
					echo $output;
				?>	
				
			</g>
		</svg>
	
		
		
		<div id="wholeTree">
		<?php echo $meldung; ?>
		<?php
			
			
			//createTree();
			//echo $output;
		?>
		
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
	<script>var element = document.querySelector('#scene');panzoom(element);</script>
	
</body>
</html>