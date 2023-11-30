-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 02:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lockers`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `otpcode` int(12) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`, `otpcode`, `active`) VALUES
(1, 'Ajay Kumar', 'ajay@gmail.com', '12345', 0, NULL, 0),
(2, 'Amit', 'amit@gmail.com', '1234', 0, NULL, 0),
(3, 'Keerti Panwar', 'keerti@gmail.com', '$2y$10$g.xv9BS7DZbZ0KT/.fkGouuD8duIUWY2lDntZ7ZXDDUW6h09ZDiqe', 0, NULL, 0),
(4, 'Ankita', 'ankita@gmail.com', '$2y$10$ZuWPf98dGPFogVM8MoKGxOVZ4v1mXD.WrJQ7rwfvdYLWMpyEyRhtK', 0, NULL, 0),
(5, 'Keerti Panwar', 'keerti1234@gmail.com', '$2y$10$PL6oQH71xCh3F3BALBuVYu6SLn2AVQ41o.i5vi2LosRIWEh1H.0Zi', 0, NULL, 0),
(6, 'root', 'bssam09azab@gmail.com', '$2y$10$3ou3FjCxVBNKs9rjmnhs8uXE68FFU0m2lrLN7/l/CoJx/a8VR7NnO', 1, NULL, 1),
(7, 'bassam', 'bassam@gmail.com', '$2y$10$gSroe/elM0XNtGIogjUG8ulsu4ZO6.Sv3ZxDTx8B4UEb.T6otNpre', 0, NULL, 0),
(13, 'ldecaprrio@gmail.com', 'ldecaprrio@gmail.com', '$2y$10$PTRN915UUstqNaS6kBj1sOabPUrch.dX7ZHIOSzGOWyKid1PbTCDa', 0, 3379, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
