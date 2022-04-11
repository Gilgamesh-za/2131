-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2022 pada 03.07
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
-- Struktur dari tabel `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_blog` int(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(16, '6', 'Gogorante', '2022-03-25', '09:52:00.000000', 'Sehat', '2022-03-24 21:48:46', '2022-03-24 21:48:46'),
(17, '6', 'Doko', '2022-03-12', '09:53:00.000000', 'Sakit', '2022-03-24 21:49:01', '2022-03-24 21:49:01'),
(18, '9', 'Gogorante', '2022-03-25', '13:11:00.000000', 'Sehat', '2022-03-24 22:06:09', '2022-03-24 22:06:09'),
(19, '9', 'Doko', '2022-03-31', '08:41:00.000000', 'Sehat', '2022-03-30 20:39:49', '2022-03-30 20:39:49');

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
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `akses` enum('admin','user') NOT NULL,
  `hp` varchar(20) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nik`, `password`, `nama`, `alamat`, `gender`, `akses`, `hp`, `created_at`, `updated_at`) VALUES
(13, '3576447103910003', '$2y$10$2CbN/GmhM/c0uD2yaYamYui4/7O/dgLN7kfMCP5RvaIv/t0Gq2KRS', 'Aryo', 'Gogorante', 'Laki-laki', 'admin', '08199771156', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_blog`);

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
-- AUTO_INCREMENT untuk tabel `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id_blog` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_perjalanan`
--
ALTER TABLE `tb_perjalanan`
  MODIFY `id_perjalanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
