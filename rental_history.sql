-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 07:56 AM
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
-- Database: `rental_history`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `rent_date` varchar(255) NOT NULL,
  `bond_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_email`, `rent_date`, `bond_amount`) VALUES
(17, 'joyustcian@gmail.com', 'June, 4, 2023', '2275'),
(18, 'bijoy@gmail.com', 'June, 4, 2023', '430'),
(19, 'john@example.com', 'June, 2, 2023', '1000'),
(20, 'emma@example.com', 'May, 28, 2023', '1200'),
(21, 'david@example.com', 'May, 4, 2023', '900'),
(22, 'sarah@example.com', 'May,22, 2023', '800'),
(23, 'michael@example.com', 'May, 20, 2023', '1500'),
(24, 'olivia@example.com', 'May, 18, 2023', '1100'),
(25, 'james@example.com', 'May, 16, 2023', '1000'),
(26, 'emily@example.com', 'May, 16, 2023', '1300'),
(27, 'benjamin@example.com', 'May, 14, 2023', '950'),
(28, 'ava@example.com', 'May, 12, 2023', '850');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
