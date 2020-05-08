-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 10:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinomix`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
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
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `id_penjual`, `stok`, `harga`, `gambar`, `id_kategori`) VALUES
(1, 'Vas Bunga', 2, 7, '80000', 'Screenshot_(17).png', 2),
(2, 'Cobek', 1, 5, '120000', '', 1),
(3, 'Piring', 3, 4, '70000', '', 2),
(4, 'Gucci', 2, 9, '2000000', 'Screenshot_(18).png', 1),
(6, 'Vas Bunga', 2, 7, '80000', 'Screenshot_(14).png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'terapan'),
(2, 'estetika');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama`) VALUES
(1, 'J&T');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `no. rek` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `jenis`, `no. rek`) VALUES
(1, 'BCA', '1005905');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
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
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `email`, `alamat`, `telepon`, `username`, `password`) VALUES
(1, 'Warsini', 'warsini@gmail.com', 'Jl. Semeru 02 Malang', '08989898203', 'warsini', 'warsini');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id_penjual`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Anggie Akbar', 'anggie@gmail.com', 'anggie', 'anggie'),
(2, 'Martono', 'martono@gmail.com', 'martono', 'martono'),
(3, 'Fridha', 'fridha@gmail.com', 'fridha', 'fridha');

--
-- Triggers `penjual`
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
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_kurir` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `status` enum('pesan','bayar','kirim','selesai','batal') NOT NULL,
  `jumlah` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_penjual`, `id_pembeli`, `id_barang`, `id_kurir`, `id_pembayaran`, `status`, `jumlah`) VALUES
(3, 2, 1, 1, 1, 1, 'pesan', '3');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `TG_STOKUPDATE_BARANG` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
	UPDATE barang SET stok=stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

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
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_penjual` (`id_penjual`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_kurir` (`id_kurir`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_barang` (`id_barang`);

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
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_kurir`) REFERENCES `kurir` (`id_kurir`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
