-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 10:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rendax`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `kategori`, `harga`, `deskripsi`, `gambar`) VALUES
(14, 'Kimono Lolita Maid Dress', 'perempuan', 'Rp. 1.000.000', 'My Dress-Up Darling Marin Kitagawa Cosplay Costume Kimono Lolita Maid Dress Outfits Halloween Carnival SuitMaterial: Uniform ClothPackage included: Dress + ap + Neckband + Hair Accessories + Stocking*2 + Necktie + Bowtie', 'e3faaa96d27f6d937229a7fdfa10fe72.jpg'),
(15, 'Shinobu Kocho', 'laki-laki', 'Rp. 2.500.000', 'Demon Slayer Kimetsu no Yaiba Shinobu Kocho Cosplay Kostüm KimonoAnime: Demon Slayer Kimetsu no YaibaCharakter: Shinobu KochoStoff:', '4c3cccf6a7dcf456d7977c16482665f0.jpg'),
(16, 'Kontol', 'laki-laki', '12121212asd', 'asdasdasd', 'content3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_telfon` varchar(25) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `nama_panjang` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `status_bekerja` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `level`, `email`, `nomor_telfon`, `alamat_rumah`, `nama_panjang`, `jenis_kelamin`, `status_bekerja`) VALUES
('admin', 'f115aa0967ed37eea59d0d3222fbc81c', 'admin', 'rendyatika20@gmail.com', '0895621111615', 'Jalan gadang gang 15 RT 08 RW 02 Nomor 22A', 'Muhammad Rendy Ramadani', 'Laki - Laki', 'Pelajar'),
('laksaganteng', 'f115aa0967ed37eea59d0d3222fbc81c', 'user', 'laksamana.arya1412@gmail.com', '08972836884', 'mbareng lur', 'Laksamana AryaPutra', 'Laki Laki', 'Direktur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
