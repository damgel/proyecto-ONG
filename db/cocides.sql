# SQL Manager Lite for MySQL 5.3.1.7
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : cocides


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `cocides`
    CHARACTER SET 'latin1'
    COLLATE 'latin1_swedish_ci';

USE `cocides`;

#
# Structure for the `asociacion` table : 
#

CREATE TABLE `asociacion` (
  `id_aso` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `nombre_aso` VARCHAR(50) COLLATE latin1_swedish_ci NOT NULL,
  `departamento_aso` VARCHAR(25) COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY USING BTREE (`id_aso`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `cita` table : 
#

CREATE TABLE `cita` (
  `cod_cita` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `fecha_cita` DATE NOT NULL,
  `hora_cita` TIME NOT NULL,
  `cod_doc` INTEGER(11) NOT NULL,
  PRIMARY KEY USING BTREE (`cod_cita`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `consulta` table : 
#

CREATE TABLE `consulta` (
  `cod_con` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `fecha_con` DATE NOT NULL,
  `motivo_con` VARCHAR(200) COLLATE latin1_swedish_ci NOT NULL,
  `cod_doc` INTEGER(11) NOT NULL,
  `cod_pa` INTEGER(11) NOT NULL,
  PRIMARY KEY USING BTREE (`cod_con`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `cuadrante1` table : 
#

CREATE TABLE `cuadrante1` (
  `cod_paciente` INTEGER(11) NOT NULL,
  `diente1a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY USING BTREE (`cod_paciente`) COMMENT ''
)ENGINE=InnoDB
CHARACTER SET 'latin1' COLLATE 'latin1_spanish_ci'
COMMENT=''
;

#
# Structure for the `cuadrante2` table : 
#

CREATE TABLE `cuadrante2` (
  `cod_paciente` INTEGER(11) NOT NULL,
  `diente1a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY USING BTREE (`cod_paciente`) COMMENT ''
)ENGINE=InnoDB
CHARACTER SET 'latin1' COLLATE 'latin1_spanish_ci'
COMMENT=''
;

#
# Structure for the `cuadrante3` table : 
#

CREATE TABLE `cuadrante3` (
  `cod_paciente` INTEGER(11) NOT NULL,
  `diente1a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY USING BTREE (`cod_paciente`) COMMENT ''
)ENGINE=InnoDB
CHARACTER SET 'latin1' COLLATE 'latin1_spanish_ci'
COMMENT=''
;

#
# Structure for the `cuadrante4` table : 
#

CREATE TABLE `cuadrante4` (
  `cod_paciente` INTEGER(11) NOT NULL,
  `diente1a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente1e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente2e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente3e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente4e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente5e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente6e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente7e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8a` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8b` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8c` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8d` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  `diente8e` CHAR(1) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY USING BTREE (`cod_paciente`) COMMENT ''
)ENGINE=InnoDB
CHARACTER SET 'latin1' COLLATE 'latin1_spanish_ci'
COMMENT=''
;

#
# Structure for the `doctor` table : 
#

CREATE TABLE `doctor` (
  `cod_doc` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `nombre_doc` VARCHAR(60) COLLATE latin1_swedish_ci NOT NULL,
  `apellido_doc` VARCHAR(60) COLLATE latin1_swedish_ci NOT NULL,
  `JVPO` VARCHAR(25) COLLATE latin1_swedish_ci NOT NULL,
  `genero_doc` VARCHAR(15) COLLATE latin1_swedish_ci NOT NULL,
  `fecha_na_doc` DATE NOT NULL,
  `password_doc` VARCHAR(25) COLLATE latin1_swedish_ci NOT NULL,
  `telefono_doc` VARCHAR(12) COLLATE latin1_swedish_ci NOT NULL,
  `direccion_doc` VARCHAR(50) COLLATE latin1_swedish_ci NOT NULL,
  `departamento_doc` VARCHAR(20) COLLATE latin1_swedish_ci NOT NULL,
  `activo` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `permiso` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `cod_as` INTEGER(11) NOT NULL,
  PRIMARY KEY USING BTREE (`cod_doc`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=10 AVG_ROW_LENGTH=3276 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `expediente` table : 
#

CREATE TABLE `expediente` (
  `cod_ex` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `no_ex` VARCHAR(25) COLLATE latin1_swedish_ci NOT NULL,
  `referido` VARCHAR(30) COLLATE latin1_swedish_ci NOT NULL,
  `at_medicos` VARCHAR(200) COLLATE latin1_swedish_ci NOT NULL,
  `cod_cita` INTEGER(11) NOT NULL,
  `cod_pa` INTEGER(11) NOT NULL,
  PRIMARY KEY USING BTREE (`cod_ex`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `paciente` table : 
#

CREATE TABLE `paciente` (
  `cod_pa` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `nombre_pa` VARCHAR(60) COLLATE latin1_swedish_ci NOT NULL,
  `apellido_pa` VARCHAR(60) COLLATE latin1_swedish_ci NOT NULL,
  `fecha_na_pa` DATE NOT NULL,
  `edad_pa` VARCHAR(5) COLLATE latin1_swedish_ci NOT NULL,
  `genero_pa` VARCHAR(15) COLLATE latin1_swedish_ci NOT NULL,
  `telefono_pa` VARCHAR(12) COLLATE latin1_swedish_ci NOT NULL,
  `direccion_pa` VARCHAR(25) COLLATE latin1_swedish_ci NOT NULL,
  `municipio_pa` VARCHAR(25) COLLATE latin1_swedish_ci NOT NULL,
  `departamento_pa` VARCHAR(20) COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY USING BTREE (`cod_pa`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `pass` table : 
#

CREATE TABLE `pass` (
  `cod_pass` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `pass` VARCHAR(15) COLLATE latin1_swedish_ci NOT NULL,
  `cod_us` INTEGER(11) NOT NULL,
  PRIMARY KEY USING BTREE (`cod_pass`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=1 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `users` table : 
#

CREATE TABLE `users` (
  `id` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(32) COLLATE latin1_swedish_ci NOT NULL,
  `lastname` VARCHAR(32) COLLATE latin1_swedish_ci NOT NULL,
  `username` VARCHAR(32) COLLATE latin1_swedish_ci NOT NULL,
  `password` VARCHAR(32) COLLATE latin1_swedish_ci NOT NULL,
  `modified` TIMESTAMP NOT NULL ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY USING BTREE (`id`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=54 AVG_ROW_LENGTH=8192 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `usuario` table : 
#

CREATE TABLE `usuario` (
  `cod_us` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `nombre_us` VARCHAR(25) COLLATE latin1_swedish_ci NOT NULL,
  `cod_aso` INTEGER(11) NOT NULL,
  PRIMARY KEY USING BTREE (`cod_us`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=3 AVG_ROW_LENGTH=8192 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Structure for the `voluntariado` table : 
#

CREATE TABLE `voluntariado` (
  `cod_vo` INTEGER(11) NOT NULL AUTO_INCREMENT,
  `nombre_vo` VARCHAR(60) COLLATE latin1_swedish_ci DEFAULT NULL,
  `apellido_vo` VARCHAR(60) COLLATE latin1_swedish_ci DEFAULT NULL,
  `fecha_na_vo` DATE DEFAULT NULL,
  `edad_vo` VARCHAR(5) COLLATE latin1_swedish_ci DEFAULT NULL,
  `genero_vo` VARCHAR(15) COLLATE latin1_swedish_ci DEFAULT NULL,
  `telefono_vo` VARCHAR(10) COLLATE latin1_swedish_ci DEFAULT NULL,
  `direccion_vo` VARCHAR(50) COLLATE latin1_swedish_ci DEFAULT NULL,
  `departamento_vo` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `cod_aso` INTEGER(11) NOT NULL,
  `email_vo` VARCHAR(45) COLLATE latin1_swedish_ci NOT NULL,
  `password_vo` VARCHAR(20) COLLATE latin1_swedish_ci NOT NULL,
  `activo_v` VARCHAR(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY USING BTREE (`cod_vo`) COMMENT ''
)ENGINE=InnoDB
AUTO_INCREMENT=18 AVG_ROW_LENGTH=2730 CHARACTER SET 'latin1' COLLATE 'latin1_swedish_ci'
COMMENT=''
;

#
# Data for the `doctor` table  (LIMIT -494,500)
#

INSERT INTO `doctor` (`cod_doc`, `nombre_doc`, `apellido_doc`, `JVPO`, `genero_doc`, `fecha_na_doc`, `password_doc`, `telefono_doc`, `direccion_doc`, `departamento_doc`, `activo`, `permiso`, `cod_as`) VALUES

  (2,'DOCTOR01','HERNANDEZ','789514524','M','0000-00-00','destiny','79263016','La libertad, el salvador','san salvador',NULL,NULL,2),
  (5,'DAMGEL','KRAUTZ','8718787781','Masculino','2013-11-11','destiny','79263016','La libertad, el salvador','La Libertad',NULL,NULL,0),
  (6,'Jose Manuel','Guillen Ramirez','132002','M','0000-00-00','destiny','79263016','La libertad, el salvador','san salvador',NULL,NULL,1),
  (8,'angel','leonardo','00005','F','2013-11-20','destiny','79263016','La libertad, el salvador','La Libertad',NULL,NULL,0),
  (9,'LEONARDO ANGEL','KRAUTZER','15454584','M','2013-11-16','destiny','78981715','La libertad, el salvador','Chalatenango',NULL,NULL,0);
COMMIT;

#
# Data for the `users` table  (LIMIT -497,500)
#

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `modified`) VALUES

  (52,'angel','leonardo','21','destiny','2013-10-27 21:06:15'),
  (53,'angel','leonardo','21','destiny','2013-10-27 21:14:53');
COMMIT;

#
# Data for the `usuario` table  (LIMIT -497,500)
#

INSERT INTO `usuario` (`cod_us`, `nombre_us`, `cod_aso`) VALUES

  (1,'guillen',1),
  (2,'damgel',2);
COMMIT;

#
# Data for the `voluntariado` table  (LIMIT -493,500)
#

INSERT INTO `voluntariado` (`cod_vo`, `nombre_vo`, `apellido_vo`, `fecha_na_vo`, `edad_vo`, `genero_vo`, `telefono_vo`, `direccion_vo`, `departamento_vo`, `cod_aso`, `email_vo`, `password_vo`, `activo_v`) VALUES

  (9,'Jose','Guillen','2013-10-15','21','','79263016','','san miguel',1,'deakill@hotmail.com','destiny',NULL),
  (13,'Karla Lisseth','Varela','1992-10-10','21','','23319047','','san vicente',1,'kari@hotmail.com','destiny',NULL),
  (14,'JD','SALLINGER','2013-11-20','21','','79263016','','la paz',1,'jdamgel@hotmail.com','',NULL),
  (15,'angel','leonardo','0000-00-00','21','','79263016','','san salvador',1,'jangel@hotmail.com','',NULL),
  (16,'','','0000-00-00','','','','','',1,'','',NULL),
  (17,'','','0000-00-00','','','','','',1,'','',NULL);
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;