-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-111283-0.cloudclusters.net:19688
-- Generation Time: Feb 21, 2023 at 03:36 AM
-- Server version: 8.0.26
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int NOT NULL,
  `id_karyawan` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `clock_in` varchar(100) NOT NULL,
  `clock_out` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `id_karyawan`, `nama`, `clock_in`, `clock_out`) VALUES
(1, 2, 'Allea Rakha Mahardhika', 'Monday, 20-02-2023 11:13:34 am', ''),
(2, 4, 'Rakha', 'Monday, 20-02-2023 11:51:36 am', 'Monday, 20-02-2023 01:16:57 pm'),
(3, 17, 'Masbro', 'Monday, 20-02-2023 12:53:51 pm', 'Monday, 20-02-2023 01:20:30 pm'),
(4, 6, 'edi sukadi', 'Monday, 20-02-2023 01:42:09 pm', 'Monday, 20-02-2023 01:45:19 pm'),
(8, 19, 'Tartaglia', 'Monday, 20-02-2023 02:12:32 pm', 'Monday, 20-02-2023 02:12:46 pm');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int NOT NULL,
  `jabatan_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan_karyawan`) VALUES
(1, 'CTO'),
(2, 'CEO'),
(3, 'HRD'),
(4, 'Office Boy'),
(5, 'Programmer'),
(7, 'IT'),
(9, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jenkel` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tel` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `level` enum('admin','karyawan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `username`, `password`, `nama`, `tgl_lhr`, `jenkel`, `alamat`, `no_tel`, `jabatan`, `level`) VALUES
(2, 'Rakha ganteng banget', 'ireng123', 'Allea Rakha', '2023-02-15', 'Male', 'Ngawi', '18931031321', 'CEO', 'admin'),
(3, 'chaeng', '123456', 'Adam Muafa', '2005-02-08', 'Male', 'Jl.jalan', '089590908080', 'HRD', 'karyawan'),
(4, 'hiken', '123456', 'Rakha', '2005-02-08', 'Male', 'Jl.Palem 1', '089590908080', 'CEO', 'admin'),
(5, 'aji', '123456', 'aji suparji', '1996-09-16', 'Male', 'JL.palem 1', '0895049030', 'CEO', 'admin'),
(6, 'edi ', '123456', 'edi sukadi', '2003-11-18', 'Male', 'JL.palem 1', '0895049030', 'CEO', 'karyawan'),
(17, 'Masbro Ganteng', 'masbro123', 'Masbro', '2023-02-17', 'Female', 'Jember Utara', '08128182182121', 'Office Boy', 'karyawan'),
(18, 'hello', 'hello', 'hello', '2023-02-01', 'Male', 'hello', '0321312', 'CEO', 'karyawan'),
(19, 'Tatang', '123456', 'Tartaglia', '2000-01-19', 'Male', 'Snezhnaya', '0895049030', 'CEO', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
