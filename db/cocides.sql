CREATE DATABASE  IF NOT EXISTS `cocides` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cocides`;
-- MySQL dump 10.13  Distrib 5.6.12, for Win64 (x86_64)
--
-- Host: localhost    Database: cocides
-- ------------------------------------------------------
-- Server version	5.6.12

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
-- Table structure for table `asociacion`
--

DROP TABLE IF EXISTS `asociacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asociacion` (
  `id_aso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_aso` varchar(50) NOT NULL,
  `departamento_aso` varchar(25) NOT NULL,
  PRIMARY KEY (`id_aso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asociacion`
--

LOCK TABLES `asociacion` WRITE;
/*!40000 ALTER TABLE `asociacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `asociacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita` (
  `cod_cita` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_cita` date NOT NULL,
  `hora_cita` time NOT NULL,
  `cod_doc` int(11) NOT NULL,
  PRIMARY KEY (`cod_cita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consulta` (
  `cod_con` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_con` date NOT NULL,
  `motivo_con` varchar(200) NOT NULL,
  `cod_doc` int(11) NOT NULL,
  `cod_pa` int(11) NOT NULL,
  PRIMARY KEY (`cod_con`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuadrante1`
--

DROP TABLE IF EXISTS `cuadrante1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuadrante1` (
  `cod_paciente` int(11) NOT NULL,
  `diente1a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuadrante1`
--

LOCK TABLES `cuadrante1` WRITE;
/*!40000 ALTER TABLE `cuadrante1` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuadrante1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuadrante2`
--

DROP TABLE IF EXISTS `cuadrante2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuadrante2` (
  `cod_paciente` int(11) NOT NULL,
  `diente1a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuadrante2`
--

LOCK TABLES `cuadrante2` WRITE;
/*!40000 ALTER TABLE `cuadrante2` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuadrante2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuadrante3`
--

DROP TABLE IF EXISTS `cuadrante3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuadrante3` (
  `cod_paciente` int(11) NOT NULL,
  `diente1a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuadrante3`
--

LOCK TABLES `cuadrante3` WRITE;
/*!40000 ALTER TABLE `cuadrante3` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuadrante3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuadrante4`
--

DROP TABLE IF EXISTS `cuadrante4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuadrante4` (
  `cod_paciente` int(11) NOT NULL,
  `diente1a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8a` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8b` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8c` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8d` char(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8e` char(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`cod_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuadrante4`
--

LOCK TABLES `cuadrante4` WRITE;
/*!40000 ALTER TABLE `cuadrante4` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuadrante4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctor` (
  `cod_doc` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_doc` varchar(60) NOT NULL,
  `apellido_doc` varchar(60) NOT NULL,
  `JVPO` varchar(25) NOT NULL,
  `genero_doc` varchar(15) NOT NULL,
  `fecha_na_doc` date NOT NULL,
  `password_doc` varchar(25) NOT NULL,
  `telefono_doc` varchar(12) NOT NULL,
  `direccion_doc` varchar(50) NOT NULL,
  `departamento_doc` varchar(20) NOT NULL,
  `cod_as` int(11) NOT NULL,
  PRIMARY KEY (`cod_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expediente`
--

DROP TABLE IF EXISTS `expediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expediente` (
  `cod_ex` int(11) NOT NULL AUTO_INCREMENT,
  `no_ex` varchar(25) NOT NULL,
  `referido` varchar(30) NOT NULL,
  `at_medicos` varchar(200) NOT NULL,
  `cod_cita` int(11) NOT NULL,
  `cod_pa` int(11) NOT NULL,
  PRIMARY KEY (`cod_ex`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expediente`
--

LOCK TABLES `expediente` WRITE;
/*!40000 ALTER TABLE `expediente` DISABLE KEYS */;
/*!40000 ALTER TABLE `expediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `cod_pa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pa` varchar(60) NOT NULL,
  `apellido_pa` varchar(60) NOT NULL,
  `fecha_na_pa` date NOT NULL,
  `edad_pa` varchar(5) NOT NULL,
  `genero_pa` varchar(15) NOT NULL,
  `telefono_pa` varchar(12) NOT NULL,
  `direccion_pa` varchar(25) NOT NULL,
  `municipio_pa` varchar(25) NOT NULL,
  `departamento_pa` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_pa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pass`
--

DROP TABLE IF EXISTS `pass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pass` (
  `cod_pass` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(15) NOT NULL,
  `cod_us` int(11) NOT NULL,
  PRIMARY KEY (`cod_pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pass`
--

LOCK TABLES `pass` WRITE;
/*!40000 ALTER TABLE `pass` DISABLE KEYS */;
/*!40000 ALTER TABLE `pass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (52,'angel','leonardo','21','destiny','2013-10-28 03:06:15'),(53,'angel','leonardo','21','destiny','2013-10-28 03:14:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `cod_us` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_us` varchar(25) NOT NULL,
  `cod_aso` int(11) NOT NULL,
  PRIMARY KEY (`cod_us`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'guillen',1),(2,'damgel',2);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voluntariado`
--

DROP TABLE IF EXISTS `voluntariado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voluntariado` (
  `cod_vo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_vo` varchar(60) DEFAULT NULL,
  `apellido_vo` varchar(60) DEFAULT NULL,
  `fecha_na_vo` date DEFAULT NULL,
  `edad_vo` varchar(5) DEFAULT NULL,
  `genero_vo` varchar(15) DEFAULT NULL,
  `telefono_vo` varchar(10) DEFAULT NULL,
  `direccion_vo` varchar(50) DEFAULT NULL,
  `departamento_vo` varchar(20) DEFAULT NULL,
  `cod_aso` int(11) NOT NULL,
  `email_vo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_vo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voluntariado`
--

LOCK TABLES `voluntariado` WRITE;
/*!40000 ALTER TABLE `voluntariado` DISABLE KEYS */;
INSERT INTO `voluntariado` VALUES (9,'Jose','Guillen','2013-10-15','21','','79263016','','san miguel',1,'deakill@hotmail.com'),(10,'Jose','Guillen','2013-10-15','21','','79263016','','san miguel',1,'deakill@hotmail.com'),(11,'angel','lopez','2013-10-16','21','','79263016','','san salvador',1,'deakill@hotmail.com'),(12,'Karla Lisseth','Varela','1992-10-10','21','','23319047','','san vicente',1,'deakill@hotmail.com'),(13,'Karla Lisseth','Varela','1992-10-10','21','','23319047','','san vicente',1,'deakill@hotmail.com');
/*!40000 ALTER TABLE `voluntariado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cocides'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-28 15:34:27
