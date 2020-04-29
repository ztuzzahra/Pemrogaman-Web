-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2019 pada 16.18
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
 
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
 
--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------
 
--
-- Struktur dari tabel `covid_19`
--
 
CREATE TABLE `covid_19` (
  `id_negara` int(17) NOT NULL,
  `negara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Dumping data untuk tabel `covid_19`
--
 
INSERT INTO `covid_19` (`id_negara`, `negara`) VALUES
(1, 'USA'),
(2, 'Spain'),
(3, 'Italy'),
(4, 'France'),
(5, 'UK'),
(6, 'Germany'),
(7, 'Turkey'),
(8, 'Russia'),
(9, 'Iran'),
(10, 'China');
 
-- --------------------------------------------------------
 
--
-- Struktur dari tabel `total_cases`
--
 
CREATE TABLE `total_cases` (
  `id_kasus` int(17) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `total` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Dumping data untuk tabel `total_cases`
--
INSERT INTO `total_cases` (`id_kasus`,`id_negara`,`total`) VALUES
(1, 1, 1029878),
(2, 2, 232128),
(3, 3, 201505),
(4, 4, 165911),
(5, 5, 161145),
(6, 6, 159431),
(7, 7, 114653),
(8, 8, 93558),
(9, 9, 92584),
(10, 10, 82836);

--
-- Indexes for dumped tables
--
 
--
-- Indeks untuk tabel `covid_19`
--
ALTER TABLE `covid_19`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `total_cases`
  ADD PRIMARY KEY (`id_kasus`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
 
--
-- AUTO_INCREMENT untuk tabel `covid_19`
--
ALTER TABLE `covid_19`
  MODIFY `id_negara` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `total_cases`
  MODIFY `id_kasus` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;