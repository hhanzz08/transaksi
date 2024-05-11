-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Bulan Mei 2024 pada 07.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga_barang` int(255) NOT NULL,
  `stok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `stok`) VALUES
(2, 'sepatu', 90000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `nomor_telepon` int(14) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `nomor_telepon`, `email`) VALUES
(3, 'raihan', 9820845, 'kiuumfjaodnkmnnifx@bbitq.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `kode_dosen` varchar(20) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `status_dosen` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `kode_dosen`, `nama_dosen`, `status_dosen`) VALUES
(2, 'DS0002', 'subhan', '1'),
(6, 'DS0005', 'huhu', '1'),
(7, 'DS0006', 'asep galon', '1'),
(8, 'DS0006', 'asep galon', '1'),
(9, 'DS0006', 'asep galon', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(30) NOT NULL,
  `id_transaksi_header` int(30) NOT NULL,
  `id_barang` int(30) NOT NULL,
  `qty` int(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi_header`, `id_barang`, `qty`, `harga`, `jumlah`) VALUES
(2, 1, 1, 11, 40000, 5),
(3, 3, 2, 7, 90000, 630000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_header`
--

CREATE TABLE `transaksi_header` (
  `id_transaksi_header` int(20) NOT NULL,
  `id_customer` int(25) NOT NULL,
  `nomor_transaksi` varchar(50) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total` int(255) NOT NULL,
  `diskon` int(50) NOT NULL,
  `ppn` int(50) NOT NULL,
  `grand_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi_header`
--

INSERT INTO `transaksi_header` (`id_transaksi_header`, `id_customer`, `nomor_transaksi`, `tanggal_transaksi`, `total`, `diskon`, `ppn`, `grand_total`) VALUES
(2, 1, '1', '2024-05-11', 80000, 2, 5, 800000),
(3, 3, 'TRX32140405112024', '2024-05-11', 630000, 6, 11, 661500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `created_at`, `updated_at`) VALUES
(1, 'hanz', '$2y$10$m.gnQXRerEJLT6JewPoeZOXnIfmmriBw1ZojPMR0ptws2z/A4QZxG', 'raihan', '2024-04-19 06:54:53', '2024-04-19 06:54:53'),
(2, 'dani', '$2y$10$nG5wod2Bn/WBwaVWZ/IVc.jKNpNgcA7ze8ZD.Bu3obcza/bPMIaJW', 'Dani', '2024-04-19 13:42:31', '2024-04-19 13:42:31'),
(3, 'arfan', '$2y$10$B7dTUYvcy/QBPE7vmExj4OeTWw.xdSADK1wBu0UB82x0/W4LdzLqW', 'arfan', '2024-04-19 13:51:19', '2024-04-19 13:51:19'),
(4, 'zidan', '$2y$10$m.dzyPgVKOkL6/mbbG3Xw.im9KehVkmK15usL0vGusNcWTbpPpcoG', 'zidan', '2024-04-19 14:42:16', '2024-04-19 14:42:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`);

--
-- Indeks untuk tabel `transaksi_header`
--
ALTER TABLE `transaksi_header`
  ADD PRIMARY KEY (`id_transaksi_header`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi_header`
--
ALTER TABLE `transaksi_header`
  MODIFY `id_transaksi_header` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
