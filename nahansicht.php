<?php	
include 'open.php';	

//Test ID

//$curPerson=key($_GET);
/*
if(!isset($curPerson))	{
	if(isset($_SESSION['id']))	{
			$curPerson=$_SESSION['id'];
	}
}*/
$curPerson=$_GET['curPerson'];
if(isset($_GET['stammblattnr'])) {
	$stammblattnr=$_GET['stammblattnr'];
}
else {
	$stammblattnr=1;
}
$bearbeiten=false;

//Geänderte Daten in die Datenbank speichern
if(isset($_POST['saveEdit']))	{
	$changeDB="";
	$changeDB.="nachname=\"" . $_POST['nachname'] . "\"";
	$changeDB.=", maedName=\"" . $_POST['maedName'] . "\"";
	$changeDB.=", vorname=\"" . $_POST['vorname'] . "\"";
	$changeDB.=", rufname=\"" . $_POST['rufname'] . "\"";
	$changeDB.=", titel=\"" . $_POST['titel'] . "\"";
	$changeDB.=", kurzzeichen=\"" . $_POST['kurzzeichen'] . "\"";
	$changeDB.=", gebDatum=\"" . $_POST['gebDatum'] . "\"";
	$changeDB.=", gebOrt=\"" . $_POST['gebOrt'] . "\"";
	$changeDB.=", konfession=\"" . $_POST['konfession'] . "\"";
	$changeDB.=", ausbildung=\"" . $_POST['ausbildung'] . "\"";
	$changeDB.=", berufLaufbahn=\"" . $_POST['berufLaufbahn'] . "\"";
	$changeDB.=", profTaetigkeiten=\"" . $_POST['profTaetigkeiten'] . "\"";
	$changeDB.=", hobbies=\"" . $_POST['hobbies'] . "\"";
	//$changeDB.=", vater=\"" . $_POST['vater'] . "\"";
	//$changeDB.=", mutter=\"" . $_POST['mutter'] . "\"";
	$changeDB.=", gebMutter=\"" . $_POST['gebMutter'] . "\"";
	//$changeDB.=", partnerin=\"" . $_POST['partnerin'] . "\"";
	$changeDB.=", trauDatum=\"" . $_POST['trauDatum'] . "\"";
	$changeDB.=", trauOrt=\"" . $_POST['trauOrt'] . "\"";
	$changeDB.=", kind=\"" . $_POST['kind'] . "\"";
	$changeDB.=", verstorbenAm=\"" . $_POST['verstorbenAm'] . "\"";
	$changeDB.=", verstorbenIn=\"" . $_POST['verstorbenIn'] . "\"";
	$changeDB.=", todUrsache=\"" . $_POST['todUrsache'] . "\"";
	$changeDB.=", begraebnisAm=\"" . $_POST['begraebnisAm'] . "\"";
	$changeDB.=", begraebnisIn=\"" . $_POST['begraebnisIn'] . "\"";
	$changeDB.=", militaerdienst=\"" . $_POST['militaerdienst'] . "\"";
	//$meldung="UPDATE lebensdaten SET " . $changeDB . " WHERE id=\"" . $curPerson . "\" ";
	$pdo -> query("UPDATE lebensdaten SET " . $changeDB . " WHERE id=\"" . $curPerson . "\" ");
}

	
$row=$pdo -> query("SELECT * FROM lebensdaten WHERE id=$curPerson");
$person=$row->fetch();

//Query die den Namen des Vaters zurückgibt
$query=$pdo -> query("SELECT vorname,nachname FROM lebensdaten WHERE id=$person[vater]");
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

//Wenn das File gerade bearbeitet wird sollen Text Boxen statt einfachem Text angezeigt werden
if(isset($_GET['edit']) && $_GET['edit']=='true') {
	$bearbeiten=true;
}
else {
	$bearbeiten=false;
}


