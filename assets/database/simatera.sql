-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2023 pada 06.35
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `artikel_simatera`
--

CREATE TABLE `artikel_simatera` (
  `judul_id` int(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `artikel` varchar(10000) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel_simatera`
--

INSERT INTO `artikel_simatera` (`judul_id`, `judul`, `artikel`, `Foto`, `Video`) VALUES
(0, 'Sejarah Balai Kota Bandung', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus', 'BalaiKotaBandung.jpg', 'BalaiKotaBandung.mp4'),
(1, 'Sejarah Balai Kota Bandung', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus', 'BalaiKotaBandung.jpg', 'BalaiKotaBandung.mp4'),
(0, 'a', '<p>a</p>', '', ''),
(0, 'a', '<p>a</p>', '', ''),
(0, 's', '<p>s</p>', '', ''),
(0, 't', '<p>t</p>', '', ''),
(0, 'z', '<p>z</p>', '', ''),
(0, 'w', '<p>w</p>', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id`, `username`, `email`, `password`) VALUES
(1, 's', 's@s', 's'),
(2, 'q', 'q@a', 'a'),
(3, 'sada', 'dadas@dsaf', 'adasa'),
(4, 'R', 'Rekid127@gmail.com', 'Kanekiken'),
(7, 'dsasa', 'rijalfauziiskandar93.rfi@gmail.com', 'jsafsasfa'),
(8, 'FSAFSA', 'rijalfauziiskandar4@gmail.com', 'fsabsajasj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_masukan`
--

CREATE TABLE `user_masukan` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_masukan`
--

INSERT INTO `user_masukan` (`nama`, `email`, `subjek`, `pesan`) VALUES
('a', 'a@a', '', 'a'),
('a', 'a@a', 'a', 'a'),
('s', 's@s', 's', 's'),
('s', 's@ss', 's', 's'),
('sdsa', 'dsa@dsa', 'dsa', 'das'),
('das', 'dsa@ds', 'dsa', 'dsa'),
('dsa', 'dsa@dsa', 'dsa', 'dsa'),
('dsa', 'dsa@dsa', 'das', 'das'),
('das', 'da@da', 'da', 'dsa'),
('dsa', 'das@dsa', 'dsa', 'dsa'),
('dsa', 'das@dsa', 'dsa', 'dsa'),
('dsa', 'dsa@dsa', 'dsa', 'das'),
('dsa', 'dsadsad@dsa', 'dsadsa', 'dsad'),
('dsadsa', 'dsaddsa@dada', 'das', 'das'),
('dsa', 'dsa@das', 'dsa', 'dsa'),
('cxz', 'cxz2s@dsa', 'das', 'dsa'),
('sda', 'dsadsas@dsad', 'saddsa', 'dsadas'),
('dsa', 'das@dsa', 'dsa', 'das');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
