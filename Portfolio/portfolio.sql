-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 okt 2021 om 23:45
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lang`
--

CREATE TABLE `lang` (
  `id` int(10) NOT NULL,
  `lang_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `page_link` varchar(225) NOT NULL,
  `github_link` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projects`
--

INSERT INTO `projects` (`id`, `name`, `image`, `description`, `page_link`, `github_link`) VALUES
(7, 'Interaction Design', 'Fotos/InteractionDesign.jfif', 'With HTML, CSS, Bootstrap and JavaScript\r\nwe made our own project on what we thought was a problem\r\nand we designd our solution. Mine is a homework page where\r\nyou can win prices.', 'InteractionDesign.php', ''),
(8, 'Dice Game', 'Fotos/Dice.jpg', 'Dice are rolled and the person has to guess whether it will be higher or lower.\r\nIf he gets it right he gets points.\r\nIf he\'s wrong, he loses them points.', '', 'https://github.com/ROCMondriaanTIN/sd20-csharp-dice-assignment-mbolle'),
(9, 'My Portfolio', 'Fotos/MyPortfolio.png', 'If you are programming you should have your own personal portfolio.\r\nWe have made this using HTML, CSS and Bootstrap.\r\nwe are now also adding JavaScript step by step.\r\nThis is my personal page', 'Homepage.php', ''),
(10, 'My Calculator', 'Fotos/Calculator.jpg', 'With javascript we learned to make a digital calculator', 'Calc.html', ''),
(11, 'My Flowerpage', 'Fotos/Flowers.jpg', 'With Bootstrap HTML and CSS we made a flower page.', '', 'https://github.com/ROCMondriaanTIN/sd-portfolio-bootstrap-mbolle'),
(12, 'BKS', 'Fotos/BKS.jpg', 'A nice game to play that was created with JavaScript.', 'BKS.html', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
