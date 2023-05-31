-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 09:30 AM
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
  `kategori` varchar(25) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Foto2` varchar(255) NOT NULL,
  `Foto3` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_simatera`
--
ALTER TABLE `artikel_simatera`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel_simatera`
--
ALTER TABLE `artikel_simatera`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
