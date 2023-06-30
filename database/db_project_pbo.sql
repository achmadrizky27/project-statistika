-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230625.8e3615eca8
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 07:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project_pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_chatbot`
--

CREATE TABLE `tb_chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_chatbot`
--

INSERT INTO `tb_chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Apakah gunadarma j1 kalimalang terdapat jurusan Informatika?', 'J1 Kalimalang terdapat jurusan informatika beserta LABTI & LEPKOM untuk praktikumnnya, kak...'),
(2, 'Pendaftaran mulai tanggal berapa?', 'Pendaftaran mulai dari 12 juli 2023 s.d 23 september 4050, kak...');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cobacoba`
--

CREATE TABLE `tb_cobacoba` (
  `id` int(10) NOT NULL,
  `produk` varchar(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cobacoba`
--

INSERT INTO `tb_cobacoba` (`id`, `produk`, `jumlah`) VALUES
(1, 'kaos', 300),
(2, 'gelang', 250),
(3, 'topi', 120);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwalkuliah`
--

CREATE TABLE `tb_jadwalkuliah` (
  `kd_mk` varchar(10) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  `matakuliah` varchar(60) NOT NULL,
  `namadosen` varchar(60) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `pukul` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwalkuliah`
--

INSERT INTO `tb_jadwalkuliah` (`kd_mk`, `kelas`, `matakuliah`, `namadosen`, `hari`, `pukul`) VALUES
('IA8920', '2IA21', 'Organisasi Sistem Komputer', 'Abdullah Haditama', 'Sabtu', '07.00 - 10.00'),
('IA7829', '2IA25', 'Algoritma & Pemrograman 8', 'Megawati Soekarno Putri', 'Selasa', '13.00 - 12.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelasmahasiswa`
--

CREATE TABLE `tb_kelasmahasiswa` (
  `npm` varchar(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kelas` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelasmahasiswa`
--

INSERT INTO `tb_kelasmahasiswa` (`npm`, `nama`, `kelas`) VALUES
('50421023', 'Achmad Rizky', '2IA22'),
('50421065', 'Fadilano Abraham', '2IA25'),
('50425673', 'Muhammad Rayhan Pasyaputra', '2IA23'),
('50426718', 'Maulana Bintang Pamungkas', '2IA24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_registrasi`
--

CREATE TABLE `tb_registrasi` (
  `npm` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `ujian_seleksi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registrasi`
--

INSERT INTO `tb_registrasi` (`npm`, `nama`, `telepon`, `email`, `jurusan`, `ujian_seleksi`) VALUES
('83936', 'Achmad Rizky', '089567889302', 'achmadrizky@gmail.com', 'Informatika', 'Nilai Rapot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_chatbot`
--
ALTER TABLE `tb_chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cobacoba`
--
ALTER TABLE `tb_cobacoba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwalkuliah`
--
ALTER TABLE `tb_jadwalkuliah`
  ADD KEY `kd_mk` (`kd_mk`),
  ADD KEY `namadosen` (`namadosen`),
  ADD KEY `matakuliah` (`matakuliah`);

--
-- Indexes for table `tb_kelasmahasiswa`
--
ALTER TABLE `tb_kelasmahasiswa`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `kelas` (`kelas`);

--
-- Indexes for table `tb_registrasi`
--
ALTER TABLE `tb_registrasi`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_chatbot`
--
ALTER TABLE `tb_chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=895052238;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
