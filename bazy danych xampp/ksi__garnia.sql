-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Gru 2022, 08:13
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
-- Baza danych: `księgarnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE `autorzy` (
  `Id` int(11) NOT NULL,
  `Nazwa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`Id`, `Nazwa`) VALUES
(1, 'Orson Scott Card'),
(2, 'Robin Hobb'),
(3, 'Alex Kava'),
(4, 'Harlan Coben'),
(5, 'Megan Lindholm'),
(6, 'Kathryn Kidd');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzypseudonimy`
--

CREATE TABLE `autorzypseudonimy` (
  `AutorId1` int(11) NOT NULL,
  `AutorId2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `autorzypseudonimy`
--

INSERT INTO `autorzypseudonimy` (`AutorId1`, `AutorId2`) VALUES
(5, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `Id` int(11) NOT NULL,
  `Imię` varchar(45) NOT NULL,
  `Nazwisko` varchar(45) NOT NULL,
  `Ulica` varchar(80) NOT NULL,
  `Nr domu` varchar(5) NOT NULL,
  `Nr mieszkania` varchar(5) DEFAULT NULL,
  `Miasto` varchar(60) NOT NULL,
  `Kod` varchar(6) NOT NULL,
  `Kraj` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`Id`, `Imię`, `Nazwisko`, `Ulica`, `Nr domu`, `Nr mieszkania`, `Miasto`, `Kod`, `Kraj`) VALUES
(1, 'Jan', 'Kowalski', 'Dworcowa', '1', '20', 'Wrocław', '00-001', 'Polska'),
(2, 'Andrzej', 'Nowak', 'Majowa', '10', NULL, 'Poznań', '00-002', 'Polska'),
(3, 'Janusz', 'Malinowski', 'Arkuszowa', '18', '5', 'Szczecin', '00-003', 'Polska'),
(4, 'Marek', 'Zieliński', 'Kołowa', '15', NULL, 'Łódź', '00-004', 'Polska'),
(5, 'Karol', 'Rydzewski', 'Bratkowa', '51', '8', 'Kraków', '00-005', 'Polska'),
(6, 'Michał', 'Nowak', 'Galicyjska', '1', '2', 'Lublin', '00-006', 'Polska'),
(7, 'Krzysztof', 'Markowski', 'Aluzyjna', '9', NULL, 'Białystok', '00-007', 'Polska'),
(8, 'Marek', 'Maj', 'Kolejowa', '12', '1', 'Gdańsk', '00-008', 'Polska'),
(9, 'Aleksander', 'Kowalski', 'Dolna', '21', '10', 'Poznań', '00-009', 'Polska'),
(10, 'Adam', 'Janowski', 'Boczna', '1', '21', 'Lublin', '00-010', 'Polska');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `Id` int(11) NOT NULL,
  `WydawnictwoId` int(11) NOT NULL,
  `Tytuł` varchar(100) NOT NULL,
  `ISBN` varchar(13) DEFAULT NULL,
  `Rok wydania` year(4) DEFAULT NULL,
  `Opis` text DEFAULT NULL,
  `Cena` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`Id`, `WydawnictwoId`, `Tytuł`, `ISBN`, `Rok wydania`, `Opis`, `Cena`) VALUES
(1, 2, 'Uczeń skrytobójcy', '8371800738', 1997, '', '29.90'),
(2, 2, 'Królewski skrytobójca', '8371806981', 1997, '', '32.00'),
(3, 1, 'Gra Endera', '8372557675', 1994, '', '24.50'),
(4, 1, 'Zadomowienie', '8372554129', 2000, '', '18.50'),
(5, 2, 'Uczeń skrytobójcy', '8389004976', 2005, '', '31.00'),
(6, 2, 'Misja Błazna', '8389004917', 2004, '', '35.00'),
(7, 3, 'The Windsingers', '0441892485', 1984, '', '24.00'),
(8, 3, 'The Limbreth Gate', '0441483585', 1984, '', '21.95'),
(9, 3, 'Wolf\'s Brother', '0441712347', 1988, '', '14.90'),
(10, 4, 'Dotyk zła', '8323805547', 2003, '', '24.99'),
(11, 4, 'Łowca dusz', '8323805547', 2004, '', '24.99'),
(12, 5, 'Bez pożegnania', '8387834238', 2004, '', '19.00'),
(13, 5, 'Najczarniejszy strach', '8388722239', 2004, '', '18.90'),
(14, 5, 'Jeden fałszywy ruch', '8388722220', 2004, '', '22.00'),
(15, 1, 'Lovelock', '8371801025', 1997, '', '18.50');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazkiautorzy`
--

CREATE TABLE `ksiazkiautorzy` (
  `KsiążkaId` int(11) NOT NULL,
  `AutorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazkiautorzy`
--

INSERT INTO `ksiazkiautorzy` (`KsiążkaId`, `AutorId`) VALUES
(1, 2),
(2, 2),
(3, 1),
(4, 1),
(5, 2),
(6, 2),
(7, 5),
(8, 5),
(9, 5),
(10, 3),
(11, 3),
(12, 4),
(13, 4),
(14, 4),
(15, 1),
(15, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazkizamowienia`
--

CREATE TABLE `ksiazkizamowienia` (
  `KsiążkaId` int(11) NOT NULL,
  `ZamówienieId` int(11) NOT NULL,
  `Ilość` int(11) NOT NULL,
  `Cena` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazkizamowienia`
--

INSERT INTO `ksiazkizamowienia` (`KsiążkaId`, `ZamówienieId`, `Ilość`, `Cena`) VALUES
(1, 1, 1, '29.90'),
(1, 2, 1, '31.00'),
(1, 4, 1, '29.90'),
(1, 9, 2, '29.90'),
(1, 10, 1, '31.00'),
(2, 3, 1, '32.00'),
(2, 9, 1, '32.00'),
(2, 16, 1, '32.00'),
(3, 1, 1, '24.50'),
(3, 7, 1, '24.50'),
(3, 12, 2, '24.50'),
(4, 6, 2, '18.50'),
(4, 12, 1, '18.50'),
(5, 16, 1, '31.00'),
(6, 16, 1, '35.00'),
(7, 5, 1, '24.00'),
(8, 3, 1, '21.95'),
(9, 4, 1, '14.90'),
(9, 8, 1, '14.90'),
(9, 15, 1, '14.90'),
(10, 14, 1, '24.99'),
(11, 16, 1, '24.99'),
(12, 6, 1, '19.00'),
(12, 13, 1, '19.00'),
(13, 13, 1, '18.90'),
(14, 6, 1, '22.00'),
(14, 13, 1, '22.00'),
(15, 2, 1, '18.50'),
(15, 9, 1, '18.50'),
(15, 11, 2, '17.50');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `Id` int(11) NOT NULL,
  `KsiążkaId` int(11) NOT NULL,
  `KlientId` int(11) NOT NULL,
  `Ocena` enum('1','2','3','4','5','6') DEFAULT NULL,
  `Opinia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `recenzje`
--

CREATE TABLE `recenzje` (
  `Id` int(11) NOT NULL,
  `KsiążkaId` int(11) NOT NULL,
  `Autor` varchar(60) DEFAULT NULL,
  `Źródło` varchar(100) DEFAULT NULL,
  `Recenzja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydawnictwa`
--

CREATE TABLE `wydawnictwa` (
  `Id` int(11) NOT NULL,
  `Nazwa` varchar(100) NOT NULL,
  `Adres` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `wydawnictwa`
--

INSERT INTO `wydawnictwa` (`Id`, `Nazwa`, `Adres`) VALUES
(1, 'Prószyński i S-ka', NULL),
(2, 'Mag', NULL),
(3, 'Ace Books', NULL),
(4, 'Arlekin', NULL),
(5, 'Albatros', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `Id` int(11) NOT NULL,
  `KlientId` int(11) NOT NULL,
  `Data wprowadzenia` datetime NOT NULL,
  `Data realizacji` date DEFAULT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`Id`, `KlientId`, `Data wprowadzenia`, `Data realizacji`, `Status`) VALUES
(1, 1, '2017-01-03 00:00:00', '2017-01-05', 1),
(2, 1, '2017-05-10 00:00:00', NULL, 0),
(3, 2, '2017-02-05 00:00:00', '2017-02-06', 1),
(4, 3, '2017-04-29 00:00:00', NULL, 0),
(5, 3, '2017-05-02 00:00:00', NULL, 0),
(6, 4, '2017-02-23 00:00:00', '2017-02-26', 1),
(7, 4, '2017-03-15 00:00:00', '2017-03-18', 1),
(8, 4, '2017-04-03 00:00:00', '2017-04-08', 1),
(9, 4, '2017-05-22 00:00:00', NULL, 0),
(10, 5, '2017-05-24 00:00:00', NULL, 0),
(11, 6, '2017-05-18 00:00:00', '2017-05-20', 1),
(12, 7, '2017-05-04 00:00:00', '2017-05-08', 1),
(13, 8, '2017-03-03 00:00:00', '2017-03-04', 1),
(14, 8, '2017-05-21 00:00:00', NULL, 0),
(15, 9, '2017-02-02 00:00:00', '2017-02-10', 1),
(16, 10, '2017-01-05 00:00:00', '2017-01-08', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `autorzypseudonimy`
--
ALTER TABLE `autorzypseudonimy`
  ADD PRIMARY KEY (`AutorId1`,`AutorId2`),
  ADD KEY `AutorzyPseudonimyAutorId2FK` (`AutorId2`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `KsiazkiWydawnictwoIdInd` (`WydawnictwoId`);

--
-- Indeksy dla tabeli `ksiazkiautorzy`
--
ALTER TABLE `ksiazkiautorzy`
  ADD PRIMARY KEY (`KsiążkaId`,`AutorId`),
  ADD KEY `KsiazkiAutorzyAutorIdFK` (`AutorId`);

--
-- Indeksy dla tabeli `ksiazkizamowienia`
--
ALTER TABLE `ksiazkizamowienia`
  ADD PRIMARY KEY (`KsiążkaId`,`ZamówienieId`),
  ADD KEY `KsiazkiZamowieniaZamówienieIdFK` (`ZamówienieId`);

--
-- Indeksy dla tabeli `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `OpinieKsiążkaIdInd` (`KsiążkaId`),
  ADD KEY `OpinieKlientIdInd` (`KlientId`);

--
-- Indeksy dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RecenzjeKsiążkaIdInd` (`KsiążkaId`);

--
-- Indeksy dla tabeli `wydawnictwa`
--
ALTER TABLE `wydawnictwa`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ZamowieniaKlientIdInd` (`KlientId`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `wydawnictwa`
--
ALTER TABLE `wydawnictwa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `autorzypseudonimy`
--
ALTER TABLE `autorzypseudonimy`
  ADD CONSTRAINT `AutorzyPseudonimyAutorId1FK` FOREIGN KEY (`AutorId1`) REFERENCES `autorzy` (`Id`),
  ADD CONSTRAINT `AutorzyPseudonimyAutorId2FK` FOREIGN KEY (`AutorId2`) REFERENCES `autorzy` (`Id`);

--
-- Ograniczenia dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD CONSTRAINT `KsiazkiWydawnictwoIdFK` FOREIGN KEY (`WydawnictwoId`) REFERENCES `wydawnictwa` (`Id`);

--
-- Ograniczenia dla tabeli `ksiazkiautorzy`
--
ALTER TABLE `ksiazkiautorzy`
  ADD CONSTRAINT `KsiazkiAutorzyAutorIdFK` FOREIGN KEY (`AutorId`) REFERENCES `autorzy` (`Id`),
  ADD CONSTRAINT `KsiazkiAutorzyKsiążkaIdFK` FOREIGN KEY (`KsiążkaId`) REFERENCES `ksiazki` (`Id`);

--
-- Ograniczenia dla tabeli `ksiazkizamowienia`
--
ALTER TABLE `ksiazkizamowienia`
  ADD CONSTRAINT `KsiazkiZamowieniaKsiążkaIdFK` FOREIGN KEY (`KsiążkaId`) REFERENCES `ksiazki` (`Id`),
  ADD CONSTRAINT `KsiazkiZamowieniaZamówienieIdFK` FOREIGN KEY (`ZamówienieId`) REFERENCES `zamowienia` (`Id`);

--
-- Ograniczenia dla tabeli `opinie`
--
ALTER TABLE `opinie`
  ADD CONSTRAINT `OpinieKlientIdFK` FOREIGN KEY (`KlientId`) REFERENCES `klienci` (`Id`),
  ADD CONSTRAINT `OpinieKsiążkaIdFK` FOREIGN KEY (`KsiążkaId`) REFERENCES `ksiazki` (`Id`);

--
-- Ograniczenia dla tabeli `recenzje`
--
ALTER TABLE `recenzje`
  ADD CONSTRAINT `RecenzjeKsiążkaIdFK` FOREIGN KEY (`KsiążkaId`) REFERENCES `ksiazki` (`Id`);

--
-- Ograniczenia dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `ZamowieniaKlientIdFK` FOREIGN KEY (`KlientId`) REFERENCES `klienci` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
