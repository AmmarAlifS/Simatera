-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 09:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `artikel` varchar(10000) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel_simatera`
--

INSERT INTO `artikel_simatera` (`id_artikel`, `judul`, `artikel`, `Foto`, `Video`, `tanggal`) VALUES
(1, 'Pusat Pemerintahan Gemeente', 'Pemerintah Hindia Belanda akan membentuk gewestelijk raden (dewan dewan wilayah) untuk wilayah setingkat keresidenan dan plaatselijk raden (dewan dewan lokal) untuk wilayah setingkat kabupatan. Untuk wilayah yang luasnya di bawah kabupaten, yakni wilayah kota, akan dibentuk gemeentelijk resort atau gemeente. Pada dasarnya, pembentukan gemeente dilakukan untuk melayani kepentingan masyarakat Eropa, khususnya Belanda. Faktor pendorongnya adalah suatu pemikiran bahwa masyarakat Eropa dan non-Eropa harus tunduk terhadap hokum Eropa, bukan hokum masyarakat pribumi. Dengan perkataan lain, pembentukan gemeente ini tidak dimaksudkan untuk memberikan pelayanan langsung kepada masyrakat pribumi, meskipun pada akhirnya masyarakt pribumi menikmati berbagai prasarana dan sarana yang dibangun pemerintahan gemeente. Pemerintahan Hindia Belanda membentuk gemeente Bandung berdasarkan Ordonansi tanggal 21 maret 1906 dan Undang-Undang tanggal 1 maret 1906 yang diresmikan oleh Gubernur Jenderal J.B.van Heutz pada 1 april 1906. Ketika dibentuk gemeente Bandung dipimpin oleh E. A. Maurenbrecher. Sebagaimana lazimnya dan juga untuk keperluan protokoler, Pemerintahan Gemeente Bandoeng menetapkan sebuah lambang kota yang menjadi simbol jatidiri warga Bandung pada saat itu.\r\n', '4ace30ea55d32bebddf978c30697586a.jpeg', 'https://www.youtube.com/watch?v=M5GT34tjydM', '2023-05-23'),
(2, 'Museum Geologi', 'Museum Geologi terletak di Rembrandt Straat, sekarang Jalan Diponegoro. Gedung bergaya Art Deco ini adalah bangunan modern pada zamannya. Dirancang oleh arsitek Belanda Ir.H.M.van Schouwenburg dan Geologisch Laboratorium, Gedung Museum Geologi dibangun pada 1928 dan diresmikan dengan nama &quot;Geologische Museum&quot; pada 16 Mei 1929 bertepatan dengan penyelenggaraan Kongres Ilmu Pengetahuan Pasifik yang ke IV. Pembangunan dikerjakan selama 11 bulan dengan 300 pekerja dan menghabiskan dana 400.000 Gulden dibangun dengan arsitektur bergaya Art Deco. Geologisch Laboratorium, disebut juga Geologisch Museum, dibangun oleh Pemerintah Hindia Belanda untuk mendokumentasi seperti batuan, mineral, serta fosil yang dikumpulkan para ahli geologi dari berbagai daerah di Kawasan Hindia Belanda. Sekarang Museum Geologi adalah bagian dari Departemen Energi dan Sumber Daya Mineral, Republik Indonesia.\r\n', '4af1f33209ec1839833132afa3a69253.jpg', 'https://www.youtube.com/@museumgeologi', '2023-05-23'),
(3, 'Museum KAA', 'Gedung bekas Sicueteit Concordia yang juga digunakan sebagai tempat Konferensi Asia Afrika tahun 1955, setelah konferensi kemudian menjadi bagian dari Gedung Merdeka. Setelah Dewan konstituante dibubarkan tahun 1959 dan setelah Majelis Permusyawaratan Rakyat sementara (MPRS) bersidang di Jakarta (1996), Gedung bekas Societeit Concordia ini dijadikan Museum Konferensi Asia Afrika dan Perpustakaan Gedung Merdeka (1970-an) sampai sekarang. Atas prakarsa Asisten Residen Pieter Sijthoff, Societeit (tempat pertemuan sosial dan rekreasi ) dibentuk di Bragaweg (Jl. Braga) menempati bangunana berdinding bilik milik seorang Cina. Mengingat perngunjung bertambah ramai makan tahun 1870 Societeit dipindahkan ke sebuah bangunan berdinding papan yang lebih luas di sisi barat Hotel Post Road (Kemudian menjadi Grand Hotel Homann) dan diberi nama Concordia.\r\n', 'b3b1b1bc5376fb5e1d8b41c0fe6ca14c.jpg', 'https://www.youtube.com/watch?v=l17gpK3TdtA', '2023-05-24'),
(4, 'Piesterspark', 'Pieter Sijthoffpark adalah taman tertua yang dibangun di Kota Badnung. Piter Sijthoffpark yang lebih dikenal dengan nama Pieterspark dibangun pada tahun 1885, untuk mengenang jasa besar Asister Residen Priangan Pieter Sijtjoff kepada perkembangan kota Bandung. Perancang taman adalah R. Teusher seorang Botanikus yang bertempat tinggal di pojok jalan Tamblong dan jalan Naripan, pada tahun 2005 bangunan tersbut dihancurkan untuk membangun pompa bensin. Pieterspark merupakan salah satu dari banyak taman lainnya yang menjadikan Kota Bandung dikenal sebagai Kota Taman (1936). Tatakota Kota Bandung memang dirancang mengacu kepada konsep kota taman (garden city) seperti negara-negara di Eropa. Taman Pieterspark banyak ditanami pohon pelindung, pohon hias dan tanaman hias serta berbagai jenis bunga-bungaan. Sebuah taman yang sederhana tetapi mempesona.\r\n', '19da88ca38701a278ce18e41e45bbf24.jpg', 'https://youtu.be/Im2GisQ3Tpk', '2023-05-24'),
(5, 'Sejarah Bank NISP', 'Bank OCBC NISP (Sebelumnya dikenal dengan Bank NISP) merupakan bank tertua keempat di Indonesia, yang didirikan pada tanggal 4 April 1941 di bandung dengan nama NV. Nerderlandsch Indische Spaar En Deposito Bank (N.I.S.P). Bank OCBC NISP kemudian berkembang menjadi bank yang solid dan handal, terutama melayani segemn Usaha Kecil dan Menengah (UKM). Bank OCBC NISP resmi menjadi bank komersial pada tahun 1967.\r\n\r\nTahun 1994 Bank Nisp Menjual sahamnya kepada masyarakat (go public). Bank NISP merupakan bank yang sangat berhati hati dan dapat dikatakan sebagai bank yang sifatnya konservatif, baik dari segi operasinya maupun para pemimpin banknya. Bank ini juga merupakan bank yang tidak agresif untuk melakukan ekspansi dan memperluas jaringan operasinya tanpa perhitungan yang matang, sehingga pada masa krisis moneter menimpa Indonesia sejak tahun 1997, Bank NISP dapat tetap bertahan dan bahkan berkembang.\r\n\r\nGedung Bank NISP pada mulannya merupakan Gedung organisasi sosial Ons Aller Belang (OAB) yang selesai dibangun pada tahhun 1931 berdasarkan rancangan Biro Arsitek Brinkman en Voorhoeve. Bank NISP terletak di Tjibeunjing Plantsoen Zuidstraat (Sekarang Jl. Taman Cibeunying Selatan).\r\n', '0468eb674f31513fe2b13c794901169a.jpeg', 'https://youtu.be/NFQzDQoWUiE', '2023-05-24');

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
-- Table structure for table `login_simatera`
--

CREATE TABLE `login_simatera` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role_id` enum('admin','member','','') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_active` enum('yes','no') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_simatera`
--

