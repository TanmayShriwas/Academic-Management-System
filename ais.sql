-- MySQL dump 10.13  Distrib 5.7.19, for Win32 (AMD64)
--
-- Host: localhost    Database: ais
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `title` varchar(70) NOT NULL DEFAULT '<--Untitled-->',
  `author` varchar(70) NOT NULL DEFAULT '<--Unknown-->',
  `sem` varchar(20) NOT NULL DEFAULT '<--Unknown-->',
  `sub` varchar(50) NOT NULL DEFAULT '<--Unknown-->',
  `avl` int(4) NOT NULL,
  PRIMARY KEY (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES ('Higher Engineering Mathematics','B.S. Grewal Khanna Publication','I','Mathematics-I',4),('Advance Engineering Mathematics','Ramana, Tata McGraw hill','I','Mathematics-I',5),('Advance Mathematics','D.G.Guffy','I','Mathematics-I',5),('Engineering Mathematics','S S Sastri. P.H.I','I','Mathematics-I',2),('IBM Book','','I','Open Source',10),('Engg. Graphics for Degree','John KC','I','Engineering Drawing',30),('Engineering Drawing','Agrawal and Agrawal','I','Engineering Drawing',12),('Engineering drawing & Graphics','Jeyopoovan T','I','Engineering Drawing',5),('Fundamental of Computer & Architecture','B Rajaraman','I','BCE',2),('Basic Computer Engineering','E Balagurusamy, McGraw Hill ','I','BCE',30),('Engineering Chemistry','Jain & Jain, Dhanpat - rai Publication','I','Engineering Chemistry',8),('Engineering Chemistry Theory & Practice','Dr. V. W. Bhagwat & Dr. Pranay Guru,Vikas','I','Engineering Chemistry',4),('Computer Fundamentals and C Programming','Amiya Kumar Rath. Scitech Publication','I','BCE',7),('A Text Book of Engineering Chemistry','S. S. Dara & A.K. Singh','I','Engineering Chemistry',6),('The environmental ethics and policy','','II','EEES',12),('Environmental Psychology','R K Verma','II','EEES',5),('Ecology and equity','Madhu Gadgil','II','EEES',7),('Fundamentals of data Structures','Horowitz and Sahani','II','Data Structure With C',15),('Data Structures and Program Design in C','R. Kruse etal','II','Data Structure With C',8),('Data Structures using C & C++','A. M. Tenenbaum','II','Data Structure With C',7),('Mastering Algorithms with C','K Loudon','II','Data Structure With C',2),('Engineering physics','M.N. Avadhanulu','II','Engineering Physics',20),('Atomic and Nuclear Physics','Brijlal and Subraminiyan','II','Engineering Physics',5),('Solid State Physics','Kittel','II','Engineering Physics',2),('Concepts of Modern Physics','BTiser, TMH','II','Engineering Physics',9),('Fundamentals of Physics','Halliday, Wiley India','II','Engineering Physics',6),('Communication Skills','Dr. Gajanan Malviya & Prof R. N. Shukla','II','Communication Skills',10),('Professional Communication','R Rizvi, TMH','II','Communication Skills',4),('Effective Technical Communication','Rizvi TMH','II','Communication Skills',8),('Living English Structure',' W.S. Allen','II','Communication Skills',1),('Web Programming Through PHP','IBM ICE Publication','II','Web Programming',30),('PHP A beginners guide','Bill McCarthy','II','Web Programming',5),('PHP and MySQL Web Development','Luke Welling','II','Web Programming',3),('Learning PHP','OReilly Press','II','Web Programming',3),('Engg. Mathematics-2','D C Agarwal','III','Mathematics-II',15),('Mathematics for Engineers','S Arumungam','III','Mathematics-II',12),('Electronic Devices & Circuits','Boylstad & Nashelsky','III','Digital Electronics',20),('Integrated Electronics','Millman & Halkias ','III','Digital Electronics',5),('Electonic Principles','Malvino','III','Digital Electronics',2),('Principles Of Electronics','V K Mehta , Shalu Mehta','III','Digital Electronics',3),('Analysis & Design','Atul Kahate THM','III','OOT',4),('Object Oriented Modelling & Design','Booch Rambaugh PHI','III','OOT',7),('Object Oriented Programming in C++','Robert Lafore','III','OOT',3),('Object Oriented Programming with C++','E Balagurusamy, McGraw Hill','III','OOT',14),('Fundamentals Of Database Systems','Elmasri & Navathe','III','DBMS',11),('Database System Concepts','Korth & Sudershan','III','DBMS',7),('An Introduction to Database Systems','C J Date','III','DBMS',2),('Introduction to Database Management System','Atul Kahate','III','DBMS',1),('IBM IT Infrastructure Book','IBM ICE Publication','III','IT Infrastructure',30);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `eroll` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `pass` varchar(300) NOT NULL,
  PRIMARY KEY (`eroll`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('000','admin','NA','NA','letmein'),('PU023161617A12','Shivam Shukla','shivam@hotmail.com','III','shivam12'),('PU001161617A12','Aayushi Kesharwani','aayushi@hotmail.com','III','iamaayushi'),('PU027161617A12','Tanmay Shriwas','tanmay@hotmail.com','III','tanmayin'),('PU022161617A12','Satyam Jay','satyam@hotmail.com','III','satyam12'),('PU029161617A12','Atharva  Dubey','atharvdubey9@gmail.com','III','iamatd'),('PU010161617A12','Jaismene Verma','jaismene@hotmail.com','III','jais12'),('PU021161617A12','Sanskar Mandavi','sanskr@hotmail.com','III','bahubali'),('PU024161617A12','Shruti Soni','shruti@hotmail.com','III','shruti12');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-22 12:53:18
