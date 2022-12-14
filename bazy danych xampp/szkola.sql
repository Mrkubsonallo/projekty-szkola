-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Gru 2022, 08:19
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szkola`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasa`
--

CREATE TABLE `klasa` (
  `id` int(11) NOT NULL DEFAULT 0,
  `nazwa` varchar(2) CHARACTER SET utf8 NOT NULL,
  `il_uczniow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klasa`
--

INSERT INTO `klasa` (`id`, `nazwa`, `il_uczniow`) VALUES
(1, '1a', 29),
(2, '1b', 30),
(3, '2a', 25),
(4, '2b', 29);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczen`
--

CREATE TABLE `uczen` (
  `id` int(2) NOT NULL,
  `nazwisko` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `imie` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `miejsce_urodzenia` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `id_klasy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uczen`
--

INSERT INTO `uczen` (`id`, `nazwisko`, `imie`, `miejsce_urodzenia`, `id_klasy`) VALUES
(1, 'Kowalski', 'Jan', 'Wrocław', 4),
(2, 'Kluska', 'Zenon', 'Wrocław', 1),
(3, 'Zawada', 'Zbigniew', 'Oleśnica', 1),
(4, 'Cap', 'Antoni', 'Trzebnica', 2),
(5, 'Kowalski', 'Sebastian', 'Wrocław', 3),
(6, 'Dawid', 'Andrzej', 'Trzebnica', 2),
(7, 'Kaczmarek', 'Marta', 'Oleśnica', 4),
(8, 'Kowalski', 'Jan', 'Wrocław', 4),
(9, 'Polak', 'Maria', 'Trzebnica', 2),
(10, 'Michalak', 'Paweł', 'Oleśnica', 3),
(11, 'Góral', 'Łukasz', 'Trzebnica', 4),
(12, 'Nowak', 'Jan', 'Oleśnica', 4),
(13, 'Kowalski', 'Łukasz', 'Wrocław', 1),
(14, 'Markiewicz', 'Damian', 'Wrocław', 3),
(15, 'Baryła', 'Zenon', 'Oława', 2),
(16, 'Gota', 'Anna', 'Oleśnica', 4),
(17, 'Małek', 'Justyna', 'Wrocław', 1),
(18, 'Rysik', 'Magda', 'Oława', 3),
(19, 'Szary', 'Tomasz', 'Trzebnica', 1),
(20, 'Bury', 'Łukasz', 'Oława', 3),
(21, 'Rudy', 'Wojciech', 'Wrocław', 2),
(22, 'Kowalska', 'Janina', 'Oława', 2),
(23, 'Nowak', 'Jan', 'Wrocław', 1),
(24, 'Kowalik', 'Stanisława', 'Oława', 3),
(25, 'Nowakowski', 'Grzegorz', 'Oleśnica', 1),
(26, 'Kwiatkowska', 'Jolanta', 'Oława', 2),
(27, 'Konarski', 'Krzysztof', 'Oława', 3),
(28, 'Ciechanowsk', 'Jakub', 'Wrocław', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wychowawca`
--

CREATE TABLE `wychowawca` (
  `id` int(11) NOT NULL DEFAULT 0,
  `imie` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nazwisko` varchar(30) CHARACTER SET utf8 NOT NULL,
  `id_klasy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wychowawca`
--

INSERT INTO `wychowawca` (`id`, `imie`, `nazwisko`, `id_klasy`) VALUES
(1, 'Jan', 'Bogucki', 1),
(2, 'Michał', 'Więcek', 2),
(3, 'Bożena', 'Michalska', 3),
(4, 'Krystyna', 'Piętkiewicz', 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klasa`
--
ALTER TABLE `klasa`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uczen`
--
ALTER TABLE `uczen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klasy` (`id_klasy`);

--
-- Indeksy dla tabeli `wychowawca`
--
ALTER TABLE `wychowawca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klasy` (`id_klasy`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uczen`
--
ALTER TABLE `uczen`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `uczen`
--
ALTER TABLE `uczen`
  ADD CONSTRAINT `uczen_ibfk_1` FOREIGN KEY (`id_klasy`) REFERENCES `klasa` (`id`);

--
-- Ograniczenia dla tabeli `wychowawca`
--
ALTER TABLE `wychowawca`
  ADD CONSTRAINT `wychowawca_ibfk_1` FOREIGN KEY (`id_klasy`) REFERENCES `klasa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
