-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 05:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `link` varchar(255) NOT NULL,
  `hilang` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `noHP` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tipeFile` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id`, `nama`, `tipe`, `link`, `hilang`, `alamat`, `deskripsi`, `noHP`, `status`, `tipeFile`, `email`) VALUES
(1, 'Abetnego', 'Anjing', 'ba3a3bcf-fe33-4069-bd89-0d5584624594', 'Tanggal 20-12-21. Lari dari pemiliknya di Bandara Sam Ratulangi', 'Bahu, Malalayang', 'Anjing ras jepang, warna coklat keemasan, pendek', '089876543212', 'Belum Di Laporkan', 'jpg', '20021106051@gmail.com'),
(2, 'Kurusu', 'Anjing', '260f5aa4-26d6-4fd2-b5c4-3ed9d77ff679', 'Tanggal 24-12-21. Depan rumah', 'Manado, Teling Atas', 'Berwarna cream dan cokelat, tidak memiliki ekor.', '085258071717', 'Belum Di Laporkan', 'jpg', '20021106051@gmail.com'),
(3, 'Majesti', 'Kucing', '0fa1e958-66ce-49ac-b185-de2527c6be1', 'Tanggal 2-1-22. Pintu masuk Mega Mas dan mengenakan kalung berwarna hitam kulit', 'MTC Mega Mas Apartment, Manado', 'Warna dominan putih dengan kepala cokelat milo, moncong cokelat', '08200089912', 'Belum Di Laporkan', 'jpg', '20021106051@gmail.com'),
(4, 'Linceng', 'Burung', '72530913-4a28-4549-8f2a-e5316b87dfad', 'Tanggal 30-12-21. Di Kandang', 'Amurang', 'warna kuning dengan ekor putih', '08348669421', 'Belum Di Laporkan', 'jpg', '20021106051@gmail.com'),
(5, 'Moriz', 'Kucing', '0fa1e958-66ce-49ac-b185-de2527c6be14', 'Tanggal 10-4-22. Di ruang tamu pos perum', 'Paniki Perum', 'Berwarna abu-abu, gendut, dengan ekor cincin 3', '08628461936', 'Belum Di Laporkan', 'jpg', '20021106051@gmail.com'),
(6, 'Pangeran', 'Kucing', 'KucingGaul', 'Tanggal 12-3-22. Hilang Di Taman Kota Manado', 'Koka, Bandara', 'Menggunakan Pakaian dengan kalung mahal', '0811230697', 'Belum Di Laporkan', 'jpg', '20021106051@gmail.com'),
(7, 'Pekokok', 'Burung', 'c7e291e2-0909-433b-97ca-9ac82b90d551', 'Tanggal 4-10-22. Kandang depan rumah', 'Langowan, Wolaang', 'Hijau, mata coklat', '08594739277492', 'Belum Di Laporkan', 'jpg', '20021106051@gmail.com'),
(8, 'Barny', 'Burung', 'burung62758a1a51eb62.06213885', 'anggal 20-12-21. Lompat dari mobil di depan IT Center', 'Manado, Telling, Kampung Jawa No. Rumah 32', 'Menggunakan kalung pink dengan baju pink, persis seperti pada gambar', '81223344556', 'Sudah Di Laporkan', 'jpg', 'charleskojansow@gmail.com'),
(9, 'Blacky', 'Anjing', 'BlackyG', 'Tanggal 23-2-22. Depan Rumah', 'Kawagkoan, Sendangan', 'Memakai kalung biru beridentitas, deskripsi seperti gambar', '082378237641', 'Belum Di Laporkan', 'jpg', 'charleskojansow@gmail.com'),
(10, 'Bleki', 'Anjing', 'BlekiG', 'Tanggal 19-2-22. Disamping Kantor STTI', 'Manado, Teling, Kampus STTI', 'Berwarna hitam dengan moncongdan kaki cokelat keemasan', '085422220003', 'Sudah Di Laporkan', 'jpg', 'charleskojansow@gmail.com'),
(11, 'Brown', 'Anjing', 'Brown2G', 'Tanggal 21-2-22. Di Pos Pasar Langowan', 'Langowan Timur', 'Berwarna cokelat seperti pada gambar', '08132372471', 'Sudah Di Laporkan', 'jpg', 'charleskojansow@gmail.com'),
(12, 'Brown', 'Anjing', 'BrownG', 'Tanggal 13-3-22. Depan Indomaret Pakowa', 'Manado, Karombasan', 'Berwarna cokelat, dengan kalung identitas pink', '081587346782', 'Belum Di Laporkan', 'jpg', 'charleskojansow@gmail.com'),
(13, 'Kakamuda', 'Burung', 'burung62758a1a51eb62.06213885', 'Kandang di rumah', 'Langowan, raringis', 'putih ada bulu kuning di kepala, mata berwarna hitam dan warna biru di sekitaran mata', '08318994563', 'Belum Di Laporkan', 'jpg', 'charleskojansow@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `stat` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `stat`) VALUES
(9, 'QuenOfTroll', 'QuenOfTroll@gmail.com', '$2y$10$b4MO2uHZRJXsOe8jgVZaIOe2Lxp8l3x1vIFWhHwTSAV523yGI6a4C', 2),
(10, 'charleskojansow', 'charleskojansow@gmail.com', '$2y$10$u8VYVUs9eBGN5dx4Brv/xen6AFmK5XzHMtqq/6GrrZhZrb9EBG4/C', 1),
(12, '20021106051', '20021106051@gmail.com', '$2y$10$N3PPrz7yXR6U6pxXYwwe1uJGvHP0oKMY/F96ixJtM3mBTuNv0kvx2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
