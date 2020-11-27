-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2020 pada 18.48
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jual_beli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_barang`
--

CREATE TABLE `daftar_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_barang`
--

INSERT INTO `daftar_barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `berat`, `gambar`, `upload`) VALUES
(7, 'Mito', '700000', '12', '100', 'mito_mito-a62-note_full06.jpg', '2020-11-27 17:35:08'),
(8, 'Xiaomi', '1200000', '10', '1000', 'Xiaomi_Mi_CC9e_L_1.jpg', '2020-11-27 17:36:02'),
(10, 'Iphone', '12000000', '4', '1000', '149324-phones-review-review-iphone-11-pro-max-review-product-shots-image1-keant0hfcg.jpg', '2020-11-27 17:37:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pesanan`
--

CREATE TABLE `daftar_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `subHarga` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `password`, `phone`, `waktu`, `level`) VALUES
(9, 'Exova Indonesia', 'artha@exova.id', '12345678', 0, '2020-11-27 12:13:03', ''),
(10, 'Exova Indonesia', 'putragana10@gmail.com', '12', 81238169667, '2020-11-27 17:42:48', ''),
(11, 'admin', 'admin@gmail.com', 'admin', 0, '2020-11-27 17:44:16', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_barang`
--
ALTER TABLE `daftar_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_barang`
--
ALTER TABLE `daftar_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
