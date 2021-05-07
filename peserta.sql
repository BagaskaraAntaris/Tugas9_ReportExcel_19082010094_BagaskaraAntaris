-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2021 pada 16.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` int(30) NOT NULL,
  `tglform` varchar(200) NOT NULL,
  `jenispendaftaran` varchar(200) NOT NULL,
  `tglmasuksekolah` date NOT NULL,
  `nis` varchar(200) NOT NULL,
  `nmrpeserta` varchar(200) NOT NULL,
  `paud` varchar(200) NOT NULL,
  `tk` varchar(200) NOT NULL,
  `skhun` varchar(200) NOT NULL,
  `ijazah` varchar(200) NOT NULL,
  `hobi` varchar(200) NOT NULL,
  `cita` varchar(200) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `jk` varchar(200) NOT NULL,
  `nisn` varchar(200) NOT NULL,
  `nik` varchar(200) NOT NULL,
  `tempatlahir` varchar(200) NOT NULL,
  `tgllahir` date NOT NULL,
  `agama` varchar(200) NOT NULL,
  `bkpribadi` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt` varchar(200) NOT NULL,
  `rw` varchar(200) NOT NULL,
  `namadusun` varchar(200) NOT NULL,
  `namadesa` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `kdpos` varchar(200) NOT NULL,
  `tinggal` varchar(200) NOT NULL,
  `transportasi` varchar(200) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `notelp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `penkip` varchar(200) NOT NULL,
  `nokip` varchar(200) NOT NULL,
  `kwn` varchar(200) NOT NULL,
  `namaayah` varchar(200) NOT NULL,
  `thnlahirayah` date NOT NULL,
  `pendikayah` varchar(200) NOT NULL,
  `kerjaayah` varchar(200) NOT NULL,
  `hasilayah` varchar(200) NOT NULL,
  `bkayah` varchar(200) NOT NULL,
  `namaibu` varchar(200) NOT NULL,
  `thnlahiribu` date NOT NULL,
  `pendikibu` varchar(200) NOT NULL,
  `kerjaibu` varchar(200) NOT NULL,
  `hasilibu` varchar(200) NOT NULL,
  `bkibu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
