-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2021 at 07:38 PM
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
-- Table structure for table `kategorije`
--

DROP TABLE IF EXISTS `kategorije`;
CREATE TABLE IF NOT EXISTS `kategorije` (
  `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`id`, `naziv`) VALUES
(1, 'Sport'),
(2, 'Svet'),
(3, 'Zabava'),
(4, 'Kultura'),
(5, 'Hronika'),
(8, 'Muzika'),
(7, 'Drustvo'),
(6, 'Gejming');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `email`, `lozinka`, `vreme`, `komentar`, `aktivan`, `status`) VALUES
(1, 'Бошко', 'Богојевић', 'bbosko@skola.com', 'bbosko', '2020-12-15 17:16:12', 'Car nad carevima', 1, 'Administrator'),
(2, 'Pera', 'Peric', 'pperic@skola.com', 'pperic', '2020-12-15 17:16:12', NULL, 1, 'Urednik'),
(3, 'Cane', 'Kurbla', 'ckurbla@skola.com', 'ckurbla', '2020-12-15 17:31:20', 'Nije platio clanarinu', 1, 'Korisnik');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

DROP TABLE IF EXISTS `proizvodi`;
CREATE TABLE IF NOT EXISTS `proizvodi` (
  `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naslov` varchar(150) NOT NULL,
  `tekst` text NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autor` int(3) NOT NULL,
  `kategorija` int(3) NOT NULL,
  `obrisan` int(1) NOT NULL DEFAULT '0',
  `izmena` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `cena` int(10) NOT NULL,
  `pogledan` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id`, `naslov`, `tekst`, `vreme`, `autor`, `kategorija`, `obrisan`, `izmena`, `cena`, `pogledan`) VALUES
(1, 'KAKAV ŠAMAR SRBIJI OD SRPSKOG GOLMANA Navijači su se kleli u njega dok je branio za Zvezdu, a sad je PONIZIO', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-12-16 18:43:23', 1, 1, 1, '2020-12-29 17:30:03', 0, 0),
(2, 'NADAM SE DA ĆU DA POSTIGNEM GOL Falćineli je već TRESAO MREŽU Milana i zna recept za Zvezdinu pobedu', 'Contrary bosko to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', '2019-12-15 18:43:23', 2, 2, 0, '2021-01-19 16:00:12', 0, 7),
(3, 'KAKAV ŠAMAR SRBIJI OD SRPSKOG GOLMANA Navijači su se kleli u njega dok je branio za Zvezdu, a sad je PONIZIO', 'Lorem Ipsum bosko is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-12-15 18:43:23', 2, 1, 0, '2021-01-12 19:44:48', 0, 2),
(4, 'NADAM SE DA ĆU DA POSTIGNEM GOL Falćineli je već TRESAO MREŽU Milana i zna recept za Zvezdinu pobedu', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', '2020-12-15 18:43:23', 2, 3, 0, '2020-12-29 16:53:17', 0, 0),
(5, 'Naseg NOVAKA ZAMENILI RAFOM I RODŽEROM ATP nije dopustio Đokovićev', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-12-15 18:43:23', 1, 1, 1, '2020-12-29 19:00:36', 0, 0),
(6, 'NASLOV IZ UPDATE UPITA', 'TEKST IZ UPDATE UPITA', '2020-12-29 18:43:23', 2, 2, 0, '2020-12-29 19:03:19', 0, 0),
(8, 'Poslednja NADAM SE DA ĆU DA POSTIGNEM GOL Falćineli je već TRESAO MREŽU Milana i zna recept za Zvezdinu pobedu', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', '2020-12-15 18:43:23', 2, 3, 0, '2020-12-29 17:39:26', 0, 0),
(9, 'Ovo je naslov iz phpmyadmina', 'Ovo je tekst iz phpmyadmina', '2020-12-29 18:12:25', 1, 4, 0, '2020-12-29 18:15:52', 0, 0),
(10, 'Ovo je naslov iz phpmyadmina sa UPITOM', 'Ovo je tekst iz phpmyadmina sa UPITOM', '2020-12-29 18:15:20', 1, 1, 0, NULL, 0, 0),
(11, 'Naslov sa PHP stranice za INSERT', 'Tekst sa PHP stranice za INSERT i ovde ide neki Lorem Ipsum', '2020-12-29 18:48:08', 1, 6, 0, NULL, 0, 0),
(12, 'Ovo je Izmenjen naslov sa statisstikom', 'Ovo je IZMENJEN naslov sa statisstikom. I ovde ide neki novi Lorem Ipsum', '2020-12-29 18:51:05', 5, 6, 0, '2021-01-19 19:19:46', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `statistika`
--

DROP TABLE IF EXISTS `statistika`;
CREATE TABLE IF NOT EXISTS `statistika` (
  `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ipadresa` varchar(50) NOT NULL,
  `stranica` varchar(50) NOT NULL,
  `parametri` varchar(50) DEFAULT NULL,
  `vreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tekst` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statistika`
--

INSERT INTO `statistika` (`id`, `ipadresa`, `stranica`, `parametri`, `vreme`, `tekst`) VALUES
(25, '::1', '/aphp/g2/p1/index.php', '', '2020-12-29 19:22:45', ''),
(26, '::1', '/aphp/g2/p1/index.php', 'id=12', '2020-12-29 19:22:48', ''),
(27, '::1', '/aphp/g2/p1/index.php', 'autor=1', '2020-12-29 19:22:50', ''),
(28, '::1', '/aphp/g2/p1/index.php', 'id=7', '2020-12-29 19:22:51', ''),
(29, '::1', '/aphp/g2/p1/index.php', 'autor=1', '2020-12-29 19:22:52', ''),
(30, '::1', '/aphp/g2/p1/index.php', 'kategorija=1', '2020-12-29 19:22:54', ''),
(31, '::1', '/aphp/g2/p1/index.php', 'kategorija=3', '2020-12-29 19:22:54', ''),
(32, '::1', '/aphp/g2/p1/index.php', 'kategorija=4', '2020-12-29 19:22:55', ''),
(33, '::1', '/aphp/g2/p1/index.php', 'kategorija=5', '2020-12-29 19:22:55', ''),
(34, '::1', '/aphp/g2/p1/index.php', 'kategorija=3', '2020-12-29 19:22:56', ''),
(35, '::1', '/aphp/g2/p1/index.php', 'kategorija=6', '2020-12-29 19:22:57', ''),
(36, '::1', '/aphp/g2/p1/index.php', 'id=11', '2020-12-29 19:22:58', ''),
(37, '::1', '/aphp/g2/p1/index4.php', '', '2020-12-29 19:29:05', 'Uspesno obrisana vest 7'),
(38, '::1', '/aphp/g2/p1/index.php', '', '2020-12-29 19:29:40', ''),
(39, '::1', '/aphp/g2/p1/index.php', '', '2020-12-29 19:32:30', ''),
(40, '::1', '/aphp/g2/p1/index5.php', '', '2020-12-29 19:32:36', 'Uspesan pokusaj brisanja: 12'),
(41, '::1', '/aphp/g2/p1/index.php', '', '2020-12-29 19:32:41', ''),
(42, '::1', '/aphp/g2/p1/index.php', '', '2020-12-29 19:33:28', '');

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
  `autor` int(3) NOT NULL,
  `kategorija` int(3) NOT NULL,
  `obrisan` int(1) NOT NULL DEFAULT '0',
  `izmena` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `cena` int(10) NOT NULL,
  `pogledan` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `tekst`, `vreme`, `autor`, `kategorija`, `obrisan`, `izmena`, `cena`, `pogledan`) VALUES
