-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Kwi 2022, 18:05
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
-- Struktura tabeli dla tabeli `settime`
--

CREATE TABLE `settime` (
  `settime` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `settime`
--

INSERT INTO `settime` (`settime`) VALUES
(0);

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
-- Struktura tabeli dla tabeli `stopdate`
--

CREATE TABLE `stopdate` (
  `time` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `stopdate`
--

INSERT INTO `stopdate` (`time`) VALUES
(0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
