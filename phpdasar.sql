-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 07:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `npm` char(9) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `jurusan`, `email`, `gambar`) VALUES
(1, 'Dimas Harianto', '21100014', 'Pend. Informatika', 'dimasharianto@gmail.com', '665d51b0748f5.jpg'),
(2, 'Fadil Daifullah', '211000004', 'Pend. Informatika', 'fadil@gmail.com', '665979e539efd.png'),
(3, 'Rahmat afdal', '21100015', 'Pend. Informatika', 'rahmataf@gmail.com', '66599041e4a96.png'),
(4, 'Bayu Rahmat', '21100016', 'pend. Informatika', 'bayurhmt@gmail.com', '6659905bf254a.png'),
(5, 'Aryani carissa', '21100020', 'Pend. Informatika', 'arynicarissa@gmail.com', '665d51607b676.png'),
(6, 'Arifah Kurnia Putri', '21100021', 'Pend. Informatika', 'arifah@gmail.com', '665d519834a85.jpg'),
(7, ' Asnaini', '21100037', 'Pend. Informatika', 'isnaaja@gmail.com', '6659906c81d80.jpg'),
(29, 'revlon ramadhanti', '21100008', 'pend. sejarah', 'epon@gmail.com', '66598e538356b.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'admin', '$2y$10$x.cwA1.c42Q/ZeWDqZmC9unvuCftNsJtWEVh7Gro92IF8ZyVBx0.a'),
(10, 'harianto', '$2y$10$885un3aKG2/DJQ4ErQ8Jvugomg5wpnp8ixN/ZMxawjQA6dLE4aKsm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
