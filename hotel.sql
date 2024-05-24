-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 11:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `balance` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `city`, `balance`) VALUES
(1, 'Erasto', 'Leo', 'erasto@gmail.com', 'galab5', 'morogoro', 'Tanzania', '7000'),
(2, 'Emma', 'Maijo', 'erasto@gmail.com', 'mim5', 'nairobi', 'kenya', NULL),
(3, 'Esta', 'Ommy', 'esta@gmail.com', 'es34', 'mbeya', 'Tanzania', NULL),
(4, 'Asha', 'Omari', 'asha@gmail.com', 'gd34', 'kyela', 'Tanzania', '27887'),
(5, 'Asha', 'Omari', 'asha@gmail.com', 'gd34', 'kyela', 'Tanzania', '27887'),
(6, 'Ally', 'Hassan', 'allya@gmail.com', 'ally34', 'dodoma', 'Tanzania', '27887'),
(7, 'Love', 'Joseph', 'love@gmail.com', 'lov17', 'iringa', 'Tanzania', '27887'),
(8, 'Lily', 'Pendo', 'pendo@gmail.com', 'pendo', 'ibingu', 'Kenya', '27887'),
(9, 'Alex', 'Aloyce', 'alexa@gmail.com', 'alex47', 'ikuti', 'Tanzania', '27887'),
(10, 'Fikir', 'Pendo', 'fikir@gmail.com', 'ddf34', 'kyela', 'moga', '27887'),
(11, 'Aisha', 'Erasto', 'era@gmail.com', '647y', 'mbozi', 'Malawi', '27887'),
(12, 'Leo', 'Jose', 'jose@gmail.com', '779934', 'inyala', 'Takey', '27887'),
(13, 'issa', 'Kevi', 'tru@gmail.com', '738', 'arusha', 'Tanzania', '27887'),
(14, 'oliva', 'Joji', 'jiji@gmail.com', '8738', 'dodoma', 'Tanzania', '27887'),
(15, 'Maiga', 'ally', 'maiga@gmail.com', '1717', 'kampala', 'uganda', '27887'),
(16, 'Benja', 'Wangwe', 'benja@gmail.com', 'eyudh34', 'Kairo', 'Egypty', '27887'),
(17, 'Elly', 'Ezra', 'ezra@gmail.com', '3684', 'landon', 'England', '27887'),
(18, 'Joao', 'Pedro', 'eiu@gmail.com', 'gd34', 'Benfica', 'Poto', '27887'),
(19, 'Arosho', 'Pedri', 'arond@gmail.com', 'gd34', 'kyela', 'Tanzania', '27887'),
(20, 'Onana', 'juma', 'juma@gmail.com', '738', 'mwanza', 'Tanzania', '27887');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
