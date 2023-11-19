-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 06:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_camping`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto_ktp` varchar(225) NOT NULL,
  `profil` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_pengguna`, `username`, `password`, `nama`, `hp`, `alamat`, `foto_ktp`, `profil`) VALUES
(2, '1', '1', ' sutiaja', '12345', 'malang kota', '1699848901_085c0f35bd256b7dbbc3.jpeg', '1699848901_cbd2e5add5a6152d1c68.jpeg'),
(32, '2', '2', 'udin', '2', '2', '1699968358_5915352f2be6a6312532.png', '1699969539_2cd4209b3457b7cbc06d.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akunadmin`
--

CREATE TABLE `tb_akunadmin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_akunadmin`
--

INSERT INTO `tb_akunadmin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `detail_barang` text NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `harga_sewa`, `detail_barang`, `stok`, `gambar`) VALUES
(1, 'taplak', 10000, ' penutup', 1, '1697022065_19f40cc79bc0f539ca76.jpg'),
(2, 'mouse', 10000, 'mouse laptop', 6, '1699752294_cfc4d69396588a063ecc.jpeg'),
(4, 'meja', 10000, 'meja belajar', 1, '1697022065_19f40cc79bc0f539ca76.jpg'),
(5, 'kursi', 10000, 'kursi duduk', 7, '1699752294_cfc4d69396588a063ecc.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurir`
--

CREATE TABLE `tb_kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama_kurir` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `area` enum('Luar Kota','Dalam Kota') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kurir`
--

INSERT INTO `tb_kurir` (`id_kurir`, `nama_kurir`, `hp`, `area`) VALUES
(1, 'selo', 'x', 'Luar Kota'),
(2, 'udin', '081209', 'Dalam Kota'),
(3, 'udin', '081209', 'Dalam Kota'),
(4, 'selo', 'x', 'Luar Kota'),
(5, 'udin', '081209', 'Dalam Kota'),
(6, 'udin', '081209', 'Dalam Kota');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sewa`
--

CREATE TABLE `tb_sewa` (
  `id_sewa` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(40) NOT NULL,
  `barang2` varchar(225) NOT NULL,
  `jumlah2` int(20) NOT NULL,
  `barang3` varchar(255) NOT NULL,
  `jumlah3` int(20) NOT NULL,
  `barang4` varchar(255) NOT NULL,
  `jumlah4` int(20) NOT NULL,
  `barang5` varchar(255) NOT NULL,
  `jumlah5` int(20) NOT NULL,
  `barang6` varchar(255) NOT NULL,
  `jumlah6` int(20) NOT NULL,
  `barang7` varchar(255) NOT NULL,
  `jumlah7` int(20) NOT NULL,
  `barang8` varchar(255) NOT NULL,
  `jumlah8` int(20) NOT NULL,
  `barang9` varchar(255) NOT NULL,
  `jumlah9` int(20) NOT NULL,
  `barang10` varchar(255) NOT NULL,
  `jumlah10` int(20) NOT NULL,
  `nama_pengguna` varchar(50) DEFAULT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `nama_kurir` varchar(50) DEFAULT NULL,
  `total_harga` text NOT NULL,
  `pembayaran` varchar(225) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `bukti` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sewa`
--

INSERT INTO `tb_sewa` (`id_sewa`, `nama_barang`, `jumlah_barang`, `barang2`, `jumlah2`, `barang3`, `jumlah3`, `barang4`, `jumlah4`, `barang5`, `jumlah5`, `barang6`, `jumlah6`, `barang7`, `jumlah7`, `barang8`, `jumlah8`, `barang9`, `jumlah9`, `barang10`, `jumlah10`, `nama_pengguna`, `tanggal_sewa`, `tanggal_kembali`, `nama_kurir`, `total_harga`, `pembayaran`, `status`, `bukti`) VALUES
(176, 'taplak', 1, 'kursi', 1, 'meja', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, ' sutiaja', '2023-11-15', '2023-11-16', 'udin', '35000', 'Cash', 'belum lunas', 'bayar cash');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ulasan`
--

CREATE TABLE `tb_ulasan` (
  `id_ulasan` int(25) NOT NULL,
  `id_pengguna` int(20) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ulasan` varchar(225) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_ulasan`
--

INSERT INTO `tb_ulasan` (`id_ulasan`, `id_pengguna`, `id_barang`, `ulasan`, `tanggal`) VALUES
(42, 32, 2, 'asaas', NULL),
(43, 32, 2, 'asaas', NULL),
(44, 32, 2, 'asaas', NULL),
(46, 32, 2, 'anjayyyy', NULL),
(49, 2, 1, 'keren banget', '2023-11-13'),
(50, 2, 1, 'asaas', '2023-11-14'),
(51, 32, 1, 'anjazz\r\n', '2023-11-14'),
(52, 2, 2, 'iyaa', '2023-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_akunadmin`
--
ALTER TABLE `tb_akunadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_akunadmin`
--
ALTER TABLE `tb_akunadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sewa`
--
ALTER TABLE `tb_sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `tb_ulasan`
--
ALTER TABLE `tb_ulasan`
  MODIFY `id_ulasan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
