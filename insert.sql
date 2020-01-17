		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (1000,"unbekannt","","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (1001,"unbekannt","","weiblich");
		
		
		/** HEINZ HÜBNER STAMMBAUM ANFANG **/
		
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (39,"Jantsch","Franz","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (40,"*fehlt*","*fehlt*","weiblich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (41,"Werner","Anton","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (42,"*Fehlt*","Gürtl","weiblich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,gebOrt) VALUES (43,"Schwab","David","m&#228nnlich","1779","Hornber");
		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,gebOrt) VALUES (44,"Vierheller","Margarethe","weiblich","1782","Nidd");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,gebOrt) VALUES (45,"L&#246wenstein","Peter","m&#228nnlich","1785","Nidd");
		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum) VALUES (46,"Wendel","Elisabeth","weiblich","1789");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (47,"H&#246nig","Jseph","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (48,"Oberhorter","Anna","weiblich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (49,"Lang","Jakob","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (50,"Oberhofer","Katharina","weiblich");
		
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,verstorbenAm) VALUES (17,"H&#252bner","Anton","m&#228nnlich","1806","1839");
		INSERT lebensdaten(id,nachname,vorname,geschlecht,vater,mutter) VALUES (18,"Jantsch","Magdalena","weiblich",39,40);

		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,verstorbenAm) VALUES (19,"Ullrich","Josef","m&#228nnlich","1797","1890");
		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,verstorbenAm) VALUES (20,"Schiller","Anna","weiblich","1814","1874");

		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (21,"Teufert","Franz Anton","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht,vater,mutter) VALUES (22,"Werner","Theresia","weiblich",41,42);

		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (23,"Phillip","*fehlt*","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (24,"*fehlt*","*fehlt*","weiblich");

		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,vater,mutter) VALUES (25,"Schwab","Phillip","m&#228nnlich","1813",43,44);
		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,vater,mutter) VALUES (26,"L&#246wenstein","Eliabetha","weiblich","1813",45,46);

		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,vater,mutter) VALUES (27,"H&#246nig","Michael","m&#228nnlich","1808",47,48);
		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,vater,mutter) VALUES (28,"Lang","Maria","weiblich","1806",49,50);

		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (29,"Zinnober","Michael","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (30,"Lechner","Katharina","weiblich");

		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (31,"Marian","Johann","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (32,"D&#252rrenberger","Barbara","weiblich");
		
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (33,"H&#252bner","Elfriede Maria","1938","","1;34","weiblich");
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (34,"H&#252bner","Lambert II","1933","","1;33","männlich");
		
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (35,"H&#252bner","Rudolf","1895","1960","3;36;37","männlich");
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht,stammbaum) VALUES (36,"H&#252bner","Lambert I","1892","1917","3;35;37","männlich",true);
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (37,"H&#252bner","Karl","1888","1958","3;36;35","männlich");
		
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (38,"Schwab","Maria","","","","männlich");

		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (9,"H&#252bner","Ferdinand","-","-","-","06.07.1837","Reichenberg","r&#246m. kath.", "-","Tuchmacher","-","-",17,18,"Ullrich","25.09.1859","Reichenberg","Carl","1903","Wien","-","-","-","-","m&#228nnlich",true);

		INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (10,"H&#252bner","Anna","Ullrich","-","-","-","18.1.1839","Reichenberg","r&#246m. kath.", "-","Gemischtwaren-verscheiss","-","-",19,20,"Schiller","25.09.1859","Reichenberg","u.a. Carl","25.01.1925","Reichenberg","-","-","Wien","-","weiblich",true);

		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (11,"Teufert","Anton Ferdinand","-","-","Teu-AN","30.03.1825","Liebenthal Nr. 109","r&#246m. kath.", "-","Tr&#246dler","-","-",21,22,"Werner","-","-","Maria Josefa Teufert + zwei weitere T&#246chter","11.02.1878","Hernals","-","13.02.1878","Hernals Friedhof","-","m&#228nnlich",true);

		INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (12,"Teufert","Maria Josefa","Philipp","-","-","-","17.03.1827","Lichtenthal","r&#246m. kath.", "-","Privat","-","-",23,24,"-","20.02.1855","Wien","Maria Josefa Teufert","19.03.1899","Hernals","-","21.03.1899","Friedhof Hernals","-","weiblich",true);


		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (13,"Schwab","Heinrich Ludwig I","-","-","-","03.11.1839","Nidda","r&#246m. kath. ", "Steindeckermeister","Dachdecker","-","-",25,26,"L&#246wenstein","19.10.1864","Baden","Heinrich Ludwig II, Heuriette, Ludorika, Anna","1905","Baden","-","07.01.1905","Baden","-","m&#228nnlich",true);

		INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (14,"Schwab","Maria","H&#246nig","-","-","-","08.04.1845","Baden","r&#246m. kath.", "-","-","-","-",27,28,"Lang","19.10.1864","Baden","Heinrich Ludwig II","-","-","-","-","-","-","weiblich",true);



		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (15,"Zinnober","Clemens","-","-","ZIN-Cle","23.11.1839","Trumau","r&#246m. kath.", "B&#228cker","B&#228ckermeister","-","-",29,30,"Fahrnschein","08.02.1869","Neukirchen","Leopold, Johanne, Karoline, Gustav","-","Baden","-","05.04.1914","Baden","-","m&#228nnlich",true);

		INSERT lebensdaten(id,nachname,vorname,stammbaum,vater,mutter,geschlecht) VALUES (16,"Marian","Maria",true,31,32,"weiblich");

		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (5,"H&#252bner","Karl","-","-","H&#220-Carl","28.12.1891","Reichenberg (1876 nach Wien &#252bersiedelt)","r&#246m. kath.", "Keine Keine Zeugnisse vorhanden","vielseitig, u.a. Sch&#252tzenmeister im Dorotheum","Errichtung des Familiengrabes am Friedhof Ma. Enzersdorf","Zucht von Kaninchen, Tennis",9,10,"Ullrich","11.11.1884","Wien, Pfarre St. Johann Evang. ","von 8 Kindern &#252berlebt: Carl, Lambert, Rudolf, Leopold","1935","Ma. Enzersdorf","-","-","Friedhof Ma. Enzersdorf","-","m&#228nnlich",true);

		INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (6,"H&#252bner","Maria Josefa","Teufert","-","-","H&#252-Maria","11.01.1857","Hernals","r&#246m. kath.", "-","Gesch&#228ftsf&#252hrerin","-","-",11,12,"Philipp","20.02.1855, 11.11.1884","Hernals, Wien","Carl, Lambert, Rudolf, Leopold","27.05.1927","Maria Enezersdof","Lungenkrankheit","30.05.1927","Maria Enzersdorf","-","weiblich",true);

		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (7,"Schwab","Heinrich Ludwig II","-","-","SCHWAB-HLII","31.10.1871","Baden","r&#246m. kath.", "Dachdecker","selbstst&#228ndiger Dachdeckermeister, kurzzeitig Fabrikant","-","Wandern, Musik",13,14,"H&#246nig","1902-04-28","Baden","Johanna, Marie ","29.04.1927","Baden","Lungenentz&#252ndung, Venenentz&#252ndung, Gehirnthrombose","02.05.1927","Baden","-","m&#228nnlich",true);

		INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (8,"Schwab","Karoline Johanne","Zinnober","Lini","-","SCHWAB-Karo","20.06.1882","Baden","r&#246m. kath.", "Volkschule, B&#252rgerschule","-","Ab dem Tod des Mannes, F&#252hrung der Dachdeckerei als Witwenbetrieb","-",15,16,"Marian","28.04.1902","Baden","Johanne, Maria","27.05.1958","Baden","Krebs (Gallenblase)","02.06.1958","Baden","-","weiblich",true);

		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (3,"H&#252bner","Leopold","Leo","Ingenieur","H&#252-Leo","03.12.1899","Maria Enzernsdorf","r&#246m. kath.", "TGM","Angestellter, ca. 1930 F&#252hrung eines Elektrotechnikunternehmens ","Konzession f&#252r Hoch/Niederspannung","FRAGEN",5,6,"Schwab","16.03.1932","Baden","Lambert, Heinz, Ludwig, ","16.03.1985","M&#246dling","Altersschw&#228che","29.03.1985","Maria Enzersdorf","Ausbildung zum einj&#228hrigen Freiwilligen, Bef&#246rderung zum Unteroffizier in der Offiziersschule ","m&#228nnlich",true);

		INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum,geschwister) VALUES (4,"H&#252bner","Johanna Maria","Schwab","Hausi","nicht bekannt (heute Mittelschulprofessorin)","H&#252-Joh","14.02.1903","Baden","r&#246m. kath.", "Matura (&#214ffentliches M&#228dchenlyzeum Baden), Lehrbefugnispr&#252fung f&#252r Musik an Mittelschulen","Musikp&#228dagogin","-","-",7,8,"Zinober","12.07.1932","Baden","Lambert, Heinz","15.01.1975","Wien","Schilddr&#252senoperation","24.01.1975","-Maria Enzersdorf","-","weiblich",true,"38");



		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (1,"H&#252bner","Heinz","Heini","Dr. techn. Dipl. Ing.","H&#220-Heinz","08.06.1937","Baden b. Wien","r&#246m. kath.", "Gymnsaium M&#246dling, TGM, TU Wien","Universit&#228tsprofessor","Zivil Ingenieur, gerichtlich berid. Sachverst&#228ndiger","Theater, Oper, Konzert, Tennis, Segeln, Bergsteigen, Skifahren, Kunstreisen",3,4,"Schwab","15.09.1962","Innsbruck","Renate,Bertram,Richard","-","-","-","-","-","Offizier des h&#246heren milit&#228rtechnischen Dienstes 1995/96 Wien, Grundwehrdienst 01.07.1965 - 15.03.1966","m&#228nnlich",true);



		INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (2,"H&#252bner","Brigitte","Urban","Brix","Mag.artis","H&#220-Brix","10.02.1938","Innsbruck","r&#246m. kath.", "Matura Lehrerinnenbildungsanstalt (LNBA Innsbruck), Studium Akademie f&#252r Musik und Datstellende Kunst, Reifepr&#252fung Gesang","Volksschullehrerin, Musikerin, K&#252nstlerin","-","Reiser, Bergsteiger, Skifahrer",2,2,"Sch&#246rg","15.09.1962","Innsbruck","Renate,Bertram,Richard","-","-","-","-","-","-","weiblich",true);



		UPDATE lebensdaten SET partnerin=2 WHERE id=1;
		UPDATE lebensdaten SET partnerin=3 WHERE id=4;
		UPDATE lebensdaten SET partnerin=4 WHERE id=3;
		UPDATE lebensdaten SET partnerin=5 WHERE id=6;
		UPDATE lebensdaten SET partnerin=6 WHERE id=5;
		UPDATE lebensdaten SET partnerin=7 WHERE id=8;
		UPDATE lebensdaten SET partnerin=8 WHERE id=7;
		UPDATE lebensdaten SET partnerin=9 WHERE id=10;
		UPDATE lebensdaten SET partnerin=10 WHERE id=9;
		UPDATE lebensdaten SET partnerin=11 WHERE id=12;
		UPDATE lebensdaten SET partnerin=12 WHERE id=11;
		UPDATE lebensdaten SET partnerin=13 WHERE id=14;
		UPDATE lebensdaten SET partnerin=14 WHERE id=13;
		UPDATE lebensdaten SET partnerin=15 WHERE id=16;
		UPDATE lebensdaten SET partnerin=16 WHERE id=15;
		UPDATE lebensdaten SET partnerin=17 WHERE id=18;
		UPDATE lebensdaten SET partnerin=18 WHERE id=17;
		UPDATE lebensdaten SET partnerin=19 WHERE id=20;
		UPDATE lebensdaten SET partnerin=20 WHERE id=19;
		UPDATE lebensdaten SET partnerin=21 WHERE id=22;
		UPDATE lebensdaten SET partnerin=22 WHERE id=21;
		UPDATE lebensdaten SET partnerin=23 WHERE id=24;
		UPDATE lebensdaten SET partnerin=24 WHERE id=23;
		UPDATE lebensdaten SET partnerin=25 WHERE id=26;
		UPDATE lebensdaten SET partnerin=26 WHERE id=25;
		UPDATE lebensdaten SET partnerin=27 WHERE id=28;
		UPDATE lebensdaten SET partnerin=28 WHERE id=27;
		UPDATE lebensdaten SET partnerin=29 WHERE id=30;
		UPDATE lebensdaten SET partnerin=30 WHERE id=29;
		UPDATE lebensdaten SET partnerin=31 WHERE id=32;
		UPDATE lebensdaten SET partnerin=32 WHERE id=31;

		UPDATE lebensdaten SET geschwister="33;34" WHERE id=1;
		UPDATE lebensdaten SET geschwister="35;36;37" WHERE id=3;

		
		/** HEINZ HÜBNER STAMMBAUM ENDE **/


		/** NORTHBURGA BRIGITTE URBAN STAMMBAUM ANFANG **/
		
		
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (90,"Ettl","Gisella","1906","1973","52;89","weiblich");
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (89,"Urban","Karl","1998","1949","52;90","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (88,"Urban","Jacob","1948","","51;84;85;86;87;83","m&#228nnlich");
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (87,"Eger","Mathilde","1944","","51;84;85;86;83;88","weiblich");
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (86,"Renzi","Suzanne","1942","","51;84;85;83;87;88","weiblich");
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (85,"Sarnthein","Renate","1939","","51;84;83;86;87;88","weiblich");
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (84,"Urban","Velt","1936","","51;83;85;86;87;88","weiblich");
		INSERT lebensdaten(id,nachname,vorname,gebDatum,verstorbenAm,geschwister,geschlecht) VALUES (83,"Illes","Monika","1935","","51;84;85;86;87;88","weiblich");
		
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (82,"Radlmaier","Aloisia","weiblich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (81,"Sterneder","Ferdinand","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (80,"Hockst&#246ger","Marie","weiblich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (79,"Tr&#228xter","Josef","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (78,"Sedlacek","Anna","weiblich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (77,"Urban","Johann","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (76,"Riedl","Mathilde","weiblich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (75,"Strassky","Karl","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,stammbaum) VALUES (74,"Baumg&#228rtel","Gottfried","m&#228nnlich",true);
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,vater,mutter) VALUES (73,"Sterneder","Theresia","weiblich",81,82);
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (72,"W&#252rth","Vinzenz","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (71,"Stressler","Rosalia","weiblich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (70,"Kirchmayr","Stefan","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,vater,mutter) VALUES (69,"Tr&#228xler","Katharina","weiblich",79,80);
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (68,"Wolfahrt","Johann Adam","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,vater,mutter) VALUES (67,"Urban","Antonia","weiblich",77,78);
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (66,"Schubert","*Fehlt*","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,vater,mutter) VALUES (65,"Strasky","Katharina","weiblich",75,76);
		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (64,"Baumg&#228rtel","Richard","-","Prof.a.d. Staatsakademief&#252r Musik","BAUM-Ri","01.02.1858","Schleiz","evangelisch", "Oboist","Musiker, Wiener philharmoniker","Gr&#252nder der Wiener Oboenschule","-",74,"Sonntag","14.04.1891","Wien Meidling","Eine Tochter","1941","Wien","-","-","Wien Meidling","-","m&#228nnlich",true);
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (63,"Uhl","Maria","weiblich");
		INSERT lebensdaten(id,nachname,vorname,geschlecht) VALUES (62,"Sch&#246rg","Mathias","m&#228nnlich");
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,vater,mutter) VALUES (61,"W&#252rth","Magdalena","weiblich",72,73);
		INSERT lebensdaten(id,nachname,vorname,geschlecht,vater,mutter) VALUES (60,"Kirchmayr","Stefan","m&#228nnlich",70,71);
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,vater,mutter) VALUES (59,"Wolfahrt","Elisabeth","weiblich",68,69);
		INSERT lebensdaten(id,nachname,vorname,titel,geschlecht,vater,mutter) VALUES (58,"Urban","Johann","Spengler","m&#228nnlich",66,67);
		
		INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,partnerin,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (57,"Sch&#246rg","Mathilde","Baumg&#228rtel","Thilde","-","SCH&#214-Ma","22-01-1892","Wien","r&#246m. kath.", "Matura","Sehr vielseitig","-","Skifahren",64,65,"-",60,"08.02.1913","Wien Meidling","1 Tochter","1972","Neukirchen","-","1972","Siedling","-","weiblich",true);
		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (56,"Sch&#246rg","Wilhelm","-","K.u.K. Major","-","06.02.1882","St. Johann Pongau","r&#246m. kath.", "Offizier KK Armee","Offizier","-","-",62,63,"UHL","08.02.1913","Wien","2 Kinder","1945","Innsbruck","-","-","-","-","m&#228nnlich",true);
		
		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,verstorbenAm,vater,mutter) VALUES (55,"Kirchmayr","Berta","weiblich","1872","1951",60,61);
		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (54,"Urban","Karl","-","Dr.","URB-Ka","09.01.1870","Obergrafendorf","r&#246m.kath.", "Arzt","Chirurg (AKH Linz, Spezialist f&#252r Kopfoperationen)","-","-",58,59,"Wohlfahrt","23.11.1897","Obergrafendorf","2 Kinder","1930","Linz","-","-","-","-","m&#228nnlich",true);
		
		INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (53,"Urban","Mathilde Elisabeth","Sch&#246rg","Nonna","-","URB-Ma","07.03.1914","Trient","r&#246m. kath.", "Medientechnische Assistentin","Medientechnische Assistentin","-","-",56,57,"-","09.09.1934","Sieding","7 Kinder","11.05.2007","Innsbruck","-","-","Innsbruck","-","weiblich",true);
		INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (52,"Urban","Hubert","-","Uni. Prof. Dr. med.","URB-Hu","04.06.1904","Linz","r&#246m. kath.", "Arzt","Uni. Prof. f&#252r Psychatrie","-","Musik",54,55,"Kirchmayer","1934","Sieding","7 Kinder","1997","Innsbruck","-","1997","Innsbruck","Stabsarzt","m&#228nnlich",true);

		INSERT lebensdaten(id,nachname,vorname,geschlecht,gebDatum,vater,mutter) VALUES (51,"Urban","Nothburga Brigitte","weiblich","1938",52,53);
		
		
		UPDATE lebensdaten SET partnerin=52 WHERE id=53;
		UPDATE lebensdaten SET partnerin=53 WHERE id=52;
		
		UPDATE lebensdaten SET partnerin=54 WHERE id=55;
		UPDATE lebensdaten SET partnerin=55 WHERE id=54;
		
		UPDATE lebensdaten SET partnerin=56 WHERE id=57;
		UPDATE lebensdaten SET partnerin=57 WHERE id=56;
		
		UPDATE lebensdaten SET partnerin=58 WHERE id=59;
		UPDATE lebensdaten SET partnerin=59 WHERE id=58;
		
		UPDATE lebensdaten SET partnerin=60 WHERE id=61;
		UPDATE lebensdaten SET partnerin=61 WHERE id=60;
		
		UPDATE lebensdaten SET partnerin=62 WHERE id=63;
		UPDATE lebensdaten SET partnerin=63 WHERE id=62;
		
		UPDATE lebensdaten SET partnerin=64 WHERE id=65;
		UPDATE lebensdaten SET partnerin=65 WHERE id=64;
		
		UPDATE lebensdaten SET partnerin=66 WHERE id=67;
		UPDATE lebensdaten SET partnerin=67 WHERE id=66;
		
		UPDATE lebensdaten SET partnerin=68 WHERE id=69;
		UPDATE lebensdaten SET partnerin=69 WHERE id=68;
		
		UPDATE lebensdaten SET partnerin=70 WHERE id=71;
		UPDATE lebensdaten SET partnerin=71 WHERE id=70;
		
		UPDATE lebensdaten SET partnerin=72 WHERE id=73;
		UPDATE lebensdaten SET partnerin=73 WHERE id=72;
		
		
		UPDATE lebensdaten SET partnerin=75 WHERE id=76;
		UPDATE lebensdaten SET partnerin=76 WHERE id=75;
		
		UPDATE lebensdaten SET partnerin=77 WHERE id=78;
		UPDATE lebensdaten SET partnerin=78 WHERE id=77;
		
		UPDATE lebensdaten SET partnerin=79 WHERE id=80;
		UPDATE lebensdaten SET partnerin=80 WHERE id=79;
		
		UPDATE lebensdaten SET partnerin=81 WHERE id=82;
		UPDATE lebensdaten SET partnerin=82 WHERE id=81;
		
		UPDATE lebensdaten SET geschwister="83;84;85;86;87;88" WHERE id=51;
		UPDATE lebensdaten SET geschwister="89;90" WHERE id=52;
		/** NORTHBURGA BRIGITTE STAMMBAUM ENDE **/
















/** Noch nicht verwendete Personen*/
INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,partnerin,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (100,"H&#252bner","Lambert","-","Leutnant der Fliegerkompanie 26","H&#252-La","19.03.1892","Wien","r&#246m. kath.", "Studium Technische Hochschule Leoben, Ausbildung zum Pilot (1. Weltkrieg)","Fliegerleutnant, Stabsoffizier R.u.R. Fliegertruppe beim 3. Armeekommando ","-","-",100,100,"Teufert",100,"-","-","-","07.07.1917","Flugfeld Clocin","Abschuss im 1. Weltkrieg","-","-","Milit&#228rakademie (Wr. Neustadt)","m&#228nnlich",true);

INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,partnerin,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (101,"Strasky","Mathilde","Riedl","-","-","STRAS-Ma","23.03.1841","Tulln","r&#246m. kath.", "-","-","-","-",101,101,"Riedl",101,"04.11.1861","Wien","10 Kinder","18.10.1918","Wien Meidling","-","-","-","-","weiblich",true);

INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,partnerin,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (102,"Strasky","Ignaz","-","K&#252rschenrmeister","-","23.07.1837","Budweis","r&#246m. kath. ", "K&#252rschner","B&#252rgerlicher K&#252schnermeister","-","-",102,102,"Faast",102,"04.11.1861","Wien","8-10 Kinder","04.03.1906","Wien","-","-","Wien Meidling","-","m&#228nnlich",true);













INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,partnerin,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (103,"Chrast","Maria Heurietta","Hausknost","Mitzi","-","-","08.12.1891","Ebenfurth","r&#246m.kath.", "-","-","-","-",103,103,"Schwab",103,"-","-","Heuriette Marie","-","-","-","-","Spittal an der Donau","-","weiblich",true);
#
INSERT lebensdaten(id,nachname,vorname,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,partnerin,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (104,"H&#252bner","Lambert","-","Dr. med. vet.","H&#220-La II","28.06.2019","Baden","r&#246m. kath.", "Mateura (M&#246dling), Tier&#228rztliche Hochschule","Tierarzt (Privatpraxis, Tierklinik mit Kollegen, Salzburg","-","Sport, Reisen, Oper, Theater, etc.",104,104,"Schwab",104,"ca 1968 (Scheidung ca. 1984)","Salzburg","Eleonora ,Clemens","-","-","-","-","-","-","m&#228nnlich",true);

INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,partnerin,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (105,"H&#252bner","Elfriede Marie","-","Friedl","Dkfm, Mag.","H&#220-Frie","11.07.1935","Baden","r&#246m. kath.", "Matura, Hochschule f&#252r Welthandel","HAK Professorin, 29 Jahre Inhaberin einer Privatschule","-","Sport, Reisen, Oper, Theater",105,105,"Schwab",105,"-","-","-","-","-","-","-","-","-","weiblich",true);

INSERT lebensdaten(id,nachname,vorname,maedName,rufname,titel,kurzzeichen,gebDatum,gebOrt,konfession,ausbildung,berufLaufbahn,profTaetigkeiten,hobbies,vater,mutter,gebMutter,partnerin,trauDatum,trauOrt,kind,verstorbenAm,verstorbenIn,todUrsache,begraebnisAm,begraebnisIn,militaerdienst,geschlecht,stammbaum) VALUES (106,"Sunk","Maria Anna","Schwab","Mimi","-","-","01.01.1906","Baden","r&#246m. kath.", "B&#252rgerschule","Bankangestellte","-","-",106,106,"Zinuber",106,"-","-","42","-","-","-","-","Klagenfurt-Virting","-","weiblich",true);
/**
INSERT pMerkmale(id,charMerkmale,besonSituation) VALUES (36,"Mutig:Schlagende Verbindung bei Montanistischer Hochschule Leoben. Rückmeldung der Kaserne in Wr. Neustadt, als Ausbilder als Flieger an der Front<br>Ehrgeizig: Frohe Briefe an eltern","Fliegen:Poinier im 1. Weltkrieg.Flugzeugtyp im Heeresgeschichtlichen Museum<br>Ausbildung von zukünftlichen Piloten: Belohnung von höchster Instanz<br>Dankbarkeit an Eltern: Post von der Front an Weihnachten<br>Innovativ: Fliegen und Photographie (1. Aufnahme unserer Heimatgemeinde - Maria Enzersdorf)");*/