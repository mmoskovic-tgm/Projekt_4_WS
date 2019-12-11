
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
if(isset($_POST['width']) && isset($_POST['height'])) {
    $screen_width = $_POST['width'];
    echo json_encode(array('outcome'=>'success'));
} else {
    echo json_encode(array('outcome'=>'error','error'=>"Couldn't save dimension info"));
}



function createDiv($funcID,$ebene)	{
	global $pdo;
	global $screen_width;
	$funcRet="";
	
	$q=$pdo -> query("SELECT geschlecht FROM lebensdaten WHERE id=$funcID");
	
	
	if(fetchTester($q)=="männlich")	{
		$funcRet.="<div class=\"personBox mann ebene". $ebene ."\" style = \"width: " . $screen_width . " \"  >";
	}else {
		$funcRet.="<div class=\"personBox frau ebene". $ebene . "\">";
	}
	
	$funcRet.=$pdo -> query("SELECT vorname FROM lebensdaten WHERE id='$funcID'")->fetchColumn();
	$funcRet.="</div>";
	
	return $funcRet;
}

function createTree() {
		global $aID;
		global $name;
		global $pdo;
		global $output;

		
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
					$output.=createDiv($currentPerson,$ebene);
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