if($bearbeiten==true) {
	$personArray=array(
		"nachname" => "<input value=\"" . $person['nachname'] . "\" name=\"nachname\" type=\"text\" class=\"validate\">",
		"maedName" => "<input value=\"" . $person['maedName'] . "\" name=\"maedName\" type=\"text\" class=\"validate\">",
		"vorname" => "<input value=\"" . $person['vorname'] . "\" name=\"vorname\" type=\"text\" class=\"validate\">",
		"rufname" => "<input value=\"" . $person['rufname'] . "\" name=\"rufname\" type=\"text\" class=\"validate\">",
		"titel" => "<input value=\"" . $person['titel'] . "\" name=\"titel\" type=\"text\" class=\"validate\">",
		"kurzzeichen" => "<input value=\"" . $person['kurzzeichen'] . "\" name=\"kurzzeichen\" type=\"text\" class=\"validate\">",
		"gebDatum" => "<input value=\"" . $person['gebDatum'] . "\" name=\"gebDatum\" type=\"text\" class=\"validate\">",
		"gebOrt" => "<input value=\"" . $person['gebOrt'] . "\" name=\"gebOrt\" type=\"text\" class=\"validate\">",
		"konfession" => "<input value=\"" . $person['konfession'] . "\" name=\"konfession\" type=\"text\" class=\"validate\">",
		"ausbildung" => "<input value=\"" . $person['ausbildung'] . "\" name=\"ausbildung\" type=\"text\" class=\"validate\">",
		"berufLaufbahn" => "<input value=\"" . $person['berufLaufbahn'] . "\" name=\"berufLaufbahn\" type=\"text\" class=\"validate\">",
		"profTaetigkeiten" => "<input value=\"" . $person['profTaetigkeiten'] . "\" name=\"profTaetigkeiten\" type=\"text\" class=\"validate\">",
		"hobbies" => "<input value=\"" . $person['hobbies'] . "\" name=\"hobbies\" type=\"text\" class=\"validate\">",
		"vater" => "<input value=\"" . $vater . "\" name=\"vater\" type=\"text\" class=\"validate\">",
		"mutter" => "<input value=\"" . $mutter . "\" name=\"mutter\" type=\"text\" class=\"validate\">",
		"gebMutter" => "<input value=\"" . $person['gebMutter'] . "\" name=\"gebMutter\" type=\"text\" class=\"validate\">",
		"partnerin" => "<input value=\"" . $partnerin . "\" name=\"partnerin\" type=\"text\" class=\"validate\">",
		"trauDatum" => "<input value=\"" . $person['trauDatum'] . "\" name=\"trauDatum\" type=\"text\" class=\"validate\">",
		"trauOrt" => "<input value=\"" . $person['trauOrt'] . "\" name=\"trauOrt\" type=\"text\" class=\"validate\">",
		"kind" => "<input value=\"" . $person['kind'] . "\" name=\"kind\" type=\"text\" class=\"validate\">",
		"verstorbenAm" => "<input value=\"" . $person['verstorbenAm'] . "\" name=\"verstorbenAm\" type=\"text\" class=\"validate\">",
		"verstorbenIn" => "<input value=\"" . $person['verstorbenIn'] . "\" name=\"verstorbenIn\" type=\"text\" class=\"validate\">",
		"todUrsache" => "<input value=\"" . $person['todUrsache'] . "\" name=\"todUrsache\" type=\"text\" class=\"validate\">",
		"begraebnisAm" => "<input value=\"" . $person['begraebnisAm'] . "\" name=\"begraebnisAm\" type=\"text\" class=\"validate\">",
		"begraebnisIn" => "<input value=\"" . $person['begraebnisIn'] . "\" name=\"begraebnisIn\" type=\"text\" class=\"validate\">",
		"militaerdienst" => "<input value=\"" . $person['militaerdienst'] . "\" name=\"militaerdienst\" type=\"text\" class=\"validate\">",
	);	
}
else {
	$personArray=array(
		"nachname" => $person['nachname'],
		"maedName" => $person['maedName'],
		"vorname" => $person['vorname'],
		"rufname" => $person['rufname'],
		"titel" => $person['titel'],
		"kurzzeichen" => $person['kurzzeichen'],
		"gebDatum" => $person['gebDatum'],
		"gebOrt" => $person['gebOrt'],
		"konfession" => $person['konfession'],
		"ausbildung" => $person['ausbildung'],
		"berufLaufbahn" => $person['berufLaufbahn'],
		"profTaetigkeiten" => $person['profTaetigkeiten'],
		"hobbies" => $person['hobbies'],
		"vater" => $vater,
		"mutter" => $mutter,
		"gebMutter" => $person['gebMutter'],
		"partnerin" => $partnerin,
		"trauDatum" => $person['trauDatum'],
		"trauOrt" => $person['trauOrt'],
		"kind" => $person['kind'],
		"verstorbenAm" => $person['verstorbenAm'],
		"verstorbenIn" => $person['verstorbenIn'],
		"todUrsache" => $person['todUrsache'],
		"begraebnisAm" => $person['begraebnisAm'],
		"begraebnisIn" => $person['begraebnisIn'],
		"militaerdienst" => $person['militaerdienst'],
	);
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




if($stammblattnr == 1) {
	$sb_nr = "I";
}
if($stammblattnr == 2) {
	$sb_nr = "II";
}
if($stammblattnr == 3) {
	$sb_nr = "III";
}
if($stammblattnr == 4) {
	$sb_nr = "IV";
}
include 'nahansicht-gui_' . $sb_nr . '.php';
include 'close.php';
?>