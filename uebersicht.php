<?php	
include 'open.php';	

//Personen aus diesem Staummbaum
$stammbaum="Stammbaum1";

//Personen Anzahl
$pAnzahl=($pdo -> query('SELECT * FROM lebensdaten WHERE stammbaum="Stammbaum1"')) -> rowCount();







include 'uebersicht-gui.php';
include 'close.php';
?>