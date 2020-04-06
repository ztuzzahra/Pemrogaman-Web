-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2020 pada 15.20
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

---- Basis data: `bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'zabrina', 'ztuzzahra', 'rahasia12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftartamu`
--

CREATE TABLE IF NOT EXISTS `daftartamu` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `sex` char(2) NOT NULL,
  `nomer` varchar(13) NOT NULL,
  `email` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `pesan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `daftartamu`
--

INSERT INTO `daftartamu` (`id`, `nama`, `sex`, `nomer`, `email`, `alamat`, `kota`, `pesan`) VALUES
(1, 'zabrina', 'P', '892701298209', 'ztuzzahra1@gmai', 'dahlia', 'mlg', 'ujicoba1'),
(2, 'farrel', 'L', '1287653980', 'farrel@gmail.co', 'mawar', 'smg', 'ujicoba2'),
(3, 'farrel', 'L', '1287653980', 'farrel@gmail.co', 'mawar', 'smg', 'ujicoba2'),
(4, 'aby', 'L', '72817028-', 'abisanna@gmail.', 'bugenfil', 'sby', 'ujicoba3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
