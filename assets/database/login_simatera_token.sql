-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 06:24 AM
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
-- Table structure for table `login_simatera_token`
--

CREATE TABLE `login_simatera_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_simatera_token`
--

INSERT INTO `login_simatera_token` (`id`, `email`, `token`, `date_created`) VALUES
(16, 'rijalfauziiskandar93.rfi@gmail.com', 'P7iX5ud6LQ8T6bJa8q16fco86tcpM6n1v6cQ0ugsX1E=', 1684330648),
(42, 'rijalfauziiskandar4@gmail.com', 'XIRsa+WQWkuxnZbVTfzglB1OJj/OVY4j59h89aAssXc=', 1684738428),
(43, 'rijalfauziiskandar4@gmail.com', 'Bi0iiK/rFU6hSBdFpXUYDCY6joiT4gix/qwK+zLVDU8=', 1684740021),
(44, 'rijalfauziiskandar4@gmail.com', '8gQijZ31qOhcLkuZ9ZFkUBua1ViKMEFQzg8NSM9aZQw=', 1684740832),
(45, 'rijalfauziiskandar4@gmail.com', 'JMTvI5K8LITItosV+AkIbjcC3e1TH6T9Z2li0+iK/QQ=', 1684742354),
(46, 'rijalfauziiskandar4@gmail.com', 'FlKo0rc7h8igWk1bcFOv252FyRm+E/KCwDDqp7WoFVQ=', 1684763076),
(47, 'rijalfauziiskandar4@gmail.com', 'O4XzySLxDvstyFQ1A2VbF/xnr+U5ymWOzE1TINK+UfI=', 1684811076),
(48, 'rijalfauziiskandar4@gmail.com', 'XlqLLPpP2VIPu2Z2ruzHBWJw3shtWMfAfPSIM5lHQIg=', 1684811102),
(49, 'rijalfauziiskandar4@gmail.com', '6POd1H0OrtcED00N7KgvnVKHUpO8EL+kRCGKw1jiHAU=', 1684811186),
(50, 'rijalfauziiskandar4@gmail.com', 'vRnP8+Niry8lkfENbgGgxqhhyWrCyHnOcppBov2P58U=', 1684815489);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_simatera_token`
--
ALTER TABLE `login_simatera_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_simatera_token`
--
ALTER TABLE `login_simatera_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
