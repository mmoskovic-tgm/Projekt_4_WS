
<?php	
include 'open.php';	

if(isset($_GET['stammbaumID'])) {
	$aID=$_GET['stammbaumID'];
}


$personBoxWidth=130;
$personBoxHeight=$personBoxWidth/1.5;

/* AJAX
if(isset($_POST['apersid'])) {
	$aID=$aPersonen[$_POST['apersid']];
	$aID=10;
	$output="<svg><g id='scene'><?php";
	createTree();
	$output.="?></g></svg>";
	$meldung="blabla";
}*/

function createDiv($funcID,$ebene,$layPersonCount,$layPersonGesamt,$maxPerson,$letzteEbene)		{
	global $pdo;
	global $_POST;
	global $meldung;
	global $personBoxWidth;
	global $personBoxHeight;
	$rect="";
	$text="";
	$funcRet="";

	$q=$pdo -> query("SELECT geschlecht FROM lebensdaten WHERE id=$funcID");

	$layPersonCount+=1;
	$boxAbstand=30;
	$fontSize=1440*0.008;
	$abstandBox=(($personBoxWidth+30)*$maxPerson)/($layPersonGesamt+1);
	$left=((($personBoxWidth+30)*$maxPerson)/($layPersonGesamt+1)*$layPersonCount);	
	$abstandEbene=120;
	$top=$ebene*$abstandEbene;
	$geschlecht=$pdo -> query("SELECT geschlecht FROM lebensdaten WHERE id=$funcID") -> fetchColumn();
	
	$q3=$pdo -> query("SELECT geschwister FROM lebensdaten WHERE id=$funcID") -> fetchColumn();
	if($q3!=null)	{
		$geschwister=str_getcsv($q3,";");
		
		for($i=0;$i<count($geschwister);$i++)	{
			
			if($geschlecht=="m&#228nnlich") {
				$rect.=createBox(($left-($i+1)*($personBoxWidth+$boxAbstand)),$top,$geschwister[$i],$fontSize, $personBoxWidth,$personBoxHeight,$abstandEbene,$ebene,$letzteEbene,true,$abstandBox);
				//Linie für geschwister
				if($i<count($geschwister)) {
					//$meldung.=$i+1;
					//$rect.='<line x1="'. ( $left-($boxAbstand*($i+1)+$personBoxWidth*$i)+$boxAbstand ) . '" y1="' . ($top+$personBoxHeight/2) . '" x2="' . ( $left-($boxAbstand*($i+1)+$personBoxWidth*$i) ) .'" y2="' . ($top+$personBoxHeight/2) . '"/>';
				}
				
			}
			else {
				$rect.=createBox(($left+($i+1)*($personBoxWidth+30)),$top,$geschwister[$i],$fontSize, $personBoxWidth,$personBoxHeight,$abstandEbene,$ebene,$letzteEbene,true,$abstandBox);
				if($i<count($geschwister)) {
					//$meldung.=$i+1;
					//$rect.='<line x1="'. ( $left-($boxAbstand*($i+1)+$personBoxWidth*$i)+$boxAbstand+$personBoxWidth ) . '" y1="' . ($top+$personBoxHeight/2) . '" x2="' . ( $left-($boxAbstand*($i+1)+$personBoxWidth*$i) ) .'" y2="' . ($top+$personBoxHeight/2) . '"/>';
				}
			}
			
		}
		
	}
	
	$rect.=createBox($left,$top,$funcID,$fontSize, $personBoxWidth,$personBoxHeight,$abstandEbene,$ebene,$letzteEbene,false,$abstandBox);
	
	
	
	
	return $rect;
	
}

