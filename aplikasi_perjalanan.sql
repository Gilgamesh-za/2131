-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Mar 2022 pada 06.13
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_perjalanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perjalanan`
--

CREATE TABLE `tb_perjalanan` (
  `id_perjalanan` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time(6) NOT NULL,
  `ket` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perjalanan`
--

INSERT INTO `tb_perjalanan` (`id_perjalanan`, `id_user`, `lokasi`, `tanggal`, `waktu`, `ket`, `created_at`, `updated_at`) VALUES
(7, '12345678', 'Gogorante', '2022-03-01', '11:50:00.000000', 'Sehat', '0000-00-00 00:00:00', '2022-03-01 21:45:10'),
(8, '12345678', 'gogorante', '2022-03-01', '11:37:00.000000', 'Sehat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '123456789', 'Gogorante', '2022-03-02', '09:22:00.000000', 'Sehat', '2022-03-01 20:22:52', '2022-03-01 20:22:52'),
(10, '123456789', 'Gogorante', '2022-03-02', '09:32:00.000000', 'Sakit', '2022-03-01 20:31:18', '2022-03-01 20:31:18'),
(12, '12345678', 'malang', '2022-03-10', '12:00:00.000000', 'kerja', '2022-03-09 22:47:02', '2022-03-09 22:47:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `hp` varchar(20) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nik`, `password`, `nama`, `alamat`, `gender`, `hp`, `created_at`, `updated_at`) VALUES
(6, '12345678', '$2y$10$wucNzgQRF17HU3CnEnj6JunSowiPP2faEH7Vnr6ncm57DpF9WL2ra', 'Jager', 'Gogorante', 'L', '0812931237', 0, 0),
(7, '123456789', '$2y$10$xYot0OLSWGlcyYgl3Zl3QeGDfQVJ9RYW9updcENazyFOylsOeokG2', 'Aryo', 'Gogorante', 'L', '123456', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_perjalanan`
--
ALTER TABLE `tb_perjalanan`
  ADD PRIMARY KEY (`id_perjalanan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_perjalanan`
--
ALTER TABLE `tb_perjalanan`
  MODIFY `id_perjalanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
