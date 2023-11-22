-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 02:29 AM
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
-- Database: `modul4_jehan`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(5, 'Shah Jehan Basrul', 'shahjehanbasrul', 'shahjehanb060104@gmail.com', '$2y$10$ea0SFi5TwfMqhc5rFDH4KeS8hqd5S6.t49F1O3fR/YzeAJR.wHUCC'),
(6, 'Wahyudi', 'wahyu', 'wahyu01@gmail.com', '$2y$10$BclO1izUAhAo2KFospZ55OuKritvjn4gdcm5nB3fKioQQPN17FbQ6'),
(7, 'Shah Jehan Basrul', 'shahjehanb06', 'shahjehanb06@gmail.com', '$2y$10$QafHoh.hO4lmqSxBUwJzrOd8pBkTA11Hvjcjk8g03qq.Uu8GUWlem'),
(8, 'Shah Jehan Basrul', 'Shahjehanb', 'shahjehanb0615@gmail.com', '$2y$10$KAfWsYw2X2PqJNvjd5aGHOMpeWMNperdp1Z9MlsHDTjMKJudDt01m');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
