-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 09:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_rohma`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `nama`, `alamat`, `nohp`, `jenis_kelamin`, `email`, `foto`) VALUES
(3, 'Ari Putra', 'Menjangan Bojong', '085742014272', 'P', 'maharani@gmail.com', '1729408797_gambar B.jpg'),
(4, 'Maharani', ' Batang', '085742117500', 'P', 'maharani@gmail.com', '1729408829_gambar D.jpg'),
(5, 'Megantara Wati', ' Wiradesa', '081322456678', 'P', 'megantarawati@gmail.com', '1729407335_gambar A.jpg'),
(6, 'Panji Setya', ' Podosugih Pekalongan', '081322659901	', 'L', 'panji_setya@gmail.com', '1729408061_Gambarpanji.jpg'),
(7, 'Sulistyawati', ' Kajen Pekalongan', '088211883444', 'P', 'sulistyawati@gmail.com', '1729408317_gambarsulis.jpg'),
(8, 'Tomas', ' Jakarta', '0856430112', 'L', 'tomas@gmail.com', '1729408885_gambartomas.jpg'),
(10, 'Yani', ' Batang', '086588484', 'L', 'yani@gmail.com', '1729408969_gambaryani.jpg'),
(11, 'lukman', ' Karawang', '08657377332', 'L', 'lukman@gmail.com', '1729408678_gambarlukman.jpg'),
(12, 'Rohmanisah', ' Pekalongan Kota', '0888066649990', 'P', 'rohma@gmail.com', '1729408952_WhatsApp Image 2024-10-20 at 14.07.26.jpeg'),
(13, 'rohmansyah', 'Batang', '085742117599', 'P', 'romansyah@gmail.com', '1729409256_WhatsApp Image 2024-10-20 at 14.23.26.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
