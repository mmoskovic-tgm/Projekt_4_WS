-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: famArch
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `lebdatentag`
--

DROP TABLE IF EXISTS `lebdatentag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `lebdatentag` (
  `name` varchar(40) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`name`,`id`),
  KEY `id` (`id`),
  CONSTRAINT `lebdatentag_ibfk_1` FOREIGN KEY (`id`) REFERENCES `lebensdaten` (`id`),
  CONSTRAINT `lebdatentag_ibfk_2` FOREIGN KEY (`name`) REFERENCES `tag` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lebdatentag`
--

LOCK TABLES `lebdatentag` WRITE;
/*!40000 ALTER TABLE `lebdatentag` DISABLE KEYS */;
/*!40000 ALTER TABLE `lebdatentag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lebensdaten`
--

DROP TABLE IF EXISTS `lebensdaten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `lebensdaten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nachname` varchar(400) DEFAULT NULL,
  `vorname` varchar(400) DEFAULT NULL,
  `maedName` varchar(400) DEFAULT NULL,
  `rufname` varchar(400) DEFAULT NULL,
  `titel` varchar(200) DEFAULT NULL,
  `kurzzeichen` varchar(500) DEFAULT NULL,
  `gebDatum` varchar(300) DEFAULT NULL,
  `gebOrt` varchar(300) DEFAULT NULL,
  `konfession` varchar(200) DEFAULT NULL,
  `ausbildung` varchar(500) DEFAULT NULL,
  `berufLaufbahn` varchar(200) DEFAULT NULL,
  `profTaetigkeiten` varchar(100) DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `vater` int(11) DEFAULT NULL,
  `mutter` int(11) DEFAULT NULL,
  `gebMutter` varchar(200) DEFAULT NULL,
  `partnerin` int(11) DEFAULT NULL,
  `trauDatum` varchar(300) DEFAULT NULL,
  `trauOrt` varchar(300) DEFAULT NULL,
  `kind` varchar(500) DEFAULT NULL,
  `geschwister` varchar(500) DEFAULT NULL,
  `verstorbenAm` varchar(300) DEFAULT NULL,
  `verstorbenIn` varchar(300) DEFAULT NULL,
  `todUrsache` varchar(300) DEFAULT NULL,
  `begraebnisAm` varchar(300) DEFAULT NULL,
  `begraebnisIn` varchar(300) DEFAULT NULL,
  `militaerdienst` varchar(400) DEFAULT NULL,
  `geschlecht` varchar(300) DEFAULT NULL,
  `stammbaum` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vater` (`vater`),
  KEY `mutter` (`mutter`),
  KEY `partnerin` (`partnerin`),
  CONSTRAINT `lebensdaten_ibfk_1` FOREIGN KEY (`vater`) REFERENCES `lebensdaten` (`id`),
  CONSTRAINT `lebensdaten_ibfk_2` FOREIGN KEY (`mutter`) REFERENCES `lebensdaten` (`id`),
  CONSTRAINT `lebensdaten_ibfk_3` FOREIGN KEY (`partnerin`) REFERENCES `lebensdaten` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lebensdaten`
--

LOCK TABLES `lebensdaten` WRITE;
/*!40000 ALTER TABLE `lebensdaten` DISABLE KEYS */;
INSERT INTO `lebensdaten` VALUES (1,'H&#252bner','Heinz',NULL,'Heini','Dr. techn. Dipl. Ing.','H&#220-Heinz','08.06.1937','Baden b. Wien','r&#246m. kath.','Gymnsaium M&#246dling, TGM, TU Wien','Universit&#228tsprofessor','Zivil Ingenieur, gerichtlich berid. Sachverst&#228ndiger','Theater, Oper, Konzert, Tennis, Segeln, Bergsteigen, Skifahren, Kunstreisen',3,4,'Schwab',2,'15.09.1962','Innsbruck','Renate,Bertram,Richard','33;34','-','-','-','-','-','Offizier des h&#246heren milit&#228rtechnischen Dienstes 1995/96 Wien, Grundwehrdienst 01.07.1965 - 15.03.1966','m&#228nnlich',1),(2,'H&#252bner','Brigitte','Urban','Brix','Mag.artis','H&#220-Brix','10.02.1938','Innsbruck','r&#246m. kath.','Matura Lehrerinnenbildungsanstalt (LNBA Innsbruck), Studium Akademie f&#252r Musik und Datstellende Kunst, Reifepr&#252fung Gesang','Volksschullehrerin, Musikerin, K&#252nstlerin','-','Reiser, Bergsteiger, Skifahrer',2,2,'Sch&#246rg',NULL,'15.09.1962','Innsbruck','Renate,Bertram,Richard',NULL,'-','-','-','-','-','-','weiblich',1),(3,'H&#252bner','Leopold',NULL,'Leo','Ingenieur','H&#252-Leo','03.12.1899','Maria Enzernsdorf','r&#246m. kath.','TGM','Angestellter, ca. 1930 F&#252hrung eines Elektrotechnikunternehmens ','Konzession f&#252r Hoch/Niederspannung','FRAGEN',5,6,'Schwab',4,'16.03.1932','Baden','Lambert, Heinz, Ludwig, ','35;36;37','16.03.1985','M&#246dling','Altersschw&#228che','29.03.1985','Maria Enzersdorf','Ausbildung zum einj&#228hrigen Freiwilligen, Bef&#246rderung zum Unteroffizier in der Offiziersschule ','m&#228nnlich',1),(4,'H&#252bner','Johanna Maria','Schwab','Hausi','nicht bekannt (heute Mittelschulprofessorin)','H&#252-Joh','14.02.1903','Baden','r&#246m. kath.','Matura (&#214ffentliches M&#228dchenlyzeum Baden), Lehrbefugnispr&#252fung f&#252r Musik an Mittelschulen','Musikp&#228dagogin','-','-',7,8,'Zinober',3,'12.07.1932','Baden','Lambert, Heinz','38','15.01.1975','Wien','Schilddr&#252senoperation','24.01.1975','Maria Enzersdorf','-','weiblich',1),(5,'H&#252bner','Karl',NULL,'-','-','H&#220-Carl','28.12.1891','Reichenberg (1876 nach Wien &#252bersiedelt)','r&#246m. kath.','Keine Keine Zeugnisse vorhanden','vielseitig, u.a. Sch&#252tzenmeister im Dorotheum','Errichtung des Familiengrabes am Friedhof Ma. Enzersdorf','Zucht von Kaninchen, Tennis',9,10,'Ullrich',6,'11.11.1884','Wien, Pfarre St. Johann Evang. ','von 8 Kindern &#252berlebt: Carl, Lambert, Rudolf, Leopold',NULL,'1935','Ma. Enzersdorf','-','-','Friedhof Ma. Enzersdorf','-','m&#228nnlich',1),(6,'H&#252bner','Maria Josefa','Teufert','-','-','H&#252-Maria','11.01.1857','Hernals','r&#246m. kath.','-','Gesch&#228ftsf&#252hrerin','-','-',11,12,'Philipp',5,'20.02.1855, 11.11.1884','Hernals, Wien','Carl, Lambert, Rudolf, Leopold',NULL,'27.05.1927','Maria Enezersdof','Lungenkrankheit','30.05.1927','Maria Enzersdorf','-','weiblich',1),(7,'Schwab','Heinrich Ludwig II',NULL,'-','-','SCHWAB-HLII','31.10.1871','Baden','r&#246m. kath.','Dachdecker','selbstst&#228ndiger Dachdeckermeister, kurzzeitig Fabrikant','-','Wandern, Musik',13,14,'H&#246nig',8,'1902-04-28','Baden','Johanna, Marie ',NULL,'29.04.1927','Baden','Lungenentz&#252ndung, Venenentz&#252ndung, Gehirnthrombose','02.05.1927','Baden','-','m&#228nnlich',1),(8,'Schwab','Karoline Johanne','Zinnober','Lini','-','SCHWAB-Karo','20.06.1882','Baden','r&#246m. kath.','Volkschule, B&#252rgerschule','-','Ab dem Tod des Mannes, F&#252hrung der Dachdeckerei als Witwenbetrieb','-',15,16,'Marian',7,'28.04.1902','Baden','Johanne, Maria',NULL,'27.05.1958','Baden','Krebs (Gallenblase)','02.06.1958','Baden','-','weiblich',1),(9,'H&#252bner','Ferdinand',NULL,'-','-','-','06.07.1837','Reichenberg','r&#246m. kath.','-','Tuchmacher','-','-',17,18,'Ullrich',10,'25.09.1859','Reichenberg','Carl',NULL,'1903','Wien','-','-','-','-','m&#228nnlich',1),(10,'H&#252bner','Anna','Ullrich','-','-','-','18.1.1839','Reichenberg','r&#246m. kath.','-','Gemischtwaren-verscheiss','-','-',19,20,'Schiller',9,'25.09.1859','Reichenberg','u.a. Carl',NULL,'25.01.1925','Reichenberg','-','-','Wien','-','weiblich',1),(11,'Teufert','Anton Ferdinand',NULL,'-','-','Teu-AN','30.03.1825','Liebenthal Nr. 109','r&#246m. kath.','-','Tr&#246dler','-','-',21,22,'Werner',12,'-','-','Maria Josefa Teufert + zwei weitere T&#246chter',NULL,'11.02.1878','Hernals','-','13.02.1878','Hernals Friedhof','-','m&#228nnlich',1),(12,'Teufert','Maria Josefa','Philipp','-','-','-','17.03.1827','Lichtenthal','r&#246m. kath.','-','Privat','-','-',23,24,'-',11,'20.02.1855','Wien','Maria Josefa Teufert',NULL,'19.03.1899','Hernals','-','21.03.1899','Friedhof Hernals','-','weiblich',1),(13,'Schwab','Heinrich Ludwig I',NULL,'-','-','-','03.11.1839','Nidda','r&#246m. kath. ','Steindeckermeister','Dachdecker','-','-',25,26,'L&#246wenstein',14,'19.10.1864','Baden','Heinrich Ludwig II, Heuriette, Ludorika, Anna',NULL,'1905','Baden','-','07.01.1905','Baden','-','m&#228nnlich',1),(14,'Schwab','Maria','H&#246nig','-','-','-','08.04.1845','Baden','r&#246m. kath.','-','-','-','-',27,28,'Lang',13,'19.10.1864','Baden','Heinrich Ludwig II',NULL,'-','-','-','-','-','-','weiblich',1),(15,'Zinnober','Clemens',NULL,'-','-','ZIN-Cle','23.11.1839','Trumau','r&#246m. kath.','B&#228cker','B&#228ckermeister','-','-',29,30,'Fahrnschein',16,'08.02.1869','Neukirchen','Leopold, Johanne, Karoline, Gustav',NULL,'-','Baden','-','05.04.1914','Baden','-','m&#228nnlich',1),(16,'Marian','Maria',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31,32,NULL,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',1),(17,'H&#252bner','Anton',NULL,NULL,NULL,NULL,'1806',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,18,NULL,NULL,NULL,NULL,'1839',NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(18,'H&#252bner','Magdalena','Jantsch',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39,NULL,NULL,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(19,'Ullrich','Josef',NULL,NULL,NULL,NULL,'1797',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,20,NULL,NULL,NULL,NULL,'1890',NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(20,'Ullrich','Anna','Schiller',NULL,NULL,NULL,'1814',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,19,NULL,NULL,NULL,NULL,'1874',NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(21,'Teufert','Franz Anton',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(22,'Teufert','Theresia','Werner',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,41,42,NULL,21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(23,'Phillip','*fehlt*',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,24,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(24,'*fehlt*','*fehlt*',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,23,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(25,'Schwab','Phillip',NULL,NULL,NULL,NULL,'1813',NULL,NULL,NULL,NULL,NULL,NULL,43,44,NULL,26,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(26,'Schwab','Elisabetha','L&#246wenstein',NULL,NULL,NULL,'1813',NULL,NULL,NULL,NULL,NULL,NULL,45,46,NULL,25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(27,'H&#246nig','Michael',NULL,NULL,NULL,NULL,'1808',NULL,NULL,NULL,NULL,NULL,NULL,47,48,NULL,28,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(28,'H&#246nig','Maria','H&#246nig',NULL,NULL,NULL,'1806',NULL,NULL,NULL,NULL,NULL,NULL,49,50,NULL,27,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(29,'Zinnober','Michael',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(30,'Zinnober','Katharina','Lechner',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(31,'Marian','Johann',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(32,'Marian','Barbara','D&#252rrenberger',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(33,'H&#252bner','Elfriede Maria',NULL,NULL,NULL,NULL,'1938',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1;34','',NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(34,'H&#252bner','Lambert II',NULL,NULL,NULL,NULL,'1933',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1;33','',NULL,NULL,NULL,NULL,NULL,'männlich',NULL),(35,'H&#252bner','Rudolf',NULL,NULL,NULL,NULL,'1895',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3;36;37','1960',NULL,NULL,NULL,NULL,NULL,'männlich',NULL),(36,'H&#252bner','Lambert I',NULL,NULL,NULL,NULL,'1892',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3;35;37','1917',NULL,NULL,NULL,NULL,NULL,'männlich',1),(37,'H&#252bner','Karl',NULL,NULL,NULL,NULL,'1888',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3;36;35','1958',NULL,NULL,NULL,NULL,NULL,'männlich',NULL),(38,'Sunk','Maria','Schwab',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,'männlich',NULL),(39,'Jantsch','Franz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(41,'Werner','Anton',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(42,'*Fehlt*','Gürtl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(43,'Schwab','David',NULL,NULL,NULL,NULL,'1779','Hornber',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(44,'Schwab','Margarethe','Vierheller',NULL,NULL,NULL,'1782','Nidd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(45,'L&#246wenstein','Peter',NULL,NULL,NULL,NULL,'1785','Nidd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(46,'L&#246wenstein','Elisabeth','Wendel',NULL,NULL,NULL,'1789',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(47,'H&#246nig','Joseph',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(48,'H&#246nig','Anna','Oberhorter',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(49,'Lang','Jakob',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(50,'Lang','Katharina','Oberhofer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(51,'H&#252bner','Brigitte','Urban','Brix','Mag.artis','H&#220-Brix','10.02.1938','Innsbruck','r&#246m. kath.','Matura Lehrerinnenbildungsanstalt (LNBA Innsbruck), Studium Akademie f&#252r Musik und Datstellende Kunst, Reifepr&#252fung Gesang','Volksschullehrerin, Musikerin, K&#252nstlerin','-','Reiser, Bergsteiger, Skifahrer',52,53,'Sch&#246rg',NULL,'15.09.1962','Innsbruck','Renate,Bertram,Richard','83;84;85;86;87;88','-','-','-','-','-','-','weiblich',1),(52,'Urban','Hubert',NULL,'-','Uni. Prof. Dr. med.','URB-Hu','04.06.1904','Linz','r&#246m. kath.','Arzt','Uni. Prof. f&#252r Psychatrie','-','Musik',54,55,'Kirchmayer',53,'1934','Sieding','7 Kinder','89;90','1997','Innsbruck','-','1997','Innsbruck','Stabsarzt','m&#228nnlich',1),(53,'Urban','Mathilde Elisabeth','Sch&#246rg','Nonna','-','URB-Ma','07.03.1914','Trient','r&#246m. kath.','Medientechnische Assistentin','Medientechnische Assistentin','-','-',56,57,'-',52,'09.09.1934','Sieding','7 Kinder',NULL,'11.05.2007','Innsbruck','-','-','Innsbruck','-','weiblich',1),(54,'Urban','Karl',NULL,'-','Dr.','URB-Ka','09.01.1870','Obergrafendorf','r&#246m.kath.','Arzt','Chirurg (AKH Linz, Spezialist f&#252r Kopfoperationen)','-','-',58,59,'Wohlfahrt',55,'23.11.1897','Obergrafendorf','2 Kinder',NULL,'1930','Linz','-','-','-','-','m&#228nnlich',1),(55,'Urban','Berta','Kirchmayr',NULL,NULL,NULL,'1872',NULL,NULL,NULL,NULL,NULL,NULL,60,61,NULL,54,NULL,NULL,NULL,NULL,'1951',NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(56,'Sch&#246rg','Wilhelm',NULL,'-','K.u.K. Major','-','06.02.1882','St. Johann Pongau','r&#246m. kath.','Offizier KK Armee','Offizier','-','-',62,63,'UHL',57,'08.02.1913','Wien','2 Kinder',NULL,'1945','Innsbruck','-','-','-','-','m&#228nnlich',1),(57,'Sch&#246rg','Mathilde','Baumg&#228rtel','Thilde','-','SCH&#214-Ma','22-01-1892','Wien','r&#246m. kath.','Matura','Sehr vielseitig','-','Skifahren',64,65,'-',56,'08.02.1913','Wien Meidling','1 Tochter',NULL,'1972','Neukirchen','-','1972','Siedling','-','weiblich',1),(58,'Urban','Johann',NULL,NULL,'Spengler',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,66,67,NULL,59,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(59,'Urban','Elisabeth','Wolfart',NULL,NULL,NULL,'1843',NULL,NULL,NULL,NULL,NULL,NULL,68,69,NULL,58,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(60,'Kirchmayr','Stefan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,70,71,NULL,61,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(61,'Kirchmayr','Magdalena','W&#252rth',NULL,NULL,NULL,'1836',NULL,NULL,NULL,NULL,NULL,NULL,72,73,NULL,60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(62,'Sch&#246rg','Mathias',NULL,NULL,NULL,NULL,'26.02.1847','Pashfurlh',NULL,NULL,NULL,NULL,NULL,91,92,NULL,63,'16.11.1875','Luhatschovitz in M&#228hren',NULL,NULL,'1883','Linz',NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(63,'Sch&#246rg','Marianne Emilia','Uhl',NULL,NULL,NULL,'09.12.1851','Luhatschovitz',NULL,NULL,NULL,NULL,NULL,93,94,NULL,62,'16.11.1875','Luhatschovitz in M&#228hren',NULL,NULL,'28.10.1913','Wien',NULL,NULL,NULL,NULL,'weiblich',NULL),(64,'Baumg&#228rtel','Richard',NULL,'-','Prof.a.d. Staatsakademief&#252r Musik','BAUM-Ri','01.02.1858','Schleiz','evangelisch','Oboist','Musiker, Wiener philharmoniker','Gr&#252nder der Wiener Oboenschule','-',95,96,'Sonntag',65,'14.04.1891','Wien Meidling','Eine Tochter',NULL,'1941','Wien','-','-','Wien Meidling','-','m&#228nnlich',1),(65,'Baumg&#228rtel','Katharina','Strasky',NULL,NULL,NULL,'11.11.1862','Wien',NULL,NULL,NULL,NULL,NULL,97,98,NULL,64,'14,4,1891','Wien',NULL,NULL,'10.12.1937','Wien',NULL,NULL,NULL,NULL,'weiblich',NULL),(66,'Schubert','*Fehlt*',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,67,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(67,'Urban','Antonia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,77,78,NULL,66,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(68,'Wolfahrt','Johann Adam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,69,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(69,'Wolfart','Katharina','Tr&#228xler',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,79,80,NULL,68,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(70,'Kirchmayr','Stefan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,71,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(71,'Kirchmayr','Rosalia','Stressler',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,70,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(72,'W&#252rth','Vinzenz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(73,'W&#252rth','Theresia','Sterneder',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,81,82,NULL,72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(74,'Baumg&#228rtel','Gottfried',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',1),(75,'Strassky','Karl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(76,'Strassky','Mathilde','Riedl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(77,'Urban','Johann',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(78,'Urban','Anna','Sedlacek',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(79,'Tr&#228xter','Josef',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,80,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(80,'Hockst&#246ger','Marie',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,79,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(81,'Sterneder','Ferdinand',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,82,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(82,'Sterneder','Aloisia','Radlmaier',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,81,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(83,'Urban','Monika','Illes',NULL,NULL,NULL,'1935',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'51;84;85;86;87;88','',NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(84,'Urban','Velt',NULL,NULL,NULL,NULL,'1936',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'51;83;85;86;87;88','',NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(85,'Urban','Renate','Sarnthein',NULL,NULL,NULL,'1939',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'51;84;83;86;87;88','',NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(86,'Urban','Suzanne','Renzi',NULL,NULL,NULL,'1942',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'51;84;85;83;87;88','',NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(87,'Urban','Mathilde','Egger',NULL,NULL,NULL,'1944',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'51;84;85;86;83;88','',NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(88,'Urban','Jacob',NULL,NULL,NULL,NULL,'1948',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'51;84;85;86;87;83','',NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(89,'Urban','Karl',NULL,NULL,NULL,NULL,'1998',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'52;90','1949',NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(90,'Urban','Gisella','Ettl',NULL,NULL,NULL,'1906',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'52;89','1973',NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(91,'Sch&#246rg','Josef',NULL,NULL,NULL,NULL,'10.03.1806','Oberhauzental',NULL,NULL,NULL,NULL,NULL,99,100,NULL,92,'18.11.1833','H&#246flein',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(92,'Sch&#246rg','Magdalena','Kuso',NULL,NULL,NULL,'10.05.1811','Leilha',NULL,NULL,NULL,NULL,NULL,101,102,NULL,91,'18.11.1833','H&#246flein',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(93,'Uhl','Josef',NULL,NULL,NULL,NULL,NULL,'M&#228hren',NULL,NULL,NULL,NULL,NULL,103,104,NULL,94,'03.02.1841','Pitin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(94,'Uhl','Justine','Cernicek',NULL,NULL,NULL,'05.08.1818','Pitin',NULL,NULL,NULL,NULL,NULL,105,106,NULL,93,'03.02.1841','Pitin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(95,'Baumg&#228rtel','Gottfried',NULL,NULL,NULL,NULL,'11.01.1822','Treuen',NULL,NULL,NULL,NULL,NULL,107,108,NULL,96,'27.07.1848','Th&#252ringen',NULL,NULL,'21.08.1887','Dresden',NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(96,'Baumg&#228rtel','Maria Louise','Sonntag',NULL,NULL,NULL,'22.03.1824','Schleiz',NULL,NULL,NULL,NULL,NULL,109,110,NULL,95,'27.07.1848','Th&#252ringen',NULL,NULL,'08.10.1888','Dresden',NULL,NULL,NULL,NULL,'weiblich',NULL),(97,'Strasky','Ignaz',NULL,'-','K&#252rschenrmeister','-','23.07.1837','Budweis','r&#246m. kath. ','K&#252rschner','B&#252rgerlicher K&#252schnermeister','-','-',111,112,'Faast',98,'04.11.1861','Wien','8-10 Kinder',NULL,'04.03.1906','Wien','-','-','Wien Meidling','-','m&#228nnlich',1),(98,'Strasky','Mathilde','Riedl','-','-','STRAS-Ma','23.03.1841','Tulln','r&#246m. kath.','-','-','-','-',113,114,'Riedl',97,'04.11.1861','Wien','10 Kinder',NULL,'18.10.1918','Wien Meidling','-','-','-','-','weiblich',1),(99,'Sch&#246rg','Leopold',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(100,'Sch&#246rg','Theresia','Pumpler',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,99,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(101,'Kuso','Franz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,102,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(102,'Kuso','Magdalena','Dubkowitsch',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,101,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(103,'Uhl','Andreas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,104,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(104,'Uhl','Josefa','Presskl',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,103,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(105,'Cernicek','Josef',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,106,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(106,'Cernicek','Justine','Listick',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(107,'Baumg&#228rtel','Gottfried',NULL,NULL,NULL,NULL,'12.03.1790','Schulze',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,108,NULL,NULL,NULL,NULL,'02.09.1867',NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(108,'Baumg&#228rtel','Eva-Maria','Lorenz',NULL,NULL,NULL,'04.02.1787','Lauterbach',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,107,NULL,NULL,NULL,NULL,NULL,'Altmannsgrund',NULL,NULL,NULL,NULL,'weiblich',NULL),(109,'Sonntag','J. K. Gotthelm',NULL,NULL,NULL,NULL,'16.04.1797','Schleiz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,110,NULL,NULL,NULL,NULL,'16.05.1863','Schleiz',NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(110,'Sonntag','Elizabeth','Porzig',NULL,NULL,NULL,'13.04.1785','Friedrichstam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,109,NULL,NULL,NULL,NULL,'23.10.1845','Schleiz',NULL,NULL,NULL,NULL,'weiblich',NULL),(111,'Strasky','Mathias',NULL,NULL,NULL,NULL,'16.04.1811','Budweis',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,112,'27.02.1832','Neubisfritz',NULL,NULL,'1896','Platz',NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(112,'Strasky','Magdalene','Faast',NULL,NULL,NULL,'19.07.1812','Neubisfritz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,111,'27.02.1832','Neubisfritz',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL),(113,'Riedl','Johannes',NULL,NULL,NULL,NULL,'13.04.1806','Wien',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,114,'04.11.1830','Langenzersdorf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(114,'Riedl','Theresia','Jell',NULL,NULL,NULL,'02.10.1805','Langenzersdorf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,113,'04.11.1830','Langenzersdorf',NULL,NULL,NULL,'Wien',NULL,NULL,NULL,NULL,'weiblich',NULL),(1000,'Unbekannt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'m&#228nnlich',NULL),(1001,'Unbekannt','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'weiblich',NULL);
/*!40000 ALTER TABLE `lebensdaten` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objekte`
--

DROP TABLE IF EXISTS `objekte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `objekte` (
  `id` int(11) NOT NULL,
  `werke` varchar(300) DEFAULT NULL,
  `dokumente` varchar(300) DEFAULT NULL,
  `sonstiges` varchar(300) DEFAULT NULL,
  `korrespondenzen` varchar(300) DEFAULT NULL,
  `sammlungen` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `objekte_ibfk_1` FOREIGN KEY (`id`) REFERENCES `lebensdaten` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objekte`
--

LOCK TABLES `objekte` WRITE;
/*!40000 ALTER TABLE `objekte` DISABLE KEYS */;
/*!40000 ALTER TABLE `objekte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pmerkmale`
--

DROP TABLE IF EXISTS `pmerkmale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pmerkmale` (
  `id` int(11) NOT NULL,
  `charMerkmale` varchar(3000) DEFAULT NULL,
  `faehigkeiten` varchar(3000) DEFAULT NULL,
  `besonSituation` varchar(3000) DEFAULT NULL,
  `fuegungen` varchar(3000) DEFAULT NULL,
  `kommentare` varchar(3000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `pmerkmale_ibfk_1` FOREIGN KEY (`id`) REFERENCES `lebensdaten` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pmerkmale`
--

LOCK TABLES `pmerkmale` WRITE;
/*!40000 ALTER TABLE `pmerkmale` DISABLE KEYS */;
INSERT INTO `pmerkmale` VALUES (1,'','','','',''),(2,'','','','',''),(3,'','','','',''),(4,'Hilfsbereit: gutmütig, Kinderliebend, Offenheit, guter Umgang mit allen Personen, würde die haushaltsordnung unterstützen,lustig: Gutes Gespür \nfür Recht und Unrecht: Extreme Gegnerin von Hitler und dem Nationalsozialismus (Hoffentlich verlieren wir den Krieg).','Hohe Intelligenz (Matura, Studium). Handwerkliche Geschicklichkeit. Sprachliche Begabung (Deutsch, Englisch, Französisch). Interesse an Theater. Musikalische Begabung (Studium Klavier). Kenntniss der Klassischen Musik/Oper (jedes Jahr wurde Ihr Geburtstag in der Oper gefeiert). Die Musikalität ermöglicht auch anderen Menschen sprachlich zu imitieren. Didaktische Begabung (Es war ein Vergnügen für mich(sicht Heinz Hübner) mit Mutti Französisch zu lernen)','Zum ende des zweiten Weltkriegs drohten große Gefahren für Familien und Frauen. Bombadierungen im Raum Wien und Einmarsch russischer Truppen. Wer die Möglichkeit hatte flüchtete in den Westen so auch wir. Da wir mehrere Sommer vorher in einem Hotel am Achensee (Tirol) auf Urlaub gewesen sind sagte uns der Pächter zu, dass wir kommen können, außerhalb der Saison weil er den Krieg (von München aus)auch von dort verbringe. Die bewilligte Fahrt mit PKW und Anhängern endete jedoch in Vöcklabruck. Die Männer sollten zur Volkssturm, für die Mutter + Kinder standen ein Zug mit Viehwaggons bereit. Und damit begann die Bewährung für Mutti.AmMorgen des nächsten Tages kamen wir in Jenbach an. Die Frage ob wir ein Erlaubnis haben bejahte sie mit einem lauten Jit (die Bewilligung hatte aber Vater) Es war kalt und schneite und Mutti musste einen zum Ackensee organisieren, dies ist ihr auch gelungen. Ein Lastwagen brachte uns zum Hotel. Dieses war leer, wir bezogen äußere Zimmer in der Despandeuce mit Lavoire und Wasserkrug, das Bad war am Gang. Mutti durfte in der großen, eiskalten Hotelküche im Hotel für uns inklusive Oma (die sich im Viehwagen den Arm gebrochen hat) kochen.\nEinkaufen gingen wir fast täglich zum See-Eude Richy Bayern. Eines Tages kamen uns US-amerikanische Panzer entgegen und blieben stehen. Welcome in Austria war Muttis Begrüßung. Der Offizier war froh, das jemand endlich Englisch sprechen konnte, was ein großer Vorteil war. Wenn wir Räumlichkeiten und eigenen Eingang finden, können wir bleiben, ansonsten müssen wir ins Flüchtlingsquartier nach Achenkirch. Mutti geling dies und war Dolmetscherin für alle Fragen und Probleme der Befreiungstruppen von der Heerdiktatur. Die Truppen wurde bald durch Marokanische Trupen ersetzt und fungierte wieder als Dolmetscherin, was uns viele Vorteile brachte. Fast 3 Monate behauptete sie viel als Frau, Mutter in der Männerwelt bis Vater kam. ','','Natürlich hatte auch Mutti ihre Mucken, war die Einschätzung von Menschen, unter anderem von meinem Freund Werner und meiner geliebten Brigitte. Sport war auch nicht ihre Stärke.cPersönlich habe ich große Dankbarkeit für: Die empfange Liebe Die Hingabe zur Musik Das Wecken der Interesse für das Theater und Literatur Eine gewisse sprachliche Begabung Abschlussbemerkung: Die Familie Schwab war in Baden sehr beliebt und meine Mutter erregte sicher wegen ihrer Persönlichkeit und ihrer Beabung und Fähigkeiten im Bekannten und Freundeskreis ihrer Eltern für Aufsehen. Wie sie auch öfters erzählte gab es auch viele freier zumeist Unternehmer aber mit wenig Interesse. Nach dem unerwarteten Ableben ihres Vaters hilft sie ihrer Mutter bei der Umwandlung des Unternehmens als Witwebetrieb. Dann ging sie aufgrund der aktuellen Situation selbst auf Bräutigam Schau und fuhr nach Kitzbühel. Es fügte sich, dass die Nicht Skifahrerin unseren Vater den Skifahrer kennenlernte. Wie dies geschehen ist, ist eine andere Geschichte die wir unsere Existenz zu verdanken haben.'),(5,'','','','',''),(6,'','','','',''),(7,'','','','',''),(8,'','','','',''),(9,'','','','',''),(10,'','','','',''),(11,'','','','',''),(12,'','','','',''),(13,'','','','',''),(14,'','','','',''),(15,'','','','',''),(16,'','','','',''),(17,'','','','',''),(18,'','','','',''),(19,'','','','',''),(20,'','','','',''),(21,'','','','',''),(22,'','','','',''),(23,'','','','',''),(24,'','','','',''),(25,'','','','',''),(26,'','','','',''),(27,'','','','',''),(28,'','','','',''),(29,'','','','',''),(30,'','','','','');
/*!40000 ALTER TABLE `pmerkmale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tag` (
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-22 21:27:06