function createBox($left,$top,$funcID,$fontSize, $personBoxWidth,$personBoxHeight,$abstandEbene,$ebene,$letzteEbene,$istGeschwister,$abstandBox) {
	global $pdo;
	global $meldung;
	
	$hatStammblatt=$pdo -> query("SELECT stammbaum FROM lebensdaten WHERE id=$funcID") -> fetchColumn();
	
	$onclick="#";
	if($hatStammblatt==true) {
		$onclick="document.location='nahansicht.php?curPerson=" . $funcID . "'";
		$fontWeight="bold";
	}
	else {
		$fontWeight="normal";
	}

	
	
	$rect="<rect onclick=\"" . $onclick . "\" x='" . $left . "' y='" . $top . "' width='" . $personBoxWidth . "' height='" . $personBoxHeight . "' class=\"personenBox\"/>";

	
	
	
	
	
	
	
	
	$rect.="<text onclick=\"" . $onclick . "\" class='personBoxText' x='" . $left . "' y='" . $top . "' inline-size='" . $personBoxWidth . "'>";
	
	// Vorname
	$rect.="<tspan  x='" . ($left+2) . "' y='" . ($top+15) . "' font-size='" . $fontSize . "'>";
	$rect.=$pdo -> query("SELECT vorname FROM lebensdaten WHERE id='$funcID'")->fetchColumn();
	$rect.="</tspan>";
	$rect.="<tspan x='" . ($left+2) . "' y='" . ($top+30) . "' font-size='" . $fontSize . "' font-weight='" . $fontWeight . "'>";
	$nachname=$pdo -> query("SELECT nachname FROM lebensdaten WHERE id='$funcID'")->fetchColumn();
	
	// Nachname 
	$rect.="<tspan x='" . ($left+2) . "' y='" . ($top+30) . "' font-size='" . $fontSize . "' font-weight='" . $fontWeight . "'>";
	$nachname=$pdo -> query("SELECT nachname FROM lebensdaten WHERE id='$funcID'")->fetchColumn();
	$rect.="</tspan>";
	
	
	
	for($i=0;$i<strlen($nachname);$i++) {
		switch(substr($nachname,$i,5)) {
			case '&#252':
				$nachname=str_replace('&#252','&#220',$nachname);
				break;
			case '&#228':
				$nachname=str_replace('&#228','&#196',$nachname);
				break;
			case '&#246':
				$nachname=str_replace('&#246','&#214',$nachname);
				break;
				
		}
		
	}
	$rect.=strtoupper($nachname);
	$maedName="";
	$maedName=$pdo -> query("SELECT maedName FROM lebensdaten WHERE id='$funcID'")->fetchColumn();
	
	if(isset($maedName)) {
		$rect.="<tspan x='" . ($left+2) . "' y='" . ($top+45) . "' font-size='" . $fontSize . "'>";
		$rect.="[ " . $maedName . " ]";
		
	}
		
	$rect.="</tspan>";
	
	$fontWeight="normal";

	$rect.="<tspan x='" . ($left+5) . "' y='" . (($ebene*120)+68) . "' font-size='" . $fontSize . "' font-weight='" . $fontWeight . "'>";
	$gebdatum=$pdo -> query("SELECT gebdatum FROM lebensdaten WHERE id='$funcID'")->fetchColumn();
	$rect.=substr($gebdatum,strlen($gebdatum)-4,4);
	$rect.=" - ";
	$toddatum=$pdo -> query("SELECT verstorbenAm FROM lebensdaten WHERE id='$funcID'")->fetchColumn();
	if(substr($toddatum,strlen($toddatum)-4,4)!="-") {
		$rect.=substr($toddatum,strlen($toddatum)-4,4);
	}
	$rect.="</tspan>";
	$rect.="</text>";
	
	if($ebene!=1) {
		$rect.="<line x1=\" " . ($left+($personBoxWidth/2)) . " \" y1=\" " . $top . " \" x2=\" " . ($left+($personBoxWidth/2)) . " \" y2=\" " . ($top-($abstandEbene-$personBoxHeight)/2) . " \"/>";
	}
	if($ebene!=$letzteEbene && $istGeschwister==false) {
		$rect.="<line x1=\" " . ($left+($personBoxWidth/2)) . " \" y1=\" " . ($top+$personBoxHeight) . " \" x2=\" " . ($left+($personBoxWidth/2)) . " \" y2=\" " . ($top+$personBoxHeight+($abstandEbene-$personBoxHeight)/2) . " \"/>";
	}
	
	
	$geschlecht=$pdo -> query("SELECT geschlecht FROM lebensdaten WHERE id=$funcID") -> fetchColumn();
	if($geschlecht=="m&#228nnlich" && $istGeschwister==false && $ebene!=$letzteEbene) {
		$rect.="<line x1=\"" . ($abstandBox+$left+$personBoxWidth/2) . "\" y1=\"" . ($top+$personBoxHeight+($abstandEbene-$personBoxHeight)/2) . "\" x2=\"" . (($left+$personBoxWidth/2)) . "\" y2=\"" . ($top+$personBoxHeight+($abstandEbene-$personBoxHeight)/2) . "\"/>";

	}
	else {
		//$rect.="<line x1=\"" . ($abstandBox+$left+$personBoxWidth/2) . "\" y1=\"" . $top . "\" x2=\"" . (10+$left+$personBoxWidth/2) . "\" y2=\"" . $top . "\"/>";
	}
	if($geschlecht=="männlich" && $istGeschwister==true) {
		
		$rect.="<line x1=\"" . ($left+$personBoxWidth/2) . "\" y1=\"" . ($top-($abstandEbene-$personBoxHeight)/2) . "\" x2=\"" . ($left+$personBoxWidth+100) . "\" y2=\"" . ($top-($abstandEbene-$personBoxHeight)/2) . "\"/>";
	}
	else if($geschlecht=="weiblich" && $istGeschwister==true){
		
		$rect.="<line x1=\"" . ($left-$personBoxWidth/2) . "\" y1=\"" . ($top-($abstandEbene-$personBoxHeight)/2) . "\" x2=\"" . ($left-$personBoxWidth+100) . "\" y2=\"" . ($top-($abstandEbene-$personBoxHeight)/2) . "\"/>";
	}
	
	return $rect;
}

