-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 16.43
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sl-2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `midname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `ttl` date NOT NULL,
  `nik` char(16) NOT NULL,
  `warganegara` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `pos` char(5) NOT NULL,
  `file` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `firstname`, `midname`, `lastname`, `tempat`, `ttl`, `nik`, `warganegara`, `email`, `nohp`, `alamat`, `pos`, `file`, `username`, `password`) VALUES
(7, 'Pascal', 'Wilman', 'Giovanni', 'Bogor', '2022-03-31', '1234567890123456', 'Indonesia', 'pascalwilman@gmail.com', '089734561234', 'Cibinong Bogor', '16918', 'pascal.png', 'wawanbakwan', 'bWFudGFw'),
(8, 'Abdi', 'Negara', 'Ahmad', 'Jakarta', '2022-03-27', '8877665544332211', 'Indonesia', 'ahmadhartono@gmail.com', '089764531234', 'Kebon Jeruk Jakarta Barat', '09090', 'Circle Profile Photo Social Media Abstract Shapes.png', 'budihartono', 'YXNpYXA=');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
