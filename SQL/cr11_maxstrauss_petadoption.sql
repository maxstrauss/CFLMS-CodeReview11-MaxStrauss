-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Jul 2020 um 16:53
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_maxstrauss_petadoption`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `ZIP` varchar(10) DEFAULT NULL,
  `size` enum('little','big','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `pet`
--

INSERT INTO `pet` (`id`, `name`, `photo`, `age`, `description`, `hobbies`, `address`, `city`, `ZIP`, `size`) VALUES
(1, 'Robbie', 'https://i1.wp.com/www.dailycal.org/assets/uploads/2019/10/animals_wikimedia_cc-900x580.jpg', 13, 'A very friendly seal', 'diving', 'Sealstreet 3', 'Vienna', '1180', 'little'),
(14, 'Fuchsi', 'https://thefunnybeaver.com/wp-content/uploads/2018/03/animal-fox-564x500.jpg', 2, 'very friendly to kids', 'haunting', 'Waldstraße 34', 'Graz', '2321', 'little'),
(15, 'Fauli', 'https://ichef.bbci.co.uk/images/ic/1040x1040/p03t268b.jpg', 5, 'Fauli is very lazy', 'sleeping', 'Straße 232', 'Faulhausen', '6654', 'little'),
(16, 'Peter', 'https://www.gannett-cdn.com/presto/2020/03/23/USAT/f0623acd-fafa-4177-8035-f32d213a30e2-AFP_1153955091.jpg?width=2560', 8, 'Perfekt for People with a small apartement', 'eating', 'test', 'Teststreet 5443', '323', 'big'),
(17, 'Franz', 'https://images.pexels.com/photos/148182/pexels-photo-148182.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 13, 'a very cool animal', 'running', 'street 15', 'Vienna', '345353', 'little'),
(18, 'Leo', 'https://pbs.twimg.com/media/D9dNP_xX4AAHKVQ.jpg', 36, 'Can be a bit dangerouse', 'killing', 'Irgendeine street 23', 'St. Pölten', '323', 'big'),
(19, 'Jan', 'https://i.pinimg.com/736x/27/9f/7a/279f7a0cb0a0f5a2b23c249bee3082ce.jpg', 99, 'Very dangerouse!!!!!!', 'playing', 'street 15', 'Vienna', '6000', 'little'),
(20, 'Susi', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQA4syBI1s9SpBC32GahFRVwIdsLV40gk4e1g&usqp=CAU', 7, 'description description test', 'jumping', 'weiß nicht strasse 2315', 'Vienna', '3434', 'little');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `status` enum('user','admin') DEFAULT 'user',
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `status`, `userEmail`, `userPass`) VALUES
(8, 'test terst', 'user', 'test@mail.at', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(9, 'admin test', 'admin', 'admin@m.at', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),
(10, 'Test Account', 'user', 'test@test.test', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
