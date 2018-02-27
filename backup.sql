-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: 192.168.1.61    Database: granPoder
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

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
-- Table structure for table `Archivos`
--
CREATE DATABASE granPoder;
USE granPoder;


DROP TABLE IF EXISTS `Archivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Archivos` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Archivos`
--

LOCK TABLES `Archivos` WRITE;
/*!40000 ALTER TABLE `Archivos` DISABLE KEYS */;
INSERT INTO `Archivos` VALUES (1,'Boletin 2016','Archivos/Boletin_2016.pdf'),(2,'Solicitud de Insignias','Archivos/SolicitudInsignias.pdf');
/*!40000 ALTER TABLE `Archivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Articulos`
--

DROP TABLE IF EXISTS `Articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Articulos` (
  `CodArticulo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) DEFAULT NULL,
  `Subtitulo` varchar(100) DEFAULT NULL,
  `Cuerpo` text,
  `Imagen` varchar(100) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `CodUsuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`CodArticulo`),
  KEY `CodUsuario` (`CodUsuario`),
  CONSTRAINT `Articulos_ibfk_1` FOREIGN KEY (`CodUsuario`) REFERENCES `Usuarios` (`CodUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Articulos`
--

LOCK TABLES `Articulos` WRITE;
/*!40000 ALTER TABLE `Articulos` DISABLE KEYS */;
INSERT INTO `Articulos` VALUES (7,'Whatsapp de la Hermandad','Nuestra Hermandad ahora tiene Whatsapp',' A partir de este momento se pone al servicio de todos los hermanos y hermanas este nÃºmero de WhatsApp para informar de todas las actividades, eventos, cultos y distintas tareas que realiza esta nuestra Hermandad.  Si quieres estar en contacto con nosotros envÃ­anos un WhatsApp a nuestro nÃºmero, 688 25 62 03, con tu nombre y apellidos. AdemÃ¡s de recibir informaciÃ³n puedes consultarnos cualquier duda que tengas. ','ImgArt/wart.jpg','2018-02-27',7),(8,'EVANGELIO DEL DIA.','Lectura del santo evangelio segÃºn san Mateo (6,1-6.16-18):','EN aquel tiempo, dijo JesÃºs a sus discÃ­pulos: Â«Cuidad de no practicar vuestra justicia delante de los hombres para ser vistos por ellos; de lo contrario no tenÃ©is recompensa de vuestro Padre celestial.  Por tanto, cuando hagas limosna, no mandes tocar la trompeta ante ti, como hacen los hipÃ³critas en las sinagogas y por las calles para ser honrados por la gente; en verdad os digo que ya han recibido su recompensa. TÃº, en cambio, cuando hagas limosna, que no sepa tu mano izquierda lo que hace tu derecha; asÃ­ tu limosna quedarÃ¡ en secreto y tu Padre, que ve en lo secreto, te recompensarÃ¡.  Cuando orÃ©is, no seÃ¡is como los hipÃ³critas, a quienes les gusta orar de pie en las sinagogas y en las esquinas de las plazas, para que los vean los hombres. En verdad os digo que ya han recibido su recompensa.  TÃº, en cambio, cuando ores, entra en tu cuarto, cierra la puerta y ora a tu Padre, que estÃ¡ en lo secreto, y tu Padre, que ve en lo secreto, te lo recompensarÃ¡.  Cuando ayunÃ©is, no pongÃ¡is cara triste, como los hipÃ³critas que desfiguran sus rostros para hacer ver a los hombres que ayunan. En verdad os digo que ya han recibido su paga.  TÃº, en cambio, cuando ayunes, perfÃºmate la cabeza y lÃ¡vate la cara, para que tu ayuno lo note, no los hombres, sino tu Padre, que estÃ¡ en lo escondido; y tu Padre, que ve en lo escondido, te recompensarÃ¡Â».','ImgArt/defecto.png','2018-02-16',7);
/*!40000 ALTER TABLE `Articulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Bienes`
--

DROP TABLE IF EXISTS `Bienes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bienes` (
  `CodBien` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Descripcion` text,
  `Fecha` date DEFAULT NULL,
  `Material` varchar(100) DEFAULT NULL,
  `Autor` varchar(255) DEFAULT NULL,
  `Imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CodBien`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bienes`
--

LOCK TABLES `Bienes` WRITE;
/*!40000 ALTER TABLE `Bienes` DISABLE KEYS */;
INSERT INTO `Bienes` VALUES (5,'Libro de Reglas','Libro de Reglas de Nuestra Hermandad.','1967-01-05','Terciopelo y Plata','AnÃ³nimo','ImgBien/libro_reglas.jpg'),(6,'Ropas de Hebrea','Ropas de Hebrea de Nuestra Titular MÂª Santisima de los Dolores.','1989-10-02','Terciopelo azul','Anonimo','ImgBien/ropas_hebrea.jpg');
/*!40000 ALTER TABLE `Bienes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Eventos`
--

DROP TABLE IF EXISTS `Eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Eventos` (
  `CodEvento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) DEFAULT NULL,
  `Subtitulo` varchar(100) DEFAULT NULL,
  `Cuerpo` text,
  `Imagen` varchar(100) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `CodUsuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`CodEvento`),
  KEY `CodUsuario` (`CodUsuario`),
  CONSTRAINT `Eventos_ibfk_1` FOREIGN KEY (`CodUsuario`) REFERENCES `Usuarios` (`CodUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Eventos`
--

LOCK TABLES `Eventos` WRITE;
/*!40000 ALTER TABLE `Eventos` DISABLE KEYS */;
INSERT INTO `Eventos` VALUES (7,'Santo Triduo','SANTO TRIDUO EN HONOR A NUESTRO PADRE JESÃšS DEL GRAN PODER EN MONTELLANO, EN LA IGLESIA DE SAN JOSï','Recordamos a todos los hermanos, fieles y devotos, que este viernes a las 19:30 horas, en la Parroquia del SeÃ±or San JosÃ©, darÃ¡ comienzo el tercer y Ãºltimo dÃ­a del Santo Triduo en honor a Nuestro Padre JesÃºs del Gran Poder.  A las 19:30 horas darÃ¡ comienzo el rezo del Santo Rosario, a las 20:00 horas se celebrarÃ¡ Santa Misa y para finalizar se realizarÃ¡ procesiÃ³n claustral y bendiciÃ³n de S.D.M.','ImgEvent/triduo.jpg','2018-02-23',7),(8,'Cabildo General de Salida','Este viernes, 2 de marzo, se celebrarÃ¡ en nuestra casa Hermandad el Cabildo General de Salida a las','Este viernes, 2 de marzo, se celebrarÃ¡ en nuestra casa Hermandad el Cabildo General de Salida a las 20:00 h. en primera convocatoria y a las 20:30 h. en segunda convocatoria.  Los puntos del orden dÃ­a, son los siguientes:  1. Lectura y aprobaciÃ³n, si procede, del acta del Cabildo General anterior.  2. Informe de la Junta de Gobierno sobre las providencias adoptadas en relaciÃ³n con la prÃ³xima EstaciÃ³n de Penitencia.  3. Ruegos y preguntas.  Se recuerda la importancia de la asistencia a todos los hermanos y hermanas mayores de 18 aÃ±os. Un saludo en el SeÃ±or.','ImgEvent/cabildo_gen.jpg','2018-03-02',7);
/*!40000 ALTER TABLE `Eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Hermanos`
--

DROP TABLE IF EXISTS `Hermanos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Hermanos` (
  `CodHermano` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Apellidos` varchar(255) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `DNI` varchar(9) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Ciudad` varchar(100) DEFAULT NULL,
  `Provincia` varchar(100) DEFAULT NULL,
  `Correo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CodHermano`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Hermanos`
