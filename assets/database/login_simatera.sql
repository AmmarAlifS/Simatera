-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 06:23 AM
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
-- Database: `simatera`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_simatera`
--

CREATE TABLE `login_simatera` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 NOT NULL,
  `role_id` enum('admin','member','','') CHARACTER SET latin1 NOT NULL,
  `is_active` enum('yes','no') CHARACTER SET latin1 NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_simatera`
--

INSERT INTO `login_simatera` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(11, 'Rihma', 'rihma@gmail.com', 'default.jpg', '$2y$10$lpZYtHT9/iK8LbnFVQdNnO3yk7kJOu91brUthuymH76D.kU44LUiO', 'member', 'yes', '2023-05-15 05:14:04'),
(24, 'Rijal Fauzi Iskandar', 'rijalfauziiskandar93.rfi@gmail.com', 'default.jpg', '$2y$10$EDBocT0zrDPSO3D7cI.BpOw1QXu4hOSAItw4jlAOfFOKaW7YbQ3ZW', 'admin', 'yes', '2023-05-17 14:03:22'),
(25, 'Veronz', 'veronztv@gmail.com', 'default.jpg', '$2y$10$jzClWBxcY.hFITG18bfB/urGrN4ib1h0XT3gQtakUjWhfKOKJm/5i', 'member', 'yes', '2023-05-17 14:16:44'),
(27, 'Rijal Fauzi', 'rijalfauziiskandar4@gmail.com', 'default.jpg', '$2y$10$ETsBARiOY5.zteyilHiaZeh.RbN6RkjLJ5ifHoml5GZDmuVsqNT5e', 'member', 'yes', '2023-05-22 07:52:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_simatera`
--
ALTER TABLE `login_simatera`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_simatera`
--
ALTER TABLE `login_simatera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