function createTree() {
		global $aID;
		global $pdo;
		global $output;
		global $meldung;
		
		//$output="";
		
		$noParent=false;
		$currentPerson=$aID;
		$mother="";
		$father="";
	
		$peopleCurLayer=new SplFixedArray(1);
		$peopleCurLayer[0]=$currentPerson;
	
		$q1;
		$q2;
		$geschwisterAnzahl=0;
		
		$ebene=0;
		while($noParent==false)	{
			$noParent=true;		
			$parentArraySize=$peopleCurLayer -> getSize()*2;
			$peopleArraySize=$peopleCurLayer -> getSize();
			$parentCurLayer=new SplFixedArray($parentArraySize);
			for($i=0,$i2=0;$i < $peopleArraySize;$i++,$i2+=2)	{
				$currentPerson=$peopleCurLayer[$i];
				$q1=$pdo -> query("SELECT vater FROM lebensdaten WHERE id=$currentPerson");
				$q2=$pdo -> query("SELECT mutter FROM lebensdaten WHERE id=$currentPerson");

				
				$parentCurLayer[$i2]=fetchTester($q1);
				$parentCurLayer[$i2+1]=fetchTester($q2);
				if(!is_null($parentCurLayer[$i]) || !is_null($parentCurLayer[$i+1]))	{
					$noParent=false;
				}	
			}
			$peopleCurLayer=$parentCurLayer;
			$parentCurLayer=null;
			$ebene++;
		}
		$maxPerson=$peopleCurLayer -> getSize() /2;
		
		$currentPerson=$aID;
		$mother="";
		$father="";
		$noParent=false;
		$peopleCurLayer=new SplFixedArray(1);
		$peopleCurLayer[0]=$currentPerson;
		$letzteEbene=$ebene;	
	
		while($noParent==false)	{
			$noParent=true;
			
			//Genügend Großes Array für $parentCurLayer erstellen
			
			
			$parentArraySize=$peopleCurLayer -> getSize()*2;
			$peopleArraySize=$peopleCurLayer -> getSize();
			$parentCurLayer=new SplFixedArray($parentArraySize);
			
			
			
			for($i=0,$i2=0;$i < $peopleArraySize;$i++,$i2+=2)	{
				$currentPerson=$peopleCurLayer[$i];

				$q1=$pdo -> query("SELECT vater FROM lebensdaten WHERE id=$currentPerson");
				$q2=$pdo -> query("SELECT mutter FROM lebensdaten WHERE id=$currentPerson");

				
				$parentCurLayer[$i2]=fetchTester($q1);
				$parentCurLayer[$i2+1]=fetchTester($q2);
				
				
				
				
				if(!is_null($parentCurLayer[$i]) || !is_null($parentCurLayer[$i+1]))	{
					$noParent=false;
					
				}
				
				if(!is_null($currentPerson)) {
					$output.=createDiv($currentPerson,$ebene,$i,count($peopleCurLayer),$maxPerson,$letzteEbene);
				}
				else {
					if($i % 2==0) {
						$output.=createDiv(1000,$ebene,$i,count($peopleCurLayer),$maxPerson,$letzteEbene);
					}
					else {
						$output.=createDiv(1001,$ebene,$i,count($peopleCurLayer),$maxPerson,$letzteEbene);
					}
					
				}
				
				
				
			}
			
			$peopleCurLayer=$parentCurLayer;
			$parentCurLayer=null;
			
			
			$ebene--;
		}	
}



function fetchTester($q) {
	if(!$q) {
	  return null;
	}

	else{
		return $q->fetchColumn();
	}
				

}














include 'uebersicht-gui.php';
include 'close.php';
?>