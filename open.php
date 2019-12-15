<?php

session_start();


$nl = "\n";
$brnl = "<br>\n";
$ausgabe = '';
$meldung = '';


try	{
	$pdo = new PDO('mysql:host=localhost;dbname=famArch', 'admin', 'admin');
}catch(PDOException $e)	{
	exit("Database connection refused");
}
	

?>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>