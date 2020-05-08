-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Des 2019 pada 08.24
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dinomixx`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL DEFAULT 'default.jpg',
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `id_penjual`, `stok`, `harga`, `gambar`, `id_kategori`) VALUES
(1, 'Vas Bunga', 2, 7, '80000', 'Screenshot_(17).png', 2),
(2, 'Cobek', 1, 5, '120000', '', 1),
(3, 'Piring', 3, 4, '70000', '', 2),
(4, 'Gucci', 2, 9, '2000000', 'Screenshot_(18).png', 1),
(6, 'Vas Bunga', 2, 7, '80000', 'Screenshot_(14).png', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'terapan'),
(2, 'estetika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama`) VALUES
(1, 'J&T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `telepon` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `email`, `alamat`, `telepon`, `username`, `password`) VALUES
(1, 'Warsini', 'warsini@gmail.com', 'Jl. Semeru 02 Malang', '08989898203', 'warsini', 'warsini'),
(2, 'Reza Berlian Ananda', 'rezaberlian4@gmail.com', 'jalan danau ranau', '081334695587', 'resa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(3, 'Reza Berlian Ananda', 'rezaberlian4@gmail.com', 'jalan danau ranau', '081334695587', 'woy', '35fa54da02afd861770b736261443e5384e4999a'),
(4, 'Reza Berlian Ananda', 'rezaberlian4@gmail.com', 'jalan danau ranau', '081334695587', 'reza', 'b96dbf74436b3f73db2f27c2fb7c966eb1f47360');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Anggie Akbar', 'anggie@gmail.com', 'anggie', 'anggie'),
(2, 'Martono', 'martono@gmail.com', 'martono', 'martono'),
(3, 'Fridha', 'fridha@gmail.com', 'fridha', 'fridha');

--
-- Trigger `penjual`
--
DELIMITER $$
CREATE TRIGGER `TG_DELETE_PENJUAL` AFTER DELETE ON `penjual` FOR EACH ROW BEGIN
	DELETE FROM barang WHERE id_penjual = old.id_penjual;
    DELETE FROM transaksi WHERE id_penjual=old.id_penjual;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_pembayaran` int(11) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `no. rek` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_pembayaran`, `jenis`, `no. rek`) VALUES
(1, 'BCA', '1005905');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_penjual` (`id_penjual`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `cart` (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
