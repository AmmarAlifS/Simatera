-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 06:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `artikel_simatera`
--

CREATE TABLE `artikel_simatera` (
  `judul_id` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `artikel` varchar(10000) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel_simatera`
--

INSERT INTO `artikel_simatera` (`judul_id`, `judul`, `artikel`, `Foto`, `Video`) VALUES
(0, 'Sejarah Balai Kota Bandung', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus', 'BalaiKotaBandung.jpg', 'BalaiKotaBandung.mp4'),
(1, 'Sejarah Balai Kota Bandung', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus', 'BalaiKotaBandung.jpg', 'BalaiKotaBandung.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'a', 'a@a', 'a'),
(2, 'b', 'b@b', 'b'),
(3, 'c', 'c@c', 'c'),
(4, 'aa', 'aa@a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` int(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(55) NOT NULL,
  `twitter` varchar(55) NOT NULL,
  `instagram` varchar(55) NOT NULL,
  `tentang_kami` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `alamat`, `no_telp`, `email`, `facebook`, `twitter`, `instagram`, `tentang_kami`) VALUES
(1, 'Jl. Wastukencana No.2, Babakan Ciamis, Kec. Sumur ', 224234793, 'diskominfo@bandung.go.id', 'https://www.facebook.com/DiskominfoBandung', 'https://twitter.com/DiskominfoBdg', 'https://www.instagram.com/diskominfobdg', 'Selamat datang di website kami! Kami adalah platform yang didedikasikan untuk menyediakan informasi dan layanan yang bermanfaat bagi pengunjung kami. Website kami menyajikan berbagai informasi terkini dan terpercaya tentang tempat bersejarah di kota Bandung.\r\n\r\nKami selalu berusaha untuk memberikan pengalaman terbaik bagi pengunjung kami dengan menyediakan tampilan yang mudah digunakan dan responsif di berbagai perangkat. Website kami juga dilengkapi dengan fitur pencarian dan navigasi yang mudah untuk membantu pengunjung menemukan informasi yang mereka cari dengan cepat.\r\n\r\nKami berharap website kami dapat membantu meningkatkan pengetahuan dan kehidupan sehari-hari pengunjung kami dan menjadi sumber informasi yang terpercaya dan berguna. Terima kasih telah mengunjungi website kami!');

-- --------------------------------------------------------

--
-- Table structure for table `user_masukan`
--

CREATE TABLE `user_masukan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_masukan`
--

INSERT INTO `user_masukan` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`, `timestamp`) VALUES
(1, 'a', 'a@a', '', 'a', '2023-03-27 13:55:05'),
(2, 'a', 'a@a', 'a', 'a', '2023-03-27 13:55:05'),
(3, 's', 's@s', 's', 's', '2023-03-27 13:55:05'),
(4, 's', 's@ss', 's', 's', '2023-03-27 13:55:05'),
(5, 'sdsa', 'dsa@dsa', 'dsa', 'das', '2023-03-27 13:55:05'),
(6, 'das', 'dsa@ds', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(7, 'dsa', 'dsa@dsa', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(8, 'dsa', 'dsa@dsa', 'das', 'das', '2023-03-27 13:55:05'),
(9, 'das', 'da@da', 'da', 'dsa', '2023-03-27 13:55:05'),
(10, 'dsa', 'das@dsa', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(11, 'dsa', 'das@dsa', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(12, 'dsa', 'dsa@dsa', 'dsa', 'das', '2023-03-27 13:55:05'),
(13, 'dsa', 'dsadsad@dsa', 'dsadsa', 'dsad', '2023-03-27 13:55:05'),
(14, 'dsadsa', 'dsaddsa@dada', 'das', 'das', '2023-03-27 13:55:05'),
(15, 'dsa', 'dsa@das', 'dsa', 'dsa', '2023-03-27 13:55:05'),
(16, 'cxz', 'cxz2s@dsa', 'das', 'dsa', '2023-03-27 13:55:05'),
(17, 'sda', 'dsadsas@dsad', 'saddsa', 'dsadas', '2023-03-27 13:55:05'),
(18, 'dsa', 'das@dsa', 'dsa', 'das', '2023-03-27 13:55:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `user_masukan`
--
ALTER TABLE `user_masukan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_masukan`
--
ALTER TABLE `user_masukan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
