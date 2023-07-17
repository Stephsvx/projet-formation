-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour labomoto
DROP DATABASE IF EXISTS `labomoto`;
CREATE DATABASE IF NOT EXISTS `labomoto` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `labomoto`;

-- Listage de la structure de table labomoto. produits
DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `prix` float NOT NULL DEFAULT '0',
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Listage des données de la table labomoto.produits : ~6 rows (environ)
INSERT INTO `produits` (`id`, `photo`, `prix`, `nom`) VALUES
	(1, 'casque1.jpg', 71.9, 'CASQUE DEXTER PROTON NEGAN - NOIR / GRIS'),
	(2, 'casque2.jpg', 76.4, 'CASQUE DEXTER PROTON SANTITA - NOIR'),
	(3, 'casque3.jpg', 72.17, 'CASQUE DEXTER FUSION - SKULLIE - NOIR / ROSE'),
	(4, 'casque4.jpg', 102.68, 'CASQUE SCORPION EXO EXO-391 - DREAM - BLANC'),
	(5, 'casque5.jpg', 72.17, 'CASQUE DEXTER PROTON AIRCRAFT - MARRON'),
	(6, 'casque6.jpg', 76.41, 'CASQUE DEXTER FUSION GANGSTER - NOIR');

-- Listage de la structure de table labomoto. produits2
DROP TABLE IF EXISTS `produits2`;
CREATE TABLE IF NOT EXISTS `produits2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `prix` float NOT NULL DEFAULT '0',
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Listage des données de la table labomoto.produits2 : ~6 rows (environ)
INSERT INTO `produits2` (`id`, `photo`, `prix`, `nom`) VALUES
	(1, 'gant1.jpg', 29.9, 'GANTS BERING LADY KX ONE - NOIR'),
	(2, 'gant2.jpg', 59, 'GANTS BERING STEEL R - NOIR / ROUGE'),
	(3, 'gant3.jpg', 23.72, 'GANTS DXR SPLINTER - NOIR'),
	(4, 'gant4.jpg', 49, 'GANTS REV IT KALAHARI - NOIR / GRIS'),
	(5, 'gant5.jpg', 29.9, 'GANTS HELSTONS CONDOR - NOIR'),
	(6, 'gant6.jpg', 29.9, 'GANTS DXR TRIPTIK WATERPROOF - MARRON');

-- Listage de la structure de table labomoto. produits3
DROP TABLE IF EXISTS `produits3`;
CREATE TABLE IF NOT EXISTS `produits3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Listage des données de la table labomoto.produits3 : ~0 rows (environ)
INSERT INTO `produits3` (`id`, `photo`, `prix`, `nom`) VALUES
	(1, 'blouson1.jpg', 199.9, 'BLOUSON HELSTONS POWER - NOIR'),
	(2, 'blouson2.jpg', 100.72, 'VESTE DXR ROADTRIP - NOIR / GRIS'),
	(3, 'blouson3.jpg', 299.99, 'BLOUSON IXON VORTEX 2 - NOIR / BLANC'),
	(4, 'blouson4.jpg', 72.72, 'VESTE DXR DANAKIL - NOIR'),
	(5, 'blouson5.jpg', 169, 'BLOUSON BERING LADY VIP-R - NOIR'),
	(6, 'blouson6.jpg', 90.9, 'BLOUSON DXR 3-EN-1 R\'STROKE - JAUNE / BEIGE');

-- Listage de la structure de table labomoto. produits4
DROP TABLE IF EXISTS `produits4`;
CREATE TABLE IF NOT EXISTS `produits4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `prix` float NOT NULL DEFAULT '0',
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Listage des données de la table labomoto.produits4 : ~0 rows (environ)
INSERT INTO `produits4` (`id`, `photo`, `prix`, `nom`) VALUES
	(1, 'pantalon1.jpg', 97.4, 'JEAN DXR BOOST CE - GRIS'),
	(2, 'pantalon2.jpg', 67.12, 'JEAN DXR KAPTOR WAX - SLIM - NOIR'),
	(3, 'pantalon3.jpg', 104.89, 'JEAN HARISSON BONNIE - REGULAR - BLEU'),
	(4, 'pantalon4.jpg', 379.99, 'JEAN HARISSON BONNIE - REGULAR - BLEU'),
	(5, 'pantalon5.jpg', 71.92, 'JEAN DXR KAPTOR LADY - SLIM - GRIS'),
	(6, 'pantalon6.jpg', 128.9, 'JEAN REV IT HOUSTON - TAPERED - BLEU');

-- Listage de la structure de table labomoto. utilisateurs
DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `motdepasse` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Listage des données de la table labomoto.utilisateurs : ~5 rows (environ)
INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `motdepasse`) VALUES
	(1, 'savreux', 'stephane', 'tetef80100@gmail.com', '$2y$10$IKFCc1PlNBfuIz.Zeka86.45Lt9hdajZYb./hzd91P2wYi80dsAD6');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
