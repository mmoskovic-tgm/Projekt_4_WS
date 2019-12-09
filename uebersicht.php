<?php	
include 'open.php';	

//Personen aus diesem Staummbaum
$stammbaum="Stammbaum1";

//Personen Anzahl
$pAnzahl=$pdo -> query('SELECT * FROM lebensdaten WHERE stammbaum="Hübner"') -> rowCount();

//Ausgangsperson
$aID=36;
$name=$pdo -> query("SELECT vorname FROM lebensdaten WHERE id='$aID'")->fetchColumn();
$mutter=$pdo -> query("SELECT mutter FROM lebensdaten WHERE id=$aID")->fetchColumn();
$vater=$pdo -> query("SELECT vater FROM lebensdaten WHERE id=$aID")->fetchColumn();
$output="";



function createDiv($funcID)	{
	global $pdo;
	$funcRet="";
	$funcRet.="<div class=\"personBox\">";
	$funcRet.=$pdo -> query("SELECT vorname FROM lebensdaten WHERE id='$funcID'")->fetchColumn();
	$funcRet.="</div>";
	
	return $funcRet;
}





include 'uebersicht-gui.php';
include 'close.php';
?>