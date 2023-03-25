-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: pwii
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alunoconcluinte`
--

DROP TABLE IF EXISTS `alunoconcluinte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alunoconcluinte` (
  `idalunoconcluinte` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `nota4` float NOT NULL,
  PRIMARY KEY (`idalunoconcluinte`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunoconcluinte`
--

LOCK TABLES `alunoconcluinte` WRITE;
/*!40000 ALTER TABLE `alunoconcluinte` DISABLE KEYS */;
INSERT INTO `alunoconcluinte` VALUES (1,'Eduarda',10,10,9,10),(2,'Paulo',10,9,8,9),(3,'Igo',10,8,10,10),(4,'Guilherm',10,9,8,7),(5,'Henrique',9,9,8,7),(6,'Nilson',10,9,10,9),(7,'Ana',9,9,8,8),(8,'Amanda',8,9,9,8),(9,'Carlos',6,6,5,6),(10,'Pedro',8,8,8,7);
/*!40000 ALTER TABLE `alunoconcluinte` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-25  4:35:00
