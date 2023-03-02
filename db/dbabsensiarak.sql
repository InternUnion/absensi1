-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 01 Mar 2023 pada 11.02
-- Versi server: 8.0.32
-- Versi PHP: 7.4.3-4ubuntu2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbabsensiarak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int NOT NULL,
  `id_karyawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu_masuk` time NOT NULL,
  `waktu_keluar` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `id_karyawan`, `nama`, `waktu_masuk`, `waktu_keluar`, `date`) VALUES
(2, '3', 'Adam Muafa', '10:00:00', '18:00:00', '2023-02-17'),
(3, '2', 'Allea Rakha', '10:00:00', '18:00:00', '2023-02-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int NOT NULL,
  `jabatan_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `jabatan`
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
-- Struktur dari tabel `karyawan`
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
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `username`, `password`, `nama`, `tgl_lhr`, `jenkel`, `alamat`, `no_tel`, `jabatan`, `level`) VALUES
(2, 'Rakha ganteng banget', 'ireng123', 'Allea Rakha', '2023-02-15', 'Male', 'Ngawi', '18931031321', 'CEO', 'admin'),
(3, 'chaeng', '123456', 'Adam Muafa', '2005-02-08', 'Male', 'Jl.jalan', '089590908080', 'HRD', 'karyawan'),
(4, 'hiken', '123456', 'Rakha', '2005-02-08', 'Male', 'Jl.Palem 1', '089590908080', 'CEO', 'admin'),
(5, 'aji', '123456', 'aji suparji', '1996-09-16', 'Male', 'JL.palem 1', '0895049030', 'CEO', 'admin'),
(6, 'edi ', '123456', 'edi sukadi', '2003-11-18', 'Male', 'JL.palem 1', '0895049030', 'CEO', 'karyawan'),
(17, 'Masbro Ganteng', 'masbro123', 'Masbro', '2023-02-17', 'Female', 'Jember Utara', '08128182182121', 'Office Boy', 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
