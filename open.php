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
	


//Ausgangspersonen
$aPersonen=array(
	0 => 1,
	1 => 51,
);

//Ausgangsperson
$aID=$aPersonen[0];
$vorname=$pdo -> query("SELECT vorname FROM Lebensdaten WHERE id='$aID'")->fetchColumn();
$nachname=$pdo -> query("SELECT nachname FROM lebensdaten WHERE id='$aID'")->fetchColumn();
$mutter=$pdo -> query("SELECT mutter FROM lebensdaten WHERE id=$aID")->fetchColumn();
$vater=$pdo -> query("SELECT vater FROM lebensdaten WHERE id=$aID")->fetchColumn();
$output="";


?>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>