-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Apr 10, 2026 at 07:53 PM
-- Server version: 8.4.8
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restkumo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int NOT NULL,
  `contactname` varchar(255) NOT NULL,
  `contactemail` varchar(255) NOT NULL,
  `contactmessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `contactname`, `contactemail`, `contactmessage`) VALUES
(2, 'John Smith', 'johnsmith@gmail.com', 'kan ik allergien aan geven');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `itemname` varchar(255) NOT NULL,
  `itemid` int NOT NULL,
  `itemprice` varchar(255) NOT NULL,
  `itemingredients` varchar(255) NOT NULL,
  `itemimage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`itemname`, `itemid`, `itemprice`, `itemingredients`, `itemimage`) VALUES
('miso soep', 28, '3', 'Tofu, zeewier, miso, lente-ui', 'miso-soup-web-500x375.jpg'),
('Ebi Sashimi', 29, '6', 'garnaal', '6f217822d9944dc59f270d3eacd25da7.jpg'),
('Tuna Sashimi', 30, '7', 'Tonijn', 'intro-1695929400.jpg'),
('Salmon Sashimi', 31, '6,50', 'Zalm', 'istockphoto-635732912-612x612.jpg'),
('Volcano Roll', 32, '11,50', 'Rijst, nori, krab, gebakken topping, sriracha', 'istockphoto-1501575607-612x612.jpg'),
('Spider Roll', 33, '10', 'Rijst, nori, zachte krab, avocado, mayo', 'istockphoto-974576020-612x612.jpg'),
('Philadelphia Roll', 34, '8.50', 'Rijst, nori, zalm, roomkaas, komkommer', 'istockphoto-506103796-612x612.jpg'),
('Shrimp Tempura Roll', 35, '9,50', 'Rijst, nori, garnaal tempura, sla', '1762608593690f45d1d8dfd.jpg'),
('Rainbow Roll', 36, '11', 'Rijst, nori, krab, zalm, tonijn, avocado', 'istockphoto-1354366250-612x612.jpg'),
('Dragon Roll', 37, '10,50', 'Rijst, nori, garnaal tempura, avocado', 'istockphoto-506104054-612x612.jpg'),
('Spicy Tuna Roll', 38, '8', 'Rijst, nori, tonijn, sriracha, mayo', 'intro-1721169371.jpg'),
('California Roll', 39, '7,50', 'Rijst, nori, krab, avocado, komkommer', 'sushi-roll-california-roll-op-een-witte-achtergrond-ingredienten-garnalen-komkommer-avocado-vliegende-viskuit-rijst-nori_94120-1179.png'),
('Avocado Maki', 40, '4,75', 'Rijst, nori, avocado', 'Salmon-and-Avocado-Maki-Header-1024x683 (1).jpg'),
('5,75', 41, 'Tuna Maki', 'Rijst, nori, tonijn', 'portion-uncut-tuna-maki-sushi-rolls_219193-12751.avif'),
('Salmon Maki', 42, '5,50', 'Rijst, nori, zalm', 'Salmon-and-Avocado-Maki-Header-1024x683.jpg'),
('Cucumber Maki', 43, '4,50', 'Rijst, nori, komkommer', 'images (1).jpg'),
('Tamago Nigiri', 44, '2', 'Rijst, ei', 'istockphoto-115975974-612x612.jpg'),
('Ebi Nigiri', 45, '2,50', 'Rijst, garnaal', 'istockphoto-831623074-612x612.jpg'),
('Tuna Nigiri', 46, '2,75', 'Rijst, tonijn', 'istockphoto-655973342-612x612.jpg'),
('Salmon Nigiri', 47, '2,50', 'Rijst, zalm', 'delicious-salmon-nigiri-sushi-on-a-plate-photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservationid` int NOT NULL,
  `reservationname` varchar(255) NOT NULL,
  `reservationemail` varchar(255) NOT NULL,
  `reservationdate` varchar(255) NOT NULL,
  `reservationtime` varchar(255) NOT NULL,
  `reservationamount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservationid`, `reservationname`, `reservationemail`, `reservationdate`, `reservationtime`, `reservationamount`) VALUES
(3, 'Hendrik de Groot', 'hendrikgroot@gmail.com', '2026-04-25', '21:43', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `voornaam`, `achternaam`, `email`, `password`, `username`, `role`) VALUES
(9, '1', '1', '1@1.com', '1', '1', 'admin'),
(11, '1', '1', '1@1.com', '2', '2', 'klant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservationid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `itemid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservationid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
