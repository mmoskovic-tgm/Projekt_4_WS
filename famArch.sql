DROP DATABASE IF EXISTS famArch;
	CREATE DATABASE famArch;
	USE famArch;

	DROP TABLE IF EXISTS lebensdaten;
	CREATE TABLE lebensdaten (
		id INTEGER,
		nachname VARCHAR(400),
		vorname VARCHAR(400),
		maedName VARCHAR(400),
		rufname VARCHAR(400),
		titel VARCHAR(200),
		kurzzeichen VARCHAR(500),
		gebDatum VARCHAR(300),
		gebOrt VARCHAR(300),
		konfession VARCHAR(200),
		ausbildung VARCHAR(500),
		berufLaufbahn VARCHAR(200),
		profTaetigkeiten VARCHAR(100),
		hobbies VARCHAR(100),
		vater INTEGER,
		mutter INTEGER,
		gebMutter VARCHAR(200),
		partnerin INTEGER,
		trauDatum VARCHAR(300),
		trauOrt VARCHAR(300),
		kind VARCHAR(500),
		geschwister VARCHAR(500),
		verstorbenAm VARCHAR(300),
		verstorbenIn VARCHAR(300),
		todUrsache VARCHAR(300),
		begraebnisAm VARCHAR(300),
		begraebnisIn VARCHAR(300),
		militaerdienst VARCHAR(400),
		geschlecht VARCHAR(300),
		stammbaum boolean,
		PRIMARY KEY(id),
		FOREIGN KEY (vater) REFERENCES lebensdaten(id),
		FOREIGN KEY (mutter) REFERENCES lebensdaten(id),
		FOREIGN KEY (partnerin) REFERENCES lebensdaten(id)
	)ENGINE=INNODB;


	DROP TABLE IF EXISTS pMerkmale;
	CREATE TABLE pMerkmale (
		id INTEGER,
		charMerkmale VARCHAR(300),
		faehigkeiten VARCHAR(300),
		besonSituation VARCHAR(300),
		fuegungen VARCHAR(300),
		kommentare VARCHAR(300),
		PRIMARY KEY(id),
		FOREIGN KEY (id) REFERENCES lebensdaten(id)
	)ENGINE=INNODB;

	DROP TABLE IF EXISTS objekte;
	CREATE TABLE objekte (
		id INTEGER,
		werke VARCHAR(300),
		dokumente VARCHAR(300),
		sonstiges VARCHAR(300),
		korrespondenzen VARCHAR(300),
		sammlungen VARCHAR(300),
		PRIMARY KEY(id),
		FOREIGN KEY (id) REFERENCES lebensdaten(id)
	)ENGINE=INNODB;

	DROP TABLE IF EXISTS tag;
	CREATE TABLE tag (
		name VARCHAR(40),
		PRIMARY KEY(name)
	)ENGINE=INNODB;

	DROP TABLE IF EXISTS lebDatenTag;
	CREATE TABLE lebDatenTag (
		name VARCHAR(40),
		id INTEGER,
		PRIMARY KEY(name,id),
		FOREIGN KEY (id) REFERENCES lebensdaten(id),
		FOREIGN KEY (name) REFERENCES tag(name)
	)ENGINE=INNODB;
	
-- CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL ON famArch.* TO 'admin'@'localhost';