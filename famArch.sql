
	DROP DATABASE IF EXISTS famArch;
	CREATE DATABASE famArch;
	USE famArch;

	DROP TABLE IF EXISTS lebensdaten;
	CREATE TABLE lebensdaten (
		id INTEGER,
		nachname VARCHAR(40),
		vorname VARCHAR(40),
		maedName VARCHAR(40),
		rufname VARCHAR(40),
		titel VARCHAR(20),
		gebDatum DATE,
		gebOrt VARCHAR(30),
		konfession VARCHAR(20),
		ausbildung VARCHAR(100),
		berufLaufbahn VARCHAR(200),
		profTaetigkeiten VARCHAR(100),
		hobbies VARCHAR(100),
		vater INTEGER,
		mutter INTEGER,
		partnerin INTEGER,
		trauDatum DATE,
		trauOrt VARCHAR(30),
		kind INTEGER,
		verstorbenAm DATE,
		verstorbenIn VARCHAR(30),
		todUrsache VARCHAR(30),
		begraebnisAm DATE,
		begraebnisIn VARCHAR(30),
		militaerdienst VARCHAR(40),
		PRIMARY KEY(id),
		FOREIGN KEY (vater) REFERENCES lebensdaten(id),
		FOREIGN KEY (mutter) REFERENCES lebensdaten(id),
		FOREIGN KEY (partnerin) REFERENCES lebensdaten(id),
		FOREIGN KEY (kind) REFERENCES lebensdaten(id)
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