(1, 'KAKAV ŠAMAR SRBIJI OD SRPSKOG GOLMANA Navijači su se kleli u njega dok je branio za Zvezdu, a sad je PONIZIO', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-12-16 18:43:23', 1, 1, 1, '2020-12-29 17:30:03', 0, 0),
(2, 'NADAM SE DA ĆU DA POSTIGNEM GOL Falćineli je već TRESAO MREŽU Milana i zna recept za Zvezdinu pobedu', 'Contrary bosko to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', '2019-12-15 18:43:23', 2, 2, 0, '2020-12-29 17:51:52', 0, 0),
(3, 'KAKAV ŠAMAR SRBIJI OD SRPSKOG GOLMANA Navijači su se kleli u njega dok je branio za Zvezdu, a sad je PONIZIO', 'Lorem Ipsum bosko is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-12-15 18:43:23', 2, 1, 0, '2020-12-29 17:51:52', 0, 0),
(4, 'NADAM SE DA ĆU DA POSTIGNEM GOL Falćineli je već TRESAO MREŽU Milana i zna recept za Zvezdinu pobedu', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', '2020-12-15 18:43:23', 2, 3, 0, '2020-12-29 16:53:17', 0, 0),
(5, 'Naseg NOVAKA ZAMENILI RAFOM I RODŽEROM ATP nije dopustio Đokovićev', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-12-15 18:43:23', 1, 1, 1, '2020-12-29 19:00:36', 0, 0),
(6, 'NASLOV IZ UPDATE UPITA', 'TEKST IZ UPDATE UPITA', '2020-12-29 18:43:23', 2, 2, 0, '2020-12-29 19:03:19', 0, 0),
(8, 'Poslednja NADAM SE DA ĆU DA POSTIGNEM GOL Falćineli je već TRESAO MREŽU Milana i zna recept za Zvezdinu pobedu', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32', '2020-12-15 18:43:23', 2, 3, 0, '2020-12-29 17:39:26', 0, 0),
(9, 'Ovo je naslov iz phpmyadmina', 'Ovo je tekst iz phpmyadmina', '2020-12-29 18:12:25', 1, 4, 0, '2020-12-29 18:15:52', 0, 0),
(10, 'Ovo je naslov iz phpmyadmina sa UPITOM', 'Ovo je tekst iz phpmyadmina sa UPITOM', '2020-12-29 18:15:20', 1, 1, 0, NULL, 0, 0),
(11, 'Naslov sa PHP stranice za INSERT', 'Tekst sa PHP stranice za INSERT i ovde ide neki Lorem Ipsum', '2020-12-29 18:48:08', 1, 6, 0, NULL, 0, 0),
(12, 'Ovo je Izmenjen naslov sa statisstikom', 'Ovo je IZMENJEN naslov sa statisstikom. I ovde ide neki novi Lorem Ipsum', '2020-12-29 18:51:05', 1, 6, 0, '2020-12-29 19:33:25', 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwproizvodi`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vwproizvodi`;
CREATE TABLE IF NOT EXISTS `vwproizvodi` (
`id` int(3) unsigned
,`naslov` varchar(150)
,`tekst` text
,`vreme` timestamp
,`autor` int(3)
,`kategorija` int(3)
,`obrisan` int(1)
,`izmena` timestamp
,`cena` int(10)
,`pogledan` int(5)
,`naziv` varchar(50)
,`ime` varchar(20)
,`prezime` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `vwproizvodi`
--
DROP TABLE IF EXISTS `vwproizvodi`;

DROP VIEW IF EXISTS `vwproizvodi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwproizvodi`  AS  select `proizvodi`.`id` AS `id`,`proizvodi`.`naslov` AS `naslov`,`proizvodi`.`tekst` AS `tekst`,`proizvodi`.`vreme` AS `vreme`,`proizvodi`.`autor` AS `autor`,`proizvodi`.`kategorija` AS `kategorija`,`proizvodi`.`obrisan` AS `obrisan`,`proizvodi`.`izmena` AS `izmena`,`proizvodi`.`cena` AS `cena`,`proizvodi`.`pogledan` AS `pogledan`,`kategorije`.`naziv` AS `naziv`,`korisnici`.`ime` AS `ime`,`korisnici`.`prezime` AS `prezime` from ((`proizvodi` join `kategorije` on((`proizvodi`.`kategorija` = `kategorije`.`id`))) join `korisnici` on((`proizvodi`.`autor` = `korisnici`.`id`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
