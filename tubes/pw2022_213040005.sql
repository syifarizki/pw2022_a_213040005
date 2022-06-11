-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220609.11e34a6fec
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 03.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2022_213040005`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Galaxy S'),
(2, 'Galaxy Z'),
(3, 'Galaxy A'),
(4, 'Galaxy M'),
(5, 'Galaxy Note');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `tipe` varchar(60) NOT NULL,
  `kategori` int(11) NOT NULL,
  `memori` varchar(20) NOT NULL,
  `rear_camera` varchar(50) NOT NULL,
  `front_camera` varchar(20) NOT NULL,
  `baterai` varchar(30) NOT NULL,
  `harga` varchar(40) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `tipe`, `kategori`, `memori`, `rear_camera`, `front_camera`, `baterai`, `harga`, `gambar`) VALUES
(3, 'Galaxy S22 Ultra', 1, '256GB 12GB RAM', '108.0 MP + 10.0 MP + 12.0 MP + 10.0 MP', '40.0 MP', '5000 mAh', 'Rp 18.999.000', 's22ultra.jpg'),
(6, 'Galaxy S20 FE', 1, ' 256GB 8GB RAM', '12.0 MP + 12.0 MP + 8.0 MP', '32.0 MP', '4500 mAh', 'Rp 7.999.000', 's20fee.jpg'),
(7, 'Galaxy S21+', 1, ' 256GB 8GB RAM', ' 12.0 MP + 64.0 MP + 12.0 MP', '10.0 MP', '4800 mAh', 'Rp 14.999.000', 's21plus.jpg'),
(8, 'Galaxy Z Flip3 5G', 2, ' 256GB 8GB RAM', ' 12.0 MP + 12.0 MP', '10.0 MP', '3300 mAh', 'Rp 15.999.000', '62877c23ce85c.jpg'),
(9, 'Galaxy Z Fold3 5G', 2, ' 512GB 12GB RAM', '12.0 MP + 12.0 MP + 12.0 MP', '10.0 MP', '4400 mAh', 'Rp 26.999.000', '62878eccb277d.jpg'),
(10, 'Galaxy A73 5G', 3, '128GB 8GB RAM', '108.0 MP + 12.0 MP + 5.0 MP + 5.0 MP', ' F1.8 , F2.2 , F2.4 ', '5000 mAh', 'Rp 7.799.000', '62879276b9b6a.jpg'),
(11, 'Galaxy A23', 3, ' 64GB 6GB RAM', ' 50.0 MP + 5.0 MP + 2.0 MP + 2.0 MP', ' 8.0 MP', '5000 mAh', 'Rp 3.499.000', '628f6de265785.jpg'),
(12, 'Galaxy M52 5G', 4, '128GB 8GB RAM', '64.0 MP + 12.0 MP + 5.0 MP', ' 32.0 MP', '5000 mAh', 'Rp 5.399.000', '6290a510d79c0.jpg'),
(15, 'Galaxy M23 5G', 4, '128GB 6GB RAM', '50.0 MP + 8.0 MP + 2.0 MP', 'F1.8 , F2.2 , F2.4', '5000 mAh', ' Rp 3.699.000', '629d6b5f5b85c.jpg'),
(16, 'Galaxy Note20 Ultra 5G', 5, '256GB 8GB RAM', '108.0 MP + 12.0 MP + 12.0 MP', '10.0 MP', '4500 mAh', 'Rp 16.999.000', '629d6d6261ba3.jpg'),
(17, 'Galaxy Note10+', 5, '256GB 12GB RAM', ' 12.0MP + 16.0MP + 12.0MP + VGA', '10.0 MP', '4300 mAh', 'Rp 16.499.000', '629d709c18da1.jpg'),
(18, 'Galaxy Note9', 5, '128GB 8GB RAM', '12.0 MP + 12.0 MP + 64.0 MP', '10.0 MP', '4000 mAh', ' Rp 7.999.000', '62a0232281560.jpg'),
(21, 'Galaxy S21 FE 5G', 1, '128GB 8GB RAM', '12.0 MP + 12.0 MP + 8.0 MP', '32.0 MP', '4500 mAh', 'Rp 8.999.000', '62a33f8993e83.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(5, 'kevin', '$2y$10$ID5FfWxIQsz4F9sFZDhWHeNhcpiA1MeTreoB673Iw0Bv9kstobuZC'),
(10, 'syifa', '$2y$10$guBG3JyZ0MaUwC/vr.yZHeRSKbs2Y/6.PRsPkt/G6iSCLrEaUN7We'),
(11, 'seli', '$2y$10$fzybvBgJ5.g81/8mlzbbfeGnxwVVNbsFMOYnSgS8J8Q2lKzr0Cju.'),
(12, 'mega', '$2y$10$48XMP9azkgcIyM4UxmrLEeaqRJrj6RSSXEkvI0NsMixxrv08o1fD2'),
(13, 'indri', '$2y$10$o/0YyYE1nYspej3/f3ADfushuBiQOPTZg4K082dxnHKIo5D2k2KPy'),
(14, 'lala', '$2y$10$nlT4Oq1CQhMJcmBwLdmp7OMyClJEltgJVydkzFm37/klU9osA0daG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori` (`kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



