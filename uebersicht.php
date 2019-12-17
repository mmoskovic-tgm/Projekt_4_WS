
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

$screen_width;


// For instance, you can do something like this:
if(isset($_POST['width'])) {
	global $screen_width;
	global $meldung;
    $screen_width = $_POST['width'];
	createTree();
}




function createDiv($funcID,$ebene,$layPersonCount,$layPersonGesamt)	{
	global $pdo;
	global $screen_width;
	global $_POST;
	global $meldung;
	if(!isset($screen_width))	{
		$screen_width=1440;
	}
	$funcRet="";
	$personBoxSize=$screen_width*0.055;

	//$meldung=$screen_width;
	$q=$pdo -> query("SELECT geschlecht FROM lebensdaten WHERE id=$funcID");

	$layPersonCount+=1;
	$center=$screen_width/2;
	$left=$center-($personBoxSize*0.5);
	
	$left=($screen_width/($layPersonGesamt+1)*$layPersonCount)-$personBoxSize/2;
	
	/*
	if($layPersonCount<$layPersonGesamt/2)	{
		$left=($screen_width/($layPersonGesamt)*$layPersonCount)-$personBoxSize/2;
	}
	else {
		$left=$center+(($screen_width/($layPersonGesamt)*$layPersonCount)-$personBoxSize/2);
	}*/




	
	if(fetchTester($q)=="männlich")	{
		$funcRet.="<div class=\"personBox mann ebene". $ebene ."\" style = \"left: " . $left . " \"  >";
	}else {
		$funcRet.="<div class=\"personBox frau ebene". $ebene ."\" style = \"left: " . $left . " \"  >";
	}
	
	/*
	if(fetchTester($q)=="männlich")	{
		$funcRet.="<div class=\"personBox mann \" style = \"left: " . $left . " top:" . $ebene*100 . " \"  >";
	}else {
		$funcRet.="<div class=\"personBox frau \" style = \"left: " . $left . " top:" . $ebene*100 . " \"  >";
	}*/

	$funcRet.=$pdo -> query("SELECT vorname FROM lebensdaten WHERE id='$funcID'")->fetchColumn() . "<br>";
	$nachname=strtoupper($pdo -> query("SELECT nachname FROM lebensdaten WHERE id='$funcID'")->fetchColumn());
	
	if(strlen($nachname)>8)	{
		$subst=substr($nachname,0,(strlen($nachname)/2))."-";
		$funcRet.=substr_replace($nachname,$subst,0,intval((strlen($nachname)/2)));
	}
	else {
		$funcRet.=$nachname;
	}
	
	
	$funcRet.="</div>";

	return $funcRet;
	
}

function createTree() {
		global $aID;
		global $name;
		global $pdo;
		global $output;
		global $meldung;
		
		$output="";
		
		$noParent=false;
		$currentPerson=$aID;
		$mother="";
		$father="";
	
		$peopleCurLayer=new SplFixedArray(1);
		$peopleCurLayer[0]=$currentPerson;
	
		$q1;
		$q2;
		
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
	
		
		$currentPerson=$aID;
		$mother="";
		$father="";
		$noParent=false;
		$peopleCurLayer=new SplFixedArray(1);
		$peopleCurLayer[0]=$currentPerson;
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
					$output.=createDiv($currentPerson,$ebene,$i,count($peopleCurLayer));
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