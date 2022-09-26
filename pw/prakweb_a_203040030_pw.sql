-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2022 pada 09.20
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_a_203040030_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode_buku` int(5) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `gambar`, `harga`) VALUES
(1, 'Hujan', 'Tere Liye', 'Hujan.jpg', 89000),
(2, 'Laut Bercerita', 'Leila S.Chudori', 'Laut Bercerita.jpg', 190000),
(3, 'Where The Crawdads Sing', 'Delia Owens', 'Where The Crawdads Sing.jpg', 100000),
(4, 'Anak-Anak Semar', 'Sindhunata', 'Anak Anak Semar.jpg', 96000),
(5, 'Air Mandi Mayat', 'Randu Alamsyah', 'Air Mandi Mayat.jpg', 95500),
(6, 'Misteri Lantai 13', 'Lee Thayer', 'Misteri Lantai 13.jpg', 97750),
(7, 'Novel Bersyukur Tanpa Libur', 'Arswendo Atmowiloto', 'Novel Bersyukur Tanpa Libur.jpg', 104250),
(8, 'The Bloody Rose', 'Daras Resvirandira', 'The Bloody Rose.jpg', 68000),
(9, 'Novel Ancika Dia Yang Bersamaku Tahun 1995', 'Pidi Baiq', 'Novel Ancika Dia Yang Bersamaku Tahun 1995.jpg', 83300),
(10, 'Novel Snow Dancer', 'Antje Babendererde', 'Novel Snow Dancer.jpg', 100000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `kode_buku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
