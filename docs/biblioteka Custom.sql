-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 12:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `id_authors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`name`, `surname`, `id_authors`) VALUES
('Lukas', 'Ablonskis', 1),
('Dovydas', 'Stankevičius', 2),
('Austėja', 'Vilutis', 3),
('Matas', 'Stankevičius', 4),
('Emilija', 'Vilutis', 5),
('Lukas', 'Vilutis', 6),
('Gabija', 'Stankevičius', 7),
('Kajus', 'Vilutis', 8),
('Lukas', 'Gadeikytė', 9),
('Dovydas', 'Vilutis', 10),
('Ugnė', 'Rimkus', 11),
('Urtė', 'Vaičiukynas', 12),
('Lukas', 'Gadeikytė', 13),
('Lukas', 'Gadeikytė', 14),
('Gabija', 'Rimkus', 15),
('Ugnė', 'Ablonskis', 16),
('Dovydas', 'Patašius', 17),
('Kajus', 'Patašius', 18),
('Urtė', 'Vilutis', 19),
('Austėja', 'Vilutis', 20),
('Austėja', 'Ablonskis', 21),
('Austėja', 'Ablonskis', 22),
('Dovydas', 'Stankevičius', 23),
('Dovydas', 'Stankevičius', 24),
('Urtė', 'Vilutis', 25);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `name` varchar(255) NOT NULL,
  `pageCount` int(11) NOT NULL,
  `id_books` int(11) NOT NULL,
  `fk_typesid` int(11) NOT NULL,
  `fk_authorsid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`name`, `pageCount`, `id_books`, `fk_typesid`, `fk_authorsid`) VALUES
('Netekęs teisės būti žmogumi', 257, 1, 8, 1),
('Lemtingas padažas', 778, 2, 7, 1),
('Atminties policija', 526, 3, 5, 16),
('Dviejų kelių knyga', 636, 4, 6, 9),
('Bičių metai', 936, 5, 6, 14),
('Bitininkas', 154, 6, 9, 5),
('Spygliuočiai želdynuose', 941, 7, 6, 17),
('Šilauogės', 167, 8, 9, 23),
('Sala', 451, 9, 6, 13),
('Knyga laiko būčiai', 645, 10, 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `takenDate` date NOT NULL,
  `broughtDate` date DEFAULT NULL,
  `id_borrows` int(11) NOT NULL,
  `fk_studentsid` int(11) NOT NULL,
  `fk_booksid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`takenDate`, `broughtDate`, `id_borrows`, `fk_studentsid`, `fk_booksid`) VALUES
('2008-06-20', '2019-07-30', 1, 67, 2),
('2007-11-12', '2014-01-08', 2, 23, 4),
('2005-02-20', '2013-08-09', 3, 87, 6),
('2008-08-05', '2012-08-30', 4, 64, 8),
('2004-04-19', '2012-08-13', 5, 28, 5),
('2007-01-19', '2019-03-01', 6, 84, 7),
('2006-08-02', '2016-08-16', 7, 19, 8),
('2003-05-30', '2017-04-30', 8, 21, 8),
('2005-09-23', '2020-03-10', 9, 91, 9),
('2010-08-07', '2021-05-17', 10, 22, 4),
('2006-07-16', '2018-07-12', 11, 2, 8),
('2008-09-20', '2012-08-17', 12, 22, 6),
('2005-09-22', '2019-11-26', 13, 55, 8),
('2005-09-26', '2012-01-18', 14, 18, 6),
('2002-12-10', '2020-06-08', 15, 26, 9);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `studyProgramme` varchar(255) DEFAULT NULL,
  `id_students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `surname`, `birthdate`, `studyProgramme`, `id_students`) VALUES
