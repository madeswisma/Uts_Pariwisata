-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2020 pada 15.30
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_wisata`
--

CREATE TABLE `daftar_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `jam_buka` varchar(100) NOT NULL,
  `jam_tutup` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_wisata`
--

INSERT INTO `daftar_wisata` (`id_wisata`, `nama_wisata`, `jam_buka`, `jam_tutup`, `deskripsi`, `foto`) VALUES
(1, 'Mayong Selfie', '08.00', '18.00', 'Ayo Buruan Ke Mayong Selfie', 'ayunan1.jpg'),
(2, 'Nature Tracking', '08.00', '16.00', 'Enjoy Your Tracking', 'kik.png'),
(3, 'Ayunan', '08.00', '16.00', 'Ayo Nikmati Keseruannya', 'ayunan.jpg'),
(4, 'Rest Area View', '08.00', '16.00', 'Nikmati Perjalannya', 'kumpul.png'),
(5, 'Loloh Pak Arya', '-', '-', 'Meloloh Dumun Semeton', 'loloh.jpg'),
(8, 'Loloh Pak Arya', '08.00', '16.00', 'Nikmati Pemandangannya', 'mayong2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama_informasi` varchar(256) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `nama_informasi`, `deskripsi`, `foto`) VALUES
(1, 'Pariwisata Desa Mayong', 'Singaraja (Antaranews Bali) - Warga Desa Mayong, Kecamatan Seririt, Kabupaten Buleleng,mempertahankan persawahan dan perkebunan untuk ketahanan pangansekaligus daya tarik wisata, mengingat wisatawan luar negeri sudah mengenal desa itu sebagai desa agraris ', 'mayong3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_wisata`
--
ALTER TABLE `daftar_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indeks untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_wisata`
--
ALTER TABLE `daftar_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
