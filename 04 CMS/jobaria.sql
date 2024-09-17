CREATE DATABASE  IF NOT EXISTS `jobaria` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `jobaria`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: jobaria
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
-- Table structure for table `carrito`
--

DROP TABLE IF EXISTS `carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carrito` (
  `cart_id` int unsigned NOT NULL AUTO_INCREMENT,
  `cart_user_id` int unsigned NOT NULL,
  `cart_prod_id` int unsigned NOT NULL,
  `cart_canti` int NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrito`
--

LOCK TABLES `carrito` WRITE;
/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
INSERT INTO `carrito` VALUES (1,1,2,5);
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentarios` (
  `com_id` int unsigned NOT NULL AUTO_INCREMENT,
  `com_user_id` int unsigned NOT NULL,
  `com_prod_id` int unsigned NOT NULL,
  `com_mensaje` text NOT NULL,
  `com_puntaje` int NOT NULL,
  `com_fecha` date NOT NULL,
  `com_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`com_id`),
  KEY `fk_userId` (`com_user_id`),
  KEY `fk_prodId` (`com_prod_id`),
  CONSTRAINT `fk_prodId` FOREIGN KEY (`com_prod_id`) REFERENCES `productos` (`prod_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_userId` FOREIGN KEY (`com_user_id`) REFERENCES `usuarios` (`user_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,3,2,'Este producto esta genial. Lo recomiendo a 100%',5,'2024-09-04',1),(2,1,2,'Producto sobresaliente',5,'2024-09-04',1),(3,4,2,'El producto vino con fallas, felizmente lo cambiaron',3,'2024-09-06',1),(4,1,3,'Producto malisimo',1,'2024-09-11',1);
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `prod_id` int unsigned NOT NULL AUTO_INCREMENT,
  `prod_nombre` varchar(100) NOT NULL,
  `prod_descri` text NOT NULL,
  `prod_precio` decimal(10,2) NOT NULL,
  `prod_canti` int NOT NULL,
  `prod_img` varchar(100) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (2,'Laptop Gamer Asus','<div>Laptop gamer de alto rendimiento diseñada para los entusiastas de los videojuegos que buscan una experiencia de juego inmersiva y fluida. Equipada con tecnología de última generación y características avanzadas, esta laptop garantiza una jugabilidad superior y multitarea eficiente.<br><br></div><div><strong>Características:<br></strong><br></div><ul><li>Procesador Intel Core i7 de 11ª generación o AMD Ryzen 9</li><li>Tarjeta gráfica NVIDIA GeForce RTX 3080 con 8GB de VRAM</li><li>Pantalla de 15.6” FHD o 4K con 144Hz de tasa de refresco</li><li>Memoria RAM de 16GB o 32GB DDR4</li><li>Almacenamiento SSD de 1TB NVMe</li><li>Teclado retroiluminado RGB personalizable</li><li>Sistema de refrigeración avanzada</li><li>Conectividad Wi-Fi 6 y Bluetooth 5.1</li><li>Puertos USB-C, HDMI, y lector de tarjetas SD</li><li>Batería de larga duración con carga rápida</li></ul><div>Ideal para gamers y creadores de contenido.</div>',5899.99,5,'87fd8b5836f3cf14b176aaeba3cf7363.jpg'),(3,'Parlante Alexa IA','<div>Lámpara inteligente diseñada para ofrecer confort y personalización en cualquier ambiente. Compatible con asistentes de voz como Alexa y Google Assistant, permite control remoto mediante comandos de voz o aplicación móvil.<br><br></div><div><strong>Características:<br></strong><br></div><ul><li>Control de brillo ajustable y temperatura de color</li><li>Conectividad Wi-Fi integrada</li><li>Múltiples opciones de color RGB</li><li>Temporizador programable y modo de encendido/apagado automático</li><li>Funciones de iluminación personalizada</li><li>Diseño elegante y moderno que se adapta a cualquier estilo de decoración</li><li>Fácil instalación y configuración</li></ul><div>Perfecta para crear ambientes relajantes, de estudio, o de entretenimiento, brindando comodidad y estilo a tu hogar u oficina.</div>',135.50,10,'07ca463b933f044e5a06b2f105dc2121.jpg'),(4,'Mando xbox','<div>El mando Xbox ofrece una experiencia de juego cómoda y precisa con un diseño ergonómico y características avanzadas. Ideal para jugadores que buscan rendimiento y personalización.<br><br></div><div><strong>Características:<br></strong><br></div><ul><li>Diseño ergonómico para un agarre cómodo y seguro</li><li>Botón de compartir para capturar y grabar rápidamente</li><li>Cruceta híbrida mejorada para mayor precisión</li><li>Conectividad inalámbrica y Bluetooth para juegos en consola, PC, y dispositivos móviles</li><li>Botones programables para personalización de controles</li><li>Compatible con baterías recargables y pilas AA</li><li>Vibración de impulso para una retroalimentación táctil inmersiva</li><li>Entrada de audio de 3.5 mm para conectar auriculares</li><li>Fácil de emparejar y cambiar entre dispositivos</li></ul><div>Perfecto para sesiones de juego prolongadas y de alto rendimiento.</div>',260.00,6,'0570dd81c5d7c9293954472357ba3cdb.jpg'),(5,'Smart Watch LG','<div>El smartwatch combina tecnología avanzada con un diseño elegante para ofrecer una experiencia completa de salud, comunicación y estilo de vida. Ideal para quienes buscan mantenerse conectados y saludables.<br><br></div><div><strong>Características:<br></strong><br></div><ul><li>Pantalla AMOLED táctil de alta resolución</li><li>Monitoreo continuo de ritmo cardíaco y sueño</li><li>GPS integrado para seguimiento de actividades al aire libre</li><li>Resistente al agua hasta 50 metros, ideal para nadar</li><li>Notificaciones inteligentes para llamadas, mensajes y aplicaciones</li><li>Batería de larga duración con carga rápida</li><li>Seguimiento de múltiples deportes y modos de ejercicio</li><li>Compatible con iOS y Android</li><li>Control de música y cámara desde la muñeca</li><li>Funciones de bienestar como meditación guiada y recordatorios de actividad</li></ul><div>Perfecto para un estilo de vida activo y conectado.</div>',459.99,4,'bbc43c448aec9fd080656ccac79157d5.jpg'),(6,'Celular Nokia T1000','<div>Este smartphone combina tecnología de punta con un diseño elegante y funcional, ofreciendo un rendimiento excepcional para usuarios exigentes. Ideal para quienes buscan velocidad, calidad de imagen y capacidades avanzadas.<br><br></div><div><strong>Características:<br></strong><br></div><ul><li>Pantalla AMOLED de 6.7” con resolución Full HD+ y tasa de refresco de 120Hz</li><li>Procesador Snapdragon 8 Gen 2 para un rendimiento ultrarrápido</li><li>Cámara trasera triple de 50MP, 12MP ultra gran angular y 10MP teleobjetivo</li><li>Cámara frontal de 32MP para selfies y videollamadas de alta calidad</li><li>Batería de 5000 mAh con carga rápida e inalámbrica</li><li>8GB o 12GB de RAM con opciones de almacenamiento de 128GB, 256GB, y 512GB</li><li>Conectividad 5G, Wi-Fi 6, y Bluetooth 5.2</li><li>Sensor de huellas dactilares en pantalla y reconocimiento facial</li><li>Resistencia al agua y polvo IP68</li></ul><div>Ideal para entretenimiento, fotografía, y productividad.<br><br></div>',1599.98,12,'abae44b71ca7f49a6cf6e624aa388111.jpg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `user_id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_nombres` varchar(100) NOT NULL,
  `user_apellidos` varchar(100) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_img` varchar(100) DEFAULT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_token` text,
  `user_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'status 0: no activo. status 1: activo',
  `user_rol` varchar(50) NOT NULL DEFAULT 'cliente',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Eduardo','Arroyo','eduardo@gmail.com','edu.jpg','$2y$12$Wkdfpq.QW1bLZ8nKnr0Qae4jmsF4P/30aYLp/l2ErIrqGyqTL5sby','bc5f4c96b7cc8f260c7f90951489fa3b',1,'admin'),(3,'Karina','Salas','karina@gmail.com',NULL,'$2y$12$a/0.qOoYv6UQyoBLbZkWaeRCcTODV1f0.2fsDfb4w9JDwsKWi5Fgi','',1,'cliente'),(4,'Carlos','Casas','carlos@gmail.com',NULL,'$2y$12$oLfL.nyppnMeMgf48Bny2OZyH0yBiDVBKvhLQ8CQXxGLaXtNQkkIS','db1e0a3750e0399df3eeee808187d9b4',1,'cliente');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-16 21:40:38
