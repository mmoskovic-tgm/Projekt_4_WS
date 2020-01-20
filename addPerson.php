<?php
include 'open.php';


$allePersonen=$pdo -> query("SELECT * FROM lebensdaten");

$outputJSArray="";

$personenIDs=array();
$curOption="";
foreach($allePersonen as $row) {
	$curOption="";
	$curOption.="\"";
	$curOption.=$row['vorname'];
	$curOption.=" ";
	$curOption.=$row['nachname'];
	$curOption.="\": null,";

	$outputJSArray.=$curOption;
	$personenIDs[$row['id']]=$curOption;
}










include 'addPerson-gui.php';
?>