<?php	
include 'open.php';	

//Test ID
$curPerson=3;
	
$row=$pdo -> query("SELECT * FROM lebensdaten WHERE id=$curPerson");
$person=$row->fetch();

//Query die den Namen des Vaters zurückgibt
$query=$pdo -> query("SELECT vorname,nachname FROM lebensdaten WHERE id=$person[vater]");
$vater_row = $query->fetch(PDO::FETCH_ASSOC);
$vater = $vater_row['vorname'] . " " . $vater_row['nachname'];

//Query die den Namen der Mutter zurückgibt
$query=$pdo -> query("SELECT vorname,nachname FROM lebensdaten WHERE id=$person[mutter]");
$mutter_row = $query->fetch(PDO::FETCH_ASSOC);
$mutter = $mutter_row['vorname'] . " " . $mutter_row['nachname'];

//Query die den Namen des Partners zurückgibt
$query=$pdo -> query("SELECT vorname,nachname FROM lebensdaten WHERE id=$person[partnerin]");
$partnerin_row = $query->fetch(PDO::FETCH_ASSOC);
$partnerin = $partnerin_row['vorname'] . " " . $partnerin_row['nachname'];


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