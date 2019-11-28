<?php	
include 'open.php';	

//Test ID
$curPerson=1;
	
$row=$pdo -> query("SELECT * FROM lebensdaten WHERE id=$curPerson");
$person=$row->fetch();

//Geburtsdatum Format anpassen
if(isset($person['gebDatum']))	{
	try {
		$person['gebDatum']=substr($person['gebDatum'],8,2) . "." . substr($person['gebDatum'],5,2) . "." . substr($person['gebDatum'],0,4);
	}
	catch(Exception $e)	{
		$meldung.="Geburtsdatumsumwandlung hat nicht funktioniert";
	}
}

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







include 'nahansicht-bearbeiten-gui.php';
include 'close.php';
?>