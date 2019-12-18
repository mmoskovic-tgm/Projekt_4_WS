<?php	
include 'open.php';	

//Test ID

$curPerson=key($_GET);
if(!isset($curPerson))	{
	if(isset($_SESSION['id']))	{
			$curPerson=$_SESSION['id'];
	}
}
	
$row=$pdo -> query("SELECT * FROM lebensdaten WHERE id=$curPerson");
$person=$row->fetch();

//Query die den Namen des Vaters zurückgibt
$query=$pdo -> query("SELECT vorname,nachname FROM lebensdaten WHERE id=$person[vater]");
$meldung=$query;
try {
	$vater_row = $query->fetch(PDO::FETCH_ASSOC);
	$vater = $vater_row['vorname'] . " " . $vater_row['nachname'];
}catch(Error $e) {
	$vater="";
}


//Query die den Namen der Mutter zurückgibt
$query=$pdo -> query("SELECT vorname,nachname FROM lebensdaten WHERE id=$person[mutter]");
try {
	$mutter_row = $query->fetch(PDO::FETCH_ASSOC);
	$mutter = $mutter_row['vorname'] . " " . $mutter_row['nachname'];
}catch(Error $e) {
	$mutter="";
}


//Query die den Namen des Partners zurückgibt
$query=$pdo -> query("SELECT vorname,nachname FROM lebensdaten WHERE id=$person[partnerin]");
try {
	$partnerin_row = $query->fetch(PDO::FETCH_ASSOC);
	$partnerin = $partnerin_row['vorname'] . " " . $partnerin_row['nachname'];
}catch(Error $e) {
	$partnerin="";
}



/**Geburtsdatum Format anpassen
if(isset($person['gebDatum']))	{
	try {
		$person['gebDatum']=substr($person['gebDatum'],8,2) . "." . substr($person['gebDatum'],5,2) . "." . substr($person['gebDatum'],0,4);
	}
	catch(Exception $e)	{
		$meldung.="Geburtsdatumsumwandlung hat nicht funktioniert";
	}
}*/

//Alle Null werte ersetzen
/**
echo $person['maedName'];
$i=0;
foreach($person as $attr)	{
	if(isset($attr))	{
		$attr="Nicht Vorhanden";
	}
}

echo $person['maedName'];*/







include 'nahansicht-gui.php';
include 'close.php';
?>