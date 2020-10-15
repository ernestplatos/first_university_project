-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Maj 2020, 22:23
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `handlevogn`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `handlevogn`
--

CREATE TABLE `handlevogn` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `cena` float NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `handlevogn`
--

INSERT INTO `handlevogn` (`id`, `nazwa`, `cena`, `foto`) VALUES
(1, 'Samsung Galaxy M21', 999, '1.jpg'),
(2, 'Huawei Y6p', 599, '2.jpg'),
(3, 'Xiaomi Mi Note 10 Lite', 1699, '3.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `handlevogn`
--
ALTER TABLE `handlevogn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `handlevogn`
--
ALTER TABLE `handlevogn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
