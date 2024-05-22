-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2024 pada 02.31
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_users`
--

CREATE TABLE `mst_users` (
  `nama` varchar(50) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `job` varchar(255) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mst_users`
--

INSERT INTO `mst_users` (`nama`, `employe_id`, `job`, `no_hp`, `alamat`) VALUES
('Nafisah Rahmadani Harahap', 1, 'IT DEVELOPMENT', '085762686273', 'BUANA VISTA INDAH BLOK G NO.53'),
('Nafisah Rahmadani Harahap', 1, 'IT DEVELOPMENT', '085762686273', 'BUANA VISTA INDAH BLOK G NO.53'),
('Nafisah Rahmadani Harahap', 1, 'IT DEVELOPMENT', '085762686273', 'BUANA VISTA INDAH BLOK G NO.53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
