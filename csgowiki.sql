-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 05 feb 2021 om 13:35
-- Serverversie: 5.7.26
-- PHP-versie: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiki-info`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `csgowiki`
--

DROP TABLE IF EXISTS `csgowiki`;
CREATE TABLE IF NOT EXISTS `csgowiki` (
  `name` varchar(100) NOT NULL,
  `info` varchar(65000) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `csgowiki`
--

INSERT INTO `csgowiki` (`name`, `info`) VALUES
('pistols', 'kleine bang'),
('knifes', 'steek'),
('submachineguns', 'schiet snel bang bang'),
('rifles', 'schiet raak'),
('heavy', 'BOEM BANG PANG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
