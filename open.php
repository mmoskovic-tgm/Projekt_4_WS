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
<script type='text/javascript' src="jquery/jquery-3.4.1.min.js"></script>