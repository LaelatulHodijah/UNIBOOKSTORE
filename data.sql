-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2024 pada 07.49
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
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `nama_buku` varchar(100) DEFAULT NULL,
  `harga` decimal(10,3) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `id_buku`, `kategori`, `nama_buku`, `harga`, `stok`, `penerbit`) VALUES
(1001, 'K1001', 'Keilmuan', 'Analisis & Perancangan Sistem Informasi', 50.000, 60, 'Penerbit Informatika'),
(1002, 'K1002', 'Keilmuan', 'Artifical Intelligence', 45.000, 60, 'Penerbit Informatika'),
(1003, 'K2003', 'Keilmuan', 'Autocad 3 Dimensi', 40.000, 25, 'Penerbit Informatika'),
(1004, 'K3004', 'Keilmuan', 'Cloud Computing Tegnology', 85.000, 15, 'Penerbit Informatika'),
(2001, 'B1001', 'Bisnis', 'Bisnis Online', 75.000, 9, 'Penerbit Informatika'),
(2002, 'B1002', 'Bisnis', 'Etika Bisnis dan Tanggung Jawab Sosial', 67.500, 20, 'Penerbit Informatika'),
(3001, 'N1001', 'Novel', 'Cahya di Penjuru Hati', 68.000, 10, 'Andi Offset'),
(3008, 'M1003', 'rroman', 'Pacar pertama', 52.000, 15, 'Sayo'),
(3011, 'M1005', 'Informatika', 'Infromasi dan Teknologi Internet', 92.000, 5, 'Sayo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(11) NOT NULL,
  `id_penerbit` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id`, `id_penerbit`, `nama`, `alamat`, `kota`, `telepon`) VALUES
(1, 'SP01', 'Penerbit Informatika', 'Jl. Buah Batu No.121', 'Bandung', '0813-2220-1947'),
(2, 'SP02', 'Andi Offsite', 'Jl.Suryalaya IX No.3', 'Bandung', '0878-3903-0688'),
(3, 'SP03', 'Danendra', 'Jl.Moach. Toha 44', 'Bandung', '022-5201215');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3012;

--
-- AUTO_INCREMENT untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
