-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Kwi 2022, 17:52
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `uthracingteam`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `groups`
--

CREATE TABLE `groups` (
  `current` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `groups`
--

INSERT INTO `groups` (`current`) VALUES
(1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `minutes`
--

CREATE TABLE `minutes` (
  `minutes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `minutes`
--

INSERT INTO `minutes` (`minutes`) VALUES
(60);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `settime`
--

CREATE TABLE `settime` (
  `time` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `settime`
--

INSERT INTO `settime` (`time`) VALUES
(1650818998);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `startstop`
--

CREATE TABLE `startstop` (
  `stopped` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `startstop`
--

INSERT INTO `startstop` (`stopped`) VALUES
(0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statustrackday`
--

CREATE TABLE `statustrackday` (
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `statustrackday`
--

INSERT INTO `statustrackday` (`status`) VALUES
(1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stopdate`
--

CREATE TABLE `stopdate` (
  `time` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `stopdate`
--

INSERT INTO `stopdate` (`time`) VALUES
(1650749102);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin DEFAULT NULL,
  `lastname` text COLLATE utf8_bin DEFAULT NULL,
  `car` text COLLATE utf8_bin DEFAULT NULL,
  `group` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `car`, `group`) VALUES
(1, 'test', 'test', 'test', 1),
(4, 'w', 'w', 'w', 1),
(7, 'd', 'd', 'd', 2),
(8, '3', '3', '3', 3),
(9, '4', '44', '4', 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
