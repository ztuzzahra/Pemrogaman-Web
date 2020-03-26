-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2020 pada 22.07
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `covid19`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(15) NOT NULL,
  `Nominal` varchar(10) NOT NULL,
  `sex` char(2) NOT NULL,
  `Prop` varchar(33) NOT NULL,
  `Rekening` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `nama`, `email`, `Nominal`, `sex`, `Prop`, `Rekening`) VALUES
(1, '', '', '', '', '', ''),
(2, 'zabrina', 'ztuzzahra1@gmai', '300.000', 'P', '1', '18082010030'),
(3, 'farrel', 'farrel@gmail.co', '450.000', 'L', '14', '18082010089'),
(4, 'arif', 'arifmuntasa@gma', '1000.000', 'L', '22', '180820100987'),
(5, 'reny', 'reny@gmail.com', '350.000', 'P', '6', '180820100875'),
(6, 'aby', 'abian@gmail.com', '220.000', 'L', '18', '1808201003087');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
