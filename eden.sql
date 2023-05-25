-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 01:48 PM
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
-- Database: `eden`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `informal_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `ni_number` int(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile_tel` varchar(255) NOT NULL,
  `home_tel` varchar(255) NOT NULL,
  `other_tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `initials` varchar(255) NOT NULL,
  `emergency_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `title`, `informal_name`, `address`, `town`, `postcode`, `ni_number`, `dob`, `mobile_tel`, `home_tel`, `other_tel`, `email`, `gender`, `initials`, `emergency_name`) VALUES
(52, 'Lila', 'Wells', 'mr', 'Cathleen Finley', 'Officiis aut esse fa', 'Voluptas nulla alias', 'Quasi iusto iusto no', 224, '1974-09-29', '+1 (572) 242-4139', '+1 (904) 888-2401', '+1 (302) 171-9669', 'cyvylor@mailinator.com', 'mr', 'Omnis pariatur Quia', 'Jaquelyn Palmer'),
(53, 'Mallory', 'Hoffman', 'mr', 'Graham Riggs', 'Fuga Ullamco nemo r', 'Eiusmod enim et magn', 'Culpa reprehenderit', 716, '1978-07-30', '+1 (846) 435-4797', '+1 (575) 724-3943', '+1 (373) 733-2036', 'citijydyq@mailinator.com', 'mr', 'Delectus in exercit', 'Wyoming Combs'),
(54, 'Hope', 'Stone', 'mr', 'Scarlet Valencia', 'Est sunt fugit volu', 'Necessitatibus paria', 'Quasi aut proident ', 602, '1982-01-22', '+1 (915) 984-4313', '+1 (221) 777-1636', '+1 (978) 811-9541', 'fymysaq@mailinator.com', 'other', 'Ut dolore unde ipsa', 'Linus Mcintosh'),
(55, 'Karina', 'Waller', 'miss', 'Steven Bruce', 'Recusandae Molestia', 'Eum ratione quis nih', 'Rerum qui illum opt', 470, '1975-07-22', '+1 (933) 468-8265', '+1 (824) 838-2596', '+1 (247) 403-7246', 'sawelisof@mailinator.com', 'female', 'Cupidatat irure fugi', 'Zeph Velasquez');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
