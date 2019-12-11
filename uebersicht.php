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
	
	$q=$pdo -> query("SELECT geschlecht FROM lebensdaten WHERE id=$funcID");
	
	
	if(fetchTester($q)=="männlich")	{
		$funcRet.="<div class=\"personBox mann\">";
	}else {
		$funcRet.="<div class=\"personBox frau\">";
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
		$waitingPersons=[null,null,null,null,null,null,null,null,null,null,null];
		$mother="";
		$father="";
	
		$peopleCurLayer=new SplFixedArray(1);
		$peopleCurLayer[0]=$currentPerson;
	
		$q1;
		$q2;

		while($noParent==false)	{
			$noParent=true;
			
			//Genügend Großes Array für $parentCurLayer erstellen
			
			
			$parentArraySize=$peopleCurLayer -> getSize()*2;
			$peopleArraySize=$peopleCurLayer -> getSize();
			$parentCurLayer=new SplFixedArray($parentArraySize);
			
			
			
			for($i=0,$i2=0;$i < $peopleArraySize;$i++,$i2+=2)	{
				$currentPerson=$peopleCurLayer[$i];
				/**
				$parentCurLayer[$i]=$pdo -> query("SELECT vater FROM lebensdaten WHERE id=$currentPerson")->fetchColumn();
				$parentCurLayer[$i+1]=$pdo -> query("SELECT vater FROM lebensdaten WHERE id=$currentPerson")->fetchColumn();*/
				
				$q1=$pdo -> query("SELECT vater FROM lebensdaten WHERE id=$currentPerson");
				$q2=$pdo -> query("SELECT mutter FROM lebensdaten WHERE id=$currentPerson");
				
				
				$parentCurLayer[$i2]=fetchTester($q1);
				$parentCurLayer[$i2+1]=fetchTester($q2);
				/**
				if(!$q1) {
				  $parentCurLayer[$i]=null;
				}
				
				else{
					$parentCurLayer[$i]=$q1->fetchColumn();
				}
				
				if(!$q2) {
				  $parentCurLayer[$i+1]=null;
				}
				
				else{
					$parentCurLayer[$i+1]=$q1->fetchColumn();
				}*/
				

				
				
				
				if(!is_null($parentCurLayer[$i]) || !is_null($parentCurLayer[$i+1]))	{
					$noParent=false;
				}
				
				if(!is_null($currentPerson)) {
					$output.=createDiv($currentPerson);
				}
				
				
				
			}
			
			$peopleCurLayer=$parentCurLayer;
			$parentCurLayer=null;
			
			

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