('Remigijus', 'Butkus', '1999-08-08', 'Buhalterinė apskaita', 1),
('Laima', 'Butkus', '1982-02-25', 'Verslo ekonomika', 2),
('Vaiga', 'Petrauskas', '1989-12-08', 'Verslo ekonomika', 3),
('Bonifacas', 'Kazlauskas', '1990-08-27', 'Aeronautikos inžinerija', 4),
('Kleopas', 'Petrauskas', '1998-01-07', 'Buhalterinė apskaita', 5),
('Irmutė', 'Urbonas', '1997-04-09', 'Buhalterinė apskaita', 6),
('Karolis', 'Žukauskas', '1977-05-07', 'Reklamos vadyba', 7),
('Gabija', 'Paulauskas', '1987-06-13', 'Informacinės sistemos', 8),
('Rimas', 'Kavaliauskas', '1984-08-12', 'Informacinės sistemos', 9),
('Narsutis', 'Stankevičius', '1993-09-01', 'Buhalterinė apskaita', 10),
('Kristoforas', 'Žukauskas', '1983-07-27', 'Programų sistemos', 11),
('Tiberijus', 'Žukauskas', '1970-12-06', 'Aeronautikos inžinerija', 12),
('Skirmantė', 'Kazlauskas', '1986-12-13', 'Reklamos vadyba', 13),
('Gervydas', 'Butkus', '1994-12-01', 'Reklamos vadyba', 14),
('Odeta', 'Kavaliauskas', '1972-02-27', 'Verslo ekonomika', 15),
('Ramūnas', 'Urbonas', '1977-04-03', 'Aeronautikos inžinerija', 16),
('Brigita', 'Stankevičius', '1987-02-19', 'Reklamos vadyba', 17),
('Rudolfas', 'Žukauskas', '1992-10-29', 'Informacinės sistemos', 18),
('Marijus', 'Kavaliauskas', '1999-05-28', 'Buhalterinė apskaita', 19),
('Norgailė', 'Žukauskas', '1997-08-09', 'Reklamos vadyba', 20),
('Silva', 'Urbonas', '1987-09-13', 'Aeronautikos inžinerija', 21),
('Julius', 'Butkus', '1991-08-20', 'Programų sistemos', 22),
('Vytis', 'Butkus', '1990-08-03', 'Informacinės sistemos', 23),
('Benediktas', 'Jankauskas', '1981-02-04', 'Informacinės sistemos', 24),
('Rozalija', 'Petrauskas', '1993-12-11', 'Programų sistemos', 25),
('Lukas', 'Žukauskas', '1996-04-27', 'Aeronautikos inžinerija', 26),
('Laimonas', 'Petrauskas', '1975-05-20', 'Informacinės sistemos', 27),
('Marijona', 'Butkus', '1992-11-27', 'Informacinės sistemos', 28),
('Eduardas', 'Jankauskas', '1977-08-05', 'Reklamos vadyba', 29),
('Nijolė', 'Vasiliauskas', '1985-07-02', 'Aeronautikos inžinerija', 30),
('Arkadijus', 'Paulauskas', '1977-12-14', 'Programų sistemos', 31),
('Cezaris', 'Stankevičius', '1974-06-02', 'Informacinės sistemos', 32),
('Aurimas', 'Vasiliauskas', '1974-04-26', 'Verslo ekonomika', 33),
('Jeronimas', 'Petrauskas', '1972-08-08', 'Buhalterinė apskaita', 34),
('Vakarė', 'Stankevičius', '1989-05-15', 'Aeronautikos inžinerija', 35),
('Kostas', 'Jankauskas', '1991-06-13', 'Reklamos vadyba', 36),
('Birutė', 'Stankevičius', '1986-08-17', 'Buhalterinė apskaita', 37),
('Rasa', 'Vasiliauskas', '1995-05-31', 'Programų sistemos', 38),
('Dovilė', 'Stankevičius', '1998-08-30', 'Programų sistemos', 39),
('Ugnius', 'Jankauskas', '1973-10-04', 'Buhalterinė apskaita', 40),
('Benas', 'Urbonas', '1987-01-19', 'Verslo ekonomika', 41),
('Vilė', 'Vasiliauskas', '1982-09-15', 'Informacinės sistemos', 42),
('Roberta', 'Stankevičius', '1972-03-18', 'Programų sistemos', 43),
('Loreta', 'Petrauskas', '1975-12-06', 'Verslo ekonomika', 44),
('Iduna', 'Stankevičius', '1998-10-11', 'Aeronautikos inžinerija', 45),
('Rožė', 'Jankauskas', '1971-09-29', 'Reklamos vadyba', 46),
('Kipras', 'Kazlauskas', '1984-07-27', 'Aeronautikos inžinerija', 47),
('Šarūnas', 'Kazlauskas', '1985-06-16', 'Buhalterinė apskaita', 48),
('Žana', 'Kazlauskas', '1985-11-06', 'Programų sistemos', 49),
('Benas', 'Paulauskas', '1989-09-30', 'Verslo ekonomika', 50),
('Undinė', 'Paulauskas', '1980-11-02', 'Buhalterinė apskaita', 51),
('Aurimas', 'Stankevičius', '1976-01-19', 'Informacinės sistemos', 52),
('Maja', 'Urbonas', '1990-02-01', 'Verslo ekonomika', 53),
('Ilzė', 'Vasiliauskas', '1992-08-14', 'Buhalterinė apskaita', 54),
('Paula', 'Paulauskas', '1994-09-20', 'Programų sistemos', 55),
('Mantvydas', 'Žukauskas', '1990-03-28', 'Informacinės sistemos', 56),
('Jaunius', 'Petrauskas', '1988-12-27', 'Informacinės sistemos', 57),
('Žydronė', 'Butkus', '1971-08-09', 'Programų sistemos', 58),
('Edvinas', 'Vasiliauskas', '1980-03-04', 'Buhalterinė apskaita', 59),
('Egidijus', 'Butkus', '1971-11-04', 'Aeronautikos inžinerija', 60),
('Adolfas', 'Urbonas', '1990-08-26', 'Buhalterinė apskaita', 61),
('Rimas', 'Vasiliauskas', '1978-03-21', 'Aeronautikos inžinerija', 62),
('Žydrūnė', 'Stankevičius', '1975-09-02', 'Buhalterinė apskaita', 63),
('Konstancija', 'Butkus', '1979-09-26', 'Verslo ekonomika', 64),
('Vaida', 'Stankevičius', '1972-11-30', 'Aeronautikos inžinerija', 65),
('Vaida', 'Butkus', '1973-11-19', 'Buhalterinė apskaita', 66),
('Akvilinas', 'Petrauskas', '1992-11-18', 'Aeronautikos inžinerija', 67),
('Danas', 'Paulauskas', '1978-08-11', 'Informacinės sistemos', 68),
('Titas', 'Urbonas', '1978-10-01', 'Informacinės sistemos', 69),
('Erikas', 'Vasiliauskas', '1986-11-14', 'Informacinės sistemos', 70),
('Egidijus', 'Kazlauskas', '1985-07-11', 'Informacinės sistemos', 71),
('Alina', 'Kavaliauskas', '1980-03-30', 'Informacinės sistemos', 72),
('Klementina', 'Urbonas', '1975-03-09', 'Informacinės sistemos', 73),
('Justina', 'Jankauskas', '1988-08-31', 'Programų sistemos', 74),
('Danguolė', 'Paulauskas', '1976-01-28', 'Reklamos vadyba', 75),
('Kazė', 'Kazlauskas', '1998-11-19', 'Buhalterinė apskaita', 76),
('Balys', 'Stankevičius', '1999-10-23', 'Verslo ekonomika', 77),
('Bronė', 'Kazlauskas', '1989-09-15', 'Aeronautikos inžinerija', 78),
('Deimantė', 'Petrauskas', '1995-11-26', 'Aeronautikos inžinerija', 79),
('Kaributas', 'Stankevičius', '1986-02-11', 'Aeronautikos inžinerija', 80),
('Daria', 'Paulauskas', '1981-02-27', 'Aeronautikos inžinerija', 81),
('Bartė', 'Butkus', '1978-06-23', 'Verslo ekonomika', 82),
('Romualdas', 'Petrauskas', '1999-07-12', 'Verslo ekonomika', 83),
('Valentinas', 'Kavaliauskas', '1984-01-18', 'Aeronautikos inžinerija', 84),
('Laimis', 'Stankevičius', '1977-05-22', 'Programų sistemos', 85),
('Asta', 'Stankevičius', '1976-08-22', 'Programų sistemos', 86),
('Asta', 'Jankauskas', '1998-02-16', 'Reklamos vadyba', 87),
('Urbonas', 'Kavaliauskas', '1995-07-29', 'Programų sistemos', 88),
('Jadvyga', 'Jankauskas', '1993-11-14', 'Aeronautikos inžinerija', 89),
('Valerijus', 'Stankevičius', '1989-03-07', 'Reklamos vadyba', 90),
('Gracija', 'Vasiliauskas', '1994-09-08', 'Programų sistemos', 91),
('Skaiva', 'Paulauskas', '1980-03-10', 'Aeronautikos inžinerija', 92),
('Polina', 'Petrauskas', '1973-08-31', 'Programų sistemos', 93),
('Virgis', 'Jankauskas', '1989-02-12', 'Programų sistemos', 94),
('Žana', 'Stankevičius', '1982-05-23', 'Programų sistemos', 95),
('Onutė', 'Vasiliauskas', '1988-05-22', 'Aeronautikos inžinerija', 96),
('Daria', 'Urbonas', '1984-01-20', 'Informacinės sistemos', 97),
('Danguolė', 'Jankauskas', '1978-04-25', 'Aeronautikos inžinerija', 98),
('', 'Butkus', '1977-08-10', 'Verslo ekonomika', 99),
('Uosis', 'Kazlauskas', '1983-11-27', 'Reklamos vadyba', 100);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `name` varchar(255) NOT NULL,
  `id_types` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`name`, `id_types`) VALUES
('Detektyvas', 1),
('Fantastika', 2),
('Distopijos ir utopijos', 3),
('Istoriniai romanai', 4),
('Siaubo romanai', 5),
('Romantika', 6),
('Meilės romanai', 7),
('Trileriai', 8),
('Trumpos istorijos', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id_authors`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_books`),
  ADD KEY `fk_typesid` (`fk_typesid`),
  ADD KEY `fk_authorsid` (`fk_authorsid`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id_borrows`),
  ADD KEY `fk_studentsid` (`fk_studentsid`),
  ADD KEY `fk_booksid` (`fk_booksid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_students`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_types`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`fk_typesid`) REFERENCES `types` (`id_types`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`fk_authorsid`) REFERENCES `authors` (`id_authors`);

--
-- Constraints for table `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `borrows_ibfk_1` FOREIGN KEY (`fk_studentsid`) REFERENCES `students` (`id_students`),
  ADD CONSTRAINT `borrows_ibfk_2` FOREIGN KEY (`fk_booksid`) REFERENCES `books` (`id_books`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
