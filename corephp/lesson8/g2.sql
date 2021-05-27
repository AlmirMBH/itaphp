-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2020 at 07:48 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g2`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

DROP TABLE IF EXISTS `korisnici`;
CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `lozinka` varchar(256) NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar` text,
  `aktivan` int(1) NOT NULL DEFAULT '1',
  `status` enum('Administrator','Urednik','Korisnik') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `email`, `lozinka`, `vreme`, `komentar`, `aktivan`, `status`) VALUES
(1, 'Бошко', 'Богојевић', 'bbosko@skola.com', 'bbosko', '2020-12-15 17:16:12', 'Car nad carevima', 1, 'Administrator'),
(2, 'Pera', 'Peric', 'pperic@skola.com', 'pperic', '2020-12-15 17:16:12', NULL, 1, 'Urednik'),
(3, 'Cane', 'Kurbla', 'ckurbla@skola.com', 'ckurbla', '2020-12-15 17:31:20', 'Nije platio clanarinu', 0, 'Korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

DROP TABLE IF EXISTS `vesti`;
CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naslov` varchar(150) NOT NULL,
  `tekst` text NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autor` varchar(20) NOT NULL,
  `kategorija` varchar(20) NOT NULL,
  `obrisan` int(1) NOT NULL DEFAULT '0',
  `izmena` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `tekst`, `vreme`, `autor`, `kategorija`, `obrisan`, `izmena`) VALUES
(1, 'KAKAV ŠAMAR SRBIJI OD SRPSKOG GOLMANA Navijači su se kleli u njega dok je branio za Zvezdu, a sad je PONIZIO', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-12-15 18:43:23', 'bbosko', 'Sport', 0, NULL),
(2, 'NADAM SE DA ĆU DA POSTIGNEM GOL Falćineli je već TRESAO MREŽU Milana i zna recept za Zvezdinu pobedu', 'Contrary bosko to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', '2020-12-15 18:43:23', 'pperic', 'Svet', 0, '2020-12-15 19:12:03'),
(3, 'KAKAV ŠAMAR SRBIJI OD SRPSKOG GOLMANA Navijači su se kleli u njega dok je branio za Zvezdu, a sad je PONIZIO', 'Lorem Ipsum bosko is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-12-15 18:43:23', 'bbosko', 'Sport', 0, '2020-12-15 19:12:13'),
(4, 'NADAM SE DA ĆU DA POSTIGNEM GOL Falćineli je već TRESAO MREŽU Milana i zna recept za Zvezdinu pobedu', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', '2020-12-15 18:43:23', 'pperic', 'Zabava', 0, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