--

LOCK TABLES `Hermanos` WRITE;
/*!40000 ALTER TABLE `Hermanos` DISABLE KEYS */;
INSERT INTO `Hermanos` VALUES (1,'Ceballos Rodriguez','Andres','52272448A','1997-05-23','Calle Lopera 1','Montellano','Sevilla','acrmontellano@gmail.com'),(2,'Cabello','Felipe','84512517P','1997-02-11','Calle Falsa 123','Pilas','Sevilla','felipe@iestriana.edu'),(4,'Perez Perez','Pepe','12345678A','1997-07-17','C/ Falsa 123','Montellano','Sevilla','pepeperez@iestriana.es'),(5,'Prueba','Prueba','11111111A','1992-02-23','C/ Falsa 122','Montellano','Sevilla','prueba@prueba.com'),(6,'Admin Admin','Admin','00000000A','2018-02-01','C/ Falsa 123','Montellano','Sevilla','admin@admin.com');
/*!40000 ALTER TABLE `Hermanos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuarios` (
  `CodUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `DNI` varchar(9) DEFAULT NULL,
  `CodHermano` int(10) unsigned NOT NULL,
  `Pass` varchar(64) DEFAULT NULL,
  `Correo` varchar(200) DEFAULT NULL,
  `Rol` varchar(50) NOT NULL,
  `Nombre` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`CodUsuario`),
  KEY `CodHermano` (`CodHermano`),
  CONSTRAINT `Usuarios_ibfk_1` FOREIGN KEY (`CodHermano`) REFERENCES `Hermanos` (`CodHermano`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuarios`
--

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;
INSERT INTO `Usuarios` VALUES (4,'11111111A',5,'c893bad68927b457dbed39460e6afd62','prueba@prueba.com','User','Prueba'),(5,'52272448A',1,'25f9e794323b453885f5181f1b624d0b','acrmontellano@gmail.com','User','Andres'),(7,'00000000A',6,'25f9e794323b453885f5181f1b624d0b','admin@admin.com','Admin','Admin');
/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-27 13:37:15
