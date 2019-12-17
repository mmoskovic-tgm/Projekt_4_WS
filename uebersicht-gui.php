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
</head>

<body>
	<?php echo $meldung; ?>
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


	
		
		
		<div id="wholeTree">
		<?php echo $meldung; ?>
		<?php
			
			
			createTree();
		?>
		<?php echo $output;?>
		</div>
	<p></p>
	
	
<!--	
	<a href ="#" class="btn-floating btn-large waves-effect waves-light red addPersonIcon"><i class="material-icons"><img src="img/add.png" width="20px" height="20px"> </i></a>
-->
	
	
</body>
</html>