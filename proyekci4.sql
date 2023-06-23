-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2023 pada 05.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(4, '2023-06-22-003416', 'App\\Database\\Migrations\\Users', 'default', 'App', 1687487114, 1),
(5, '2023-06-22-061902', 'App\\Database\\Migrations\\Sma', 'default', 'App', 1687487114, 1),
(6, '2023-06-23-022319', 'App\\Database\\Migrations\\Opd', 'default', 'App', 1687487114, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `opd`
--

CREATE TABLE `opd` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_instansi_opd` text NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `judul` text NOT NULL,
  `ringkasan` text NOT NULL,
  `tahun_penerapan` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `status` enum('lolos','tidak_lolos') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `opd`
--

INSERT INTO `opd` (`id`, `nama`, `nama_instansi_opd`, `no_hp`, `judul`, `ringkasan`, `tahun_penerapan`, `link`, `status`) VALUES
(1, 'sasvmijk', 'miimohuj', 'ijnujmnuhu8', 'nmjbubmnh', 'njijnjbuhb', 'ibuijumhuhu', 'jiumhuhuh', 'tidak_lolos'),
(2, 'Nuralam', 'Multimedia Rahman PT.', '082143874295', 'dsdsgre', 'reerg', 'dsger', 'sdger', 'lolos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sma`
--

CREATE TABLE `sma` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `judul` text NOT NULL,
  `ringkasan` text NOT NULL,
  `link` text NOT NULL,
  `status` enum('lolos','tidak_lolos') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `sma`
--

INSERT INTO `sma` (`id`, `nama`, `asal_sekolah`, `no_hp`, `judul`, `ringkasan`, `link`, `status`) VALUES
(1, 'rangga', 'nicsihvduih ', 'nijnhciosnuih ', 'niuhimihuh', 'nihumhimih', 'nihmuhmuhmiuhm ', 'tidak_lolos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','juri') NOT NULL DEFAULT 'juri'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', '$2y$10$30HbW/hOL91Jz.yN9Pme0ODv1YpHNUYV4jAebJbgmRrwsrv7Rqvli', 'admin'),
(2, 'user', 'user', '$2y$10$42l0z4RTOsISCghAh5Q17eZU22itRzuThhf.BABZKUDAZLpEvdJ5q', 'juri'),
(3, 'subadmin', 'subadmin', '$2y$10$E3yLA.JQzVmNnfBC1ZBmyuSPGJ2picsy5n/Fh.32fHLYqsn5gXdt2', 'juri'),
(4, 'nuralam ', 'alam ', '$2y$10$qr5J1fhEnEP7PEY6AIjxmuuPxHHTXmCvBqUnGNZeLUMVjJllQ/dTm', 'admin'),
(5, 'Rangga', 'rangga', '$2y$10$7IhrbeEYiFYmMvU8TGYuXO7FinG2nWeoLbW090Um5G.IOLzauftl2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sma`
--
ALTER TABLE `sma`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `opd`
--
ALTER TABLE `opd`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sma`
--
ALTER TABLE `sma`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
