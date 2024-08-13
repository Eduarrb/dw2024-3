CREATE DATABASE  IF NOT EXISTS `stream` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `stream`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: stream
-- ------------------------------------------------------
-- Server version	8.0.38

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
-- Table structure for table `actores`
--

DROP TABLE IF EXISTS `actores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actores` (
  `act_id` int unsigned NOT NULL AUTO_INCREMENT,
  `act_nombres` varchar(100) NOT NULL,
  `act_apellidos` varchar(100) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actores`
--

LOCK TABLES `actores` WRITE;
/*!40000 ALTER TABLE `actores` DISABLE KEYS */;
INSERT INTO `actores` VALUES (1,'Cilian','Murphy'),(2,'Matt','Daemon'),(3,'Keanu','Reaves'),(4,'Carrie-Anne','Moss'),(5,'Leonardo','Dicaprio'),(6,'Kate','Winslet'),(7,'Liam','Neelson'),(8,'Sigourney','Weaver'),(9,'Patrick','Wilson'),(10,'Vera','Farmiga');
/*!40000 ALTER TABLE `actores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directores`
--

DROP TABLE IF EXISTS `directores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directores` (
  `dire_id` int unsigned NOT NULL AUTO_INCREMENT,
  `dire_nombres` varchar(100) NOT NULL,
  `dire_apellidos` varchar(100) NOT NULL,
  PRIMARY KEY (`dire_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directores`
--

LOCK TABLES `directores` WRITE;
/*!40000 ALTER TABLE `directores` DISABLE KEYS */;
INSERT INTO `directores` VALUES (2,'Lana','Wachowsky'),(3,'James','Cameron'),(4,'Ridley','Scott'),(5,'Juan','Bayona'),(6,'Peter','Jackson');
/*!40000 ALTER TABLE `directores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peliculas` (
  `peli_id` int unsigned NOT NULL AUTO_INCREMENT,
  `peli_dire_id` int unsigned DEFAULT NULL,
  `peli_nombre` varchar(100) NOT NULL,
  `peli_genero` varchar(50) NOT NULL,
  `peli_fechaEstreno` date NOT NULL,
  `peli_restricciones` varchar(5) NOT NULL,
  PRIMARY KEY (`peli_id`),
  KEY `fk_direId` (`peli_dire_id`),
  CONSTRAINT `fk_direId` FOREIGN KEY (`peli_dire_id`) REFERENCES `directores` (`dire_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas`
--

LOCK TABLES `peliculas` WRITE;
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` VALUES (2,2,'Matrix','Ciencia Ficción','1991-01-23','PG-13'),(3,3,'Titanic','drama','1997-12-19','PG-16'),(4,NULL,'La Lista de Shindler','Drama','1998-05-05','PG-16'),(5,5,'La Sociedad y la nieve','Suspenso','2023-06-06','PG-18'),(6,NULL,'El Conjuro','Terror','2010-02-02','PG-16'),(7,4,'Alien: El octavo pasajero','ciencia ficcion','1990-12-12','PG-13'),(8,NULL,'007: Golden Eye','Acción','1996-07-07','PG'),(9,NULL,'Man of steel','Ciencia ficcion','1999-10-10','PG'),(10,NULL,'Madagascar','Animada','2000-05-05','PG');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personajes`
--

DROP TABLE IF EXISTS `personajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personajes` (
  `per_act_id` int NOT NULL,
  `per_peli_id` int NOT NULL,
  `per_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personajes`
--

LOCK TABLES `personajes` WRITE;
/*!40000 ALTER TABLE `personajes` DISABLE KEYS */;
INSERT INTO `personajes` VALUES (1,1,'Opennhaimer'),(2,1,'Gen. Lesli Groves'),(3,2,'Neo'),(4,2,'Trinity'),(5,3,'Jack'),(6,3,'Rose'),(7,4,'Oscar Shindler'),(8,7,'Ripley'),(9,6,'Ed Warren'),(10,6,'Lorraine Warren');
/*!40000 ALTER TABLE `personajes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-12 19:39:41
