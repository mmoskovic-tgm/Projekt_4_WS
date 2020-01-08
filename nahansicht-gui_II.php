<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>FamArch</title>
	
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection">
	<link rel="stylesheet" href="style.css">
														   
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="nahansichtFonttype">
	<nav>
    <div class="nav-wrapper grey darken-4">	
		<!--<img src="img/logo.png" class="brand-logo" width="3.5%" height="90%" hspace="20">	-->	
		<a href="index.php" class="brand-logo logo">FamArch</a>
    	<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="uebersicht.php" class="navBar">Übersicht</a></li>
			<li><a href="#" class="navBar">Personen</a></li>
			<li><a href="#" class="navBar">Suche</a></li>
     	</ul>
    </div>
  </nav>
	<p align="right">		
		<a href="nahansicht.php?curPerson=<?php echo $curPerson; ?>&stammblattnr=1" class='btn grey' value="0">I</a>
		<a href="nahansicht.php?curPerson=<?php echo $curPerson; ?>&stammblattnr=2" class='btn grey' value="0">II</a>
		<a href="nahansicht.php?curPerson=<?php echo $curPerson; ?>&stammblattnr=3" class='btn grey' value="0">III</a>
		<a href="nahansicht.php?curPerson=<?php echo $curPerson; ?>&stammblattnr=4" class='btn grey' value="0">IV</a>
	</p>

	<br>
	
	<h4 style="margin-left:10%;"><b>Teil II:</b> Persönlichkeitsmerkmale von <?php echo $person['nachname']?> <?php echo $person['vorname']?> (soweit bekannt)</h4>
	<br>
		<h5 style="margin-left:10%;"><b>1. Charakterliche Merkmale </b></h5>
		<?php if($curPerson==36) { ?>
		<p class="nahansichtGesamtTabelle">
		Mutig: Schlagende Verbindung bei Montanistischer Hochschule Leoben. Rückmeldung der Kaserne in Wr. Neustadt, als Ausbilder als Flieger an der Front <br>
		Ehrgeizig: Frohe Briefe an eltern
		</p>
		<?php } ?>
		<?php if($curPerson==4) { ?>
		<p class="nahansichtGesamtTabelle">
		Hilfsbereit: gutmütig, Kinderliebend, Offenheit, guter Umgang mit allen Personen, würde die haushaltsordnung unterstützen,lustig <br>
		Gutes Gespür für Recht und Unrecht: Extreme Gegnerin von Hitler und dem Nationalsozialismus ("Hoffentlich verlieren wir den Krieg")
		</p>
		<?php } ?>
	<h5 style="margin-left:10%;"><b>2. Besondere Begabungen und Fähigkeiten</b> </h5>
		<?php if($curPerson==36) { ?>
		<p class="nahansichtGesamtTabelle">			
		Fliegen: Poinier im 1. Weltkrieg.Flugzeugtyp im Heeresgeschichtlichen Museum<br>
		Ausbildung von zukünftlichen Piloten: Belohnung von höchster Instanz<br>
		Dankbarkeit an Eltern: Post von der Front an Weihnachten<br>
		Innovativ: Fliegen und Photographie (1. Aufnahme unserer Heimatgemeinde - Maria Enzersdorf)
		</p>
		<?php } ?>
		
		<?php if($curPerson==4) { ?>
		<p class="nahansichtGesamtTabelle">
		Hohe Intelligenz (Matura, Studium)<br>
		Handwerkliche Geschicklichkeit<br>
		Sprachliche Begabung (Deutsch, Englisch, Französisch)<br>
		Interesse an Theater<br>
		Musikalische Begabung (Studium Klavier)<br>
		Kenntniss der Klassischen Musik/Oper (jedes Jahr wurde Ihr Geburtstag in der Oper gefeiert)<br>
		Die Musikalität ermöglicht auch anderen Menschen sprachlich zu imitieren<br>
		Didaktische Begabung (Es war ein Vergnügen für mich(sicht Heinz Hübner) mit Mutti Französisch zu lernen)<br>
		</p>
		<?php } ?>
	<h5 style="margin-left:10%;"><b>3. Bewährung in spezifischen Situationen</b> </h5>
		<?php if($curPerson==4) { ?>
			<p class="nahansichtGesamtTabelle">
		Zum ende des zweiten Weltkriegs drohten große Gefahren für Familien und Frauen. Bombadierungen im Raum Wien und Einmarsch russischer
		Truppen. Wer die Möglichkeit hatte flüchtete in den Westen so auch wir. Da wir mehrere Sommer vorher in einem Hotel am Achensee
		(Tirol) auf Urlaub gewesen sind sagte uns der Pächter zu, dass wir kommen können, außerhalb der Saison weil er den Krieg (von München aus) 
		auch von dort verbringe. Die bewilligte Fahrt mit PKW und Anhängern endete jedoch in Vöcklabruck. Die Männer sollten zur Volkssturm,
		für die Mutter + Kinder standen ein Zug mit Viehwaggons bereit. Und damit begann die Bewährung für Mutti.AmMorgen des nächsten Tages 
		kamen wir in Jenbach an. Die Frage ob wir ein Erlaubnis haben bejahte sie mit einem lauten "Jit" (die Bewilligung hatte aber Vater)
		Es war kalt und schneite und Mutti musste einen zum Ackensee organisieren, dies ist ihr auch gelungen. Ein Lastwagen brachte uns
		zum Hotel. Dieses war leer, wir bezogen äußere Zimmer in der Despandeuce mit Lavoire und Wasserkrug, das Bad war am Gang. Mutti 
		durfte in der großen, eiskalten Hotelküche im Hotel für uns inklusive Oma (die sich im Viehwagen den Arm gebrochen hat) kochen.
		Einkaufen gingen wir fast täglich zum See-Eude Richy Bayern. Eines Tages kamen uns US-amerikanische Panzer entgegen und blieben 
		stehen. "Welcome in Austria" war Muttis Begrüßung. Der Offizier war froh, das jemand endlich Englisch sprechen konnte, was ein
		großer Vorteil war. Wenn wir Räumlichkeiten und eigenen Eingang finden, können wir bleiben, ansonsten müssen wir ins 
		Flüchtlingsquartier nach Achenkirch. Mutti geling dies und war Dolmetscherin für alle Fragen und Probleme der Befreiungstruppen 
		von der Heerdiktatur. Die Truppen wurde bald durch Marokanische Trupen ersetzt und fungierte wieder als Dolmetscherin, was uns
		viele Vorteile brachte. Fast 3 Monate behauptete sie viel als Frau, Mutter in der Männerwelt bis Vater kam. 
			</p>
		<?php } ?>
	<h5 style="margin-left:10%;"><b>4. Fügungen (günstige/ungünstige)</b></h5>
		<?php if($curPerson==4) { ?>
		
		<?php } ?>
	<h5 style="margin-left:10%;"><b>5. Sonstige ergänzende Kommentare</b></h5>
		<?php if($curPerson==4) { ?>
		<p class="nahansichtGesamtTabelle">
		Natürlich hatte auch Mutti ihre Mucken, war die Einschätzung von Menschen, unter anderem von meinem Freund Werner und meiner
geliebten Brigitte. Sport war auch nicht ihre Stärke. 
		
		<br>
		<br>
		Persönlich habe ich große Dankbarkeit für:
Die empfange Liebe
Die Hingabe zur Musik
Das Wecken der Interesse für das Theater und Literatur
Eine gewisse sprachliche Begabung
<br>
		<br>
Abschlussbemerkung:
Die Familie Schwab war in Baden sehr beliebt und meine Mutter erregte sicher wegen ihrer Persönlichkeit und ihrer Beabung und Fähigkeiten 
im Bekannten und Freundeskreis ihrer Eltern für Aufsehen. Wie sie auch öfters erzählte gab es auch viele "freier" zumeist
Unternehmer aber mit wenig Interesse. Nach dem unerwarteten Ableben ihres Vaters hilft sie ihrer Mutter bei der Umwandlung
des Unternehmens als Witwebetrieb. Dann ging sie aufgrund der aktuellen Situation selbst auf Bräutigam Schau und fuhr nach 
Kitzbühel. Es fügte sich, dass die Nicht Skifahrerin unseren Vater den Skifahrer kennenlernte. Wie dies geschehen ist, ist eine
andere Geschichte die wir unsere Existenz zu verdanken haben.
			</p>
		<?php } ?>
	  </div>


</body></html>