INSERT INTO `login_simatera` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(11, 'Rihma', 'rihma@gmail.com', 'default.jpg', '$2y$10$lpZYtHT9/iK8LbnFVQdNnO3yk7kJOu91brUthuymH76D.kU44LUiO', 'member', 'yes', '2023-05-15 05:14:04'),
(24, 'Rijal Fauzi Iskandar', 'rijalfauziiskandar93.rfi@gmail.com', 'default.jpg', '$2y$10$EDBocT0zrDPSO3D7cI.BpOw1QXu4hOSAItw4jlAOfFOKaW7YbQ3ZW', 'admin', 'yes', '2023-05-17 14:03:22'),
(25, 'Veronz', 'veronztv@gmail.com', 'default.jpg', '$2y$10$jzClWBxcY.hFITG18bfB/urGrN4ib1h0XT3gQtakUjWhfKOKJm/5i', 'member', 'yes', '2023-05-17 14:16:44'),
(27, 'Rijal Fauzi', 'rijalfauziiskandar4@gmail.com', 'default.jpg', '$2y$10$ETsBARiOY5.zteyilHiaZeh.RbN6RkjLJ5ifHoml5GZDmuVsqNT5e', 'member', 'yes', '2023-05-22 07:52:46'),
(29, 'Ammar Alif', 'ammaralifs@gmail.com', 'default.jpg', '$2y$10$81fjSwJVTa13u93u5pd2Nex9i6Jrb.LMoVUU3cH1TS6EHUz0ZICl6', 'member', 'yes', '2023-05-23 04:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `login_simatera_token`
--

CREATE TABLE `login_simatera_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(50, 'rijalfauziiskandar4@gmail.com', 'vRnP8+Niry8lkfENbgGgxqhhyWrCyHnOcppBov2P58U=', 1684815489),
(53, 'ammaralifs@gmail.com', 'xMZhZKccDHQh3R1sVzqcw/owhfL5EuzETLHgI9/zVzE=', 1684817308);

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
-- Indexes for table `artikel_simatera`
--
ALTER TABLE `artikel_simatera`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_simatera`
--
ALTER TABLE `login_simatera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_simatera_token`
--
ALTER TABLE `login_simatera_token`
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
-- AUTO_INCREMENT for table `artikel_simatera`
--
ALTER TABLE `artikel_simatera`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_simatera`
--
ALTER TABLE `login_simatera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `login_simatera_token`
--
ALTER TABLE `login_simatera_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
