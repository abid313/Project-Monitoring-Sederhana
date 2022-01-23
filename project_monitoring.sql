-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2022 pada 18.19
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketua` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_end` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progress` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `judul`, `ketua`, `date_start`, `date_end`, `nama`, `progress`) VALUES
(8, 'Pembuatan SI Keuangan', 'Indra Setiawan', '14 Jan 2022', '14 Agu 2022', 'Bakeuda Prov. Kalsel', '30'),
(9, 'Learning Management System', 'Hilman Syaputera', '30 Jan 2022', '10 Mar 2022', 'Ruang Guru', '80'),
(10, 'SI Pendataan Atlet Daerah', 'Febri Gunawan', '02 Feb 2022', '30 Mei 2022', 'Dispora Jawa Timur', '40'),
(11, 'Employee Monitoring', 'Handoko Aji', '02 Sep 2021', '15 Jan 2022', 'PT. Bina Sarana Sukses', '100'),
(12, 'Pembuatan Project Monitoring Sederhana', 'Muhammad Abid Fajar', '23 Jan 2022', '24 Jan 2022', 'Youtube', '80');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
