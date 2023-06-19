-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 08:18 AM
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
-- Table structure for table `artikel_simatera`
--

CREATE TABLE `artikel_simatera` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `artikel` varchar(10000) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Foto2` varchar(255) NOT NULL,
  `Foto3` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel_simatera`
--

INSERT INTO `artikel_simatera` (`id_artikel`, `judul`, `artikel`, `kategori`, `Foto`, `Foto2`, `Foto3`, `Video`, `tanggal`) VALUES
(1, 'Pusat Pemerintahan Gemeente', 'Pemerintah Hindia Belanda akan membentuk gewestelijk raden (dewan dewan wilayah) untuk wilayah setingkat keresidenan dan plaatselijk raden (dewan dewan lokal) untuk wilayah setingkat kabupatan. Untuk wilayah yang luasnya di bawah kabupaten, yakni wilayah kota, akan dibentuk gemeentelijk resort atau gemeente. Pada dasarnya, pembentukan gemeente dilakukan untuk melayani kepentingan masyarakat Eropa, khususnya Belanda. Faktor pendorongnya adalah suatu pemikiran bahwa masyarakat Eropa dan non-Eropa harus tunduk terhadap hokum Eropa, bukan hokum masyarakat pribumi. Dengan perkataan lain, pembentukan gemeente ini tidak dimaksudkan untuk memberikan pelayanan langsung kepada masyrakat pribumi, meskipun pada akhirnya masyarakt pribumi menikmati berbagai prasarana dan sarana yang dibangun pemerintahan gemeente. Pemerintahan Hindia Belanda membentuk gemeente Bandung berdasarkan Ordonansi tanggal 21 maret 1906 dan Undang-Undang tanggal 1 maret 1906 yang diresmikan oleh Gubernur Jenderal J.B.van Heutz pada 1 april 1906. Ketika dibentuk gemeente Bandung dipimpin oleh E. A. Maurenbrecher. Sebagaimana lazimnya dan juga untuk keperluan protokoler, Pemerintahan Gemeente Bandoeng menetapkan sebuah lambang kota yang menjadi simbol jatidiri warga Bandung pada saat itu.\r\n', 'Sejarah', 'b9970b110ec2bb096a0a463e8216c0ed.jpeg', '639724af51d29b4c4f0e2c575c7b1e1f.jpg', '899da1e2e26f2268cae968204cdd0022.jpg', 'https://www.youtube.com/watch?v=M5GT34tjydM', '2023-05-23'),
(2, 'Museum Geologi', 'Museum Geologi terletak di Rembrandt Straat, sekarang Jalan Diponegoro. Gedung bergaya Art Deco ini adalah bangunan modern pada zamannya. Dirancang oleh arsitek Belanda Ir.H.M.van Schouwenburg dan Geologisch Laboratorium, Gedung Museum Geologi dibangun pada 1928 dan diresmikan dengan nama &quot;Geologische Museum&quot; pada 16 Mei 1929 bertepatan dengan penyelenggaraan Kongres Ilmu Pengetahuan Pasifik yang ke IV. Pembangunan dikerjakan selama 11 bulan dengan 300 pekerja dan menghabiskan dana 400.000 Gulden dibangun dengan arsitektur bergaya Art Deco. Geologisch Laboratorium, disebut juga Geologisch Museum, dibangun oleh Pemerintah Hindia Belanda untuk mendokumentasi seperti batuan, mineral, serta fosil yang dikumpulkan para ahli geologi dari berbagai daerah di Kawasan Hindia Belanda. Sekarang Museum Geologi adalah bagian dari Departemen Energi dan Sumber Daya Mineral, Republik Indonesia.\r\n', 'Museum', 'a5c5eacc5cfb0a59ea234ee85140c35c.jpg', '27c631b13f182d7e45f6a64b34093c43.jpg', '832755aa931d17989c568347cd290a30.jpeg', 'https://www.youtube.com/@museumgeologi', '2023-05-23'),
(3, 'Museum KAA', 'Gedung bekas Sicueteit Concordia yang juga digunakan sebagai tempat Konferensi Asia Afrika tahun 1955, setelah konferensi kemudian menjadi bagian dari Gedung Merdeka. Setelah Dewan konstituante dibubarkan tahun 1959 dan setelah Majelis Permusyawaratan Rakyat sementara (MPRS) bersidang di Jakarta (1996), Gedung bekas Societeit Concordia ini dijadikan Museum Konferensi Asia Afrika dan Perpustakaan Gedung Merdeka (1970-an) sampai sekarang. Atas prakarsa Asisten Residen Pieter Sijthoff, Societeit (tempat pertemuan sosial dan rekreasi ) dibentuk di Bragaweg (Jl. Braga) menempati bangunana berdinding bilik milik seorang Cina. Mengingat perngunjung bertambah ramai makan tahun 1870 Societeit dipindahkan ke sebuah bangunan berdinding papan yang lebih luas di sisi barat Hotel Post Road (Kemudian menjadi Grand Hotel Homann) dan diberi nama Concordia.\r\n', 'Museum', '880cfb55b15d58543446c5bee312b1b3.jpg', '1e4566a4a2ad33a300b9dbda9c2fd584.jpeg', '1b44e49659863e30d539a6ce211ef4c6.jpeg', 'https://www.youtube.com/watch?v=l17gpK3TdtA', '2023-05-24'),
(4, 'Piesterspark', 'Pieter Sijthoffpark adalah taman tertua yang dibangun di Kota Badnung. Piter Sijthoffpark yang lebih dikenal dengan nama Pieterspark dibangun pada tahun 1885, untuk mengenang jasa besar Asister Residen Priangan Pieter Sijtjoff kepada perkembangan kota Bandung. Perancang taman adalah R. Teusher seorang Botanikus yang bertempat tinggal di pojok jalan Tamblong dan jalan Naripan, pada tahun 2005 bangunan tersbut dihancurkan untuk membangun pompa bensin. Pieterspark merupakan salah satu dari banyak taman lainnya yang menjadikan Kota Bandung dikenal sebagai Kota Taman (1936). Tatakota Kota Bandung memang dirancang mengacu kepada konsep kota taman (garden city) seperti negara-negara di Eropa. Taman Pieterspark banyak ditanami pohon pelindung, pohon hias dan tanaman hias serta berbagai jenis bunga-bungaan. Sebuah taman yang sederhana tetapi mempesona.\r\n', '0', '19da88ca38701a278ce18e41e45bbf24.jpg', '', '', 'https://youtu.be/Im2GisQ3Tpk', '2023-05-24'),
(5, 'Sejarah Bank NISP', 'Bank OCBC NISP (Sebelumnya dikenal dengan Bank NISP) merupakan bank tertua keempat di Indonesia, yang didirikan pada tanggal 4 April 1941 di bandung dengan nama NV. Nerderlandsch Indische Spaar En Deposito Bank (N.I.S.P). Bank OCBC NISP kemudian berkembang menjadi bank yang solid dan handal, terutama melayani segemn Usaha Kecil dan Menengah (UKM). Bank OCBC NISP resmi menjadi bank komersial pada tahun 1967. Tahun 1994 Bank Nisp Menjual sahamnya kepada masyarakat (go public). Bank NISP merupakan bank yang sangat berhati hati dan dapat dikatakan sebagai bank yang sifatnya konservatif, baik dari segi operasinya maupun para pemimpin banknya. Bank ini juga merupakan bank yang tidak agresif untuk melakukan ekspansi dan memperluas jaringan operasinya tanpa perhitungan yang matang, sehingga pada masa krisis moneter menimpa Indonesia sejak tahun 1997, Bank NISP dapat tetap bertahan dan bahkan berkembang. Gedung Bank NISP pada mulannya merupakan Gedung organisasi sosial Ons Aller Belang (OAB) yang selesai dibangun pada tahhun 1931 berdasarkan rancangan Biro Arsitek Brinkman en Voorhoeve. Bank NISP terletak di Tjibeunjing Plantsoen Zuidstraat (Sekarang Jl. Taman Cibeunying Selatan).\r\n', 'Museum', 'b862bb0a76c644890d5639172be2045c.jpeg', '3d580e7daaa8026d913333412718e94f.jpeg', '6c1d417e4b40f26fa811df8897adf251.jpeg', 'https://youtu.be/NFQzDQoWUiE', '2023-05-24'),
(17, 'IIIII', 'JJJJ\r\n', '2', 'd931c96ea79ca759f908d1555bdc8ee8.jpg', 'ecd8dbc6cdc53c58d54f8dd1a6b7cec6.jpg', 'f8be8f0211dd5d6b81dbe51f80c0ad13.jpg', 'KKK', '2023-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategoricode` int(16) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategoricode`, `nama_kategori`) VALUES
(1, 'Sejarah'),
(2, 'Pendidikan'),
(3, 'Museum');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `login_oauth_uid` varchar(100) NOT NULL,
  `name` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` enum('yes','no','','') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_simatera`
--

INSERT INTO `login_simatera` (`id`, `login_oauth_uid`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(11, '', 'Rihma', 'rihma@gmail.com', 'default.jpg', '$2y$10$lpZYtHT9/iK8LbnFVQdNnO3yk7kJOu91brUthuymH76D.kU44LUiO', 2, 'yes', '2023-06-15 03:09:23'),
(24, '', 'Rijal Fauzi Iskandar', 'rijalfauziiskandar93.rfi@gmail.com', 'default.jpg', '$2y$10$EDBocT0zrDPSO3D7cI.BpOw1QXu4hOSAItw4jlAOfFOKaW7YbQ3ZW', 1, 'yes', '2023-06-14 07:45:05'),
(29, '', 'Ammar Alif', 'ammaralifs@gmail.com', 'default.jpg', '$2y$10$81fjSwJVTa13u93u5pd2Nex9i6Jrb.LMoVUU3cH1TS6EHUz0ZICl6', 2, 'yes', '2023-06-15 03:09:29'),
(30, '', 'fauzi iskandar', 'rijal.fauzi@widyatama.ac.id', 'default.jpg', '$2y$10$vb1P.rxaq/1iaomiyLI0G.sUUvxPpylhkMYN1ErcmEOBwYLWswN6e', 2, 'yes', '2023-06-15 03:09:33'),
(73, '111338418244761899298', 'Rijal Fauzi Iskandar', 'rijalfauziiskandar93.rfi@gmail.com', '', '', 2, 'yes', '2023-06-16 06:23:08'),
(75, '111197384953197867127', 'REG.A/0620101061/RIJAL FAUZI', 'rijal.fauzi@widyatama.ac.id', '', '', 2, 'yes', '2023-06-16 07:44:31'),
(77, '100632164184714595705', 'Veronz TV', 'veronztv@gmail.com', '', '', 2, 'yes', '2023-06-19 04:25:32'),
(79, '', 'Rijal Fauzi', 'rijalfauziiskandar4@gmail.com', 'default.png', '$2y$10$jUWe/T4lPklIrHmNn9xf1O01YAUsGHjo6MmtysQeRzaXeke/hCHNq', 2, 'yes', '2023-06-19 03:52:00');

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
(53, 'ammaralifs@gmail.com', 'xMZhZKccDHQh3R1sVzqcw/owhfL5EuzETLHgI9/zVzE=', 1684817308),
(63, 'rijalfauziiskandar4@gmail.com', 'k4/+8aPaIMV/x2cq5b/OVrV56n5pavdqxc0b9zFzJiU=', 1687146693);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `alamat`, `no_telp`, `email`, `facebook`, `twitter`, `instagram`, `tentang_kami`) VALUES
(1, 'Jl. Wastukencana No.2, Babakan Ciamis, Kec. Sumur ', 224234793, 'diskominfo@bandung.go.id', 'https://www.facebook.com/DiskominfoBandung', 'https://twitter.com/DiskominfoBdg', 'https://www.instagram.com/diskominfobdg', 'Selamat datang di website kami! Kami adalah platform yang didedikasikan untuk menyediakan informasi dan layanan yang bermanfaat bagi pengunjung kami. Website kami menyajikan berbagai informasi terkini dan terpercaya tentang tempat bersejarah di kota Bandung.\r\n\r\nKami selalu berusaha untuk memberikan pengalaman terbaik bagi pengunjung kami dengan menyediakan tampilan yang mudah digunakan dan responsif di berbagai perangkat. Website kami juga dilengkapi dengan fitur pencarian dan navigasi yang mudah untuk membantu pengunjung menemukan informasi yang mereka cari dengan cepat.\r\n\r\nKami berharap website kami dapat membantu meningkatkan pengetahuan dan kehidupan sehari-hari pengunjung kami dan menjadi sumber informasi yang terpercaya dan berguna. Terima kasih telah mengunjungi website kami!');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(128) NOT NULL,
  `menu_id` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_simatera`
--
ALTER TABLE `artikel_simatera`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategoricode`);

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
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_masukan`
--
ALTER TABLE `user_masukan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel_simatera`
--
ALTER TABLE `artikel_simatera`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategoricode` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_simatera`
--
ALTER TABLE `login_simatera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `login_simatera_token`
--
ALTER TABLE `login_simatera_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_masukan`
--
ALTER TABLE `user_masukan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
