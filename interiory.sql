-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Värd: localhost:8889
-- Tid vid skapande: 09 dec 2014 kl 13:33
-- Serverversion: 5.5.34
-- PHP-version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `interiory`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `article`
--

CREATE TABLE `article` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumpning av Data i tabell `article`
--

INSERT INTO `article` (`id`, `type`, `name`, `brand`, `description`, `price`) VALUES
(5, 'Chair', 'Myran', 'Arne Jacobsen', '50''s classic from Denmark', 6798),
(6, 'Table', 'Tray Table Coffee', 'Hay', 'Available in different colors and sizes.', 1999),
(7, 'Sideboard', 'Componibili', 'Kartell', 'Plastic fantastic sideboard. Futuristic and edgy!', 1180),
(8, 'Lamp', 'Conia lampa koppar', 'Vita', 'Danish design at it''s best.', 849),
(9, 'Storage', 'Stringhylla pocket vit', 'String', 'This epic piece needs no description!', 975),
(10, 'Carpet', 'Gunnel matta svart stor', 'Brita Sweden', 'Carpet measuring 150 x 200 cm in a black and white graphic design.', 2989),
(11, 'Decoration', 'Wire korg rose', 'Ferm Living', 'Perfect for storing blankets!', 499);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
