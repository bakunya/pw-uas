-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 07:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4703_pw_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `id_user`, `nik`, `nama`) VALUES
(2, 2, 2147483647, '0');

-- --------------------------------------------------------

--
-- Table structure for table `rps`
--

CREATE TABLE `rps` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_penyusun` int(11) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `tgl_disusun` date NOT NULL,
  `kode_matkul` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_capaian_pembelajaran`
--

CREATE TABLE `rps_capaian_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_gambaran_umum`
--

CREATE TABLE `rps_gambaran_umum` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_identitas`
--

CREATE TABLE `rps_identitas` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `bobot_sks` varchar(20) NOT NULL,
  `detail_penilaian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_pelaksanaan_pembelajaran`
--

CREATE TABLE `rps_pelaksanaan_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `minggu` int(2) NOT NULL,
  `kemampuan_akhir` text NOT NULL,
  `indikator` text NOT NULL,
  `penilaian` text NOT NULL,
  `topik` text NOT NULL,
  `strategi_belajar` text NOT NULL,
  `waktu` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_prasyarat`
--

CREATE TABLE `rps_prasyarat` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_referensi`
--

CREATE TABLE `rps_referensi` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_tugas_aktivitas`
--

CREATE TABLE `rps_tugas_aktivitas` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `tugas_aktivitas` text NOT NULL,
  `kemampuan_akhir` text NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_tugas_aktivitas_bobot_kriteria`
--

CREATE TABLE `rps_tugas_aktivitas_bobot_kriteria` (
  `id` int(11) NOT NULL,
  `id_rps_tugas_aktivitas` int(11) NOT NULL,
  `bobot` text NOT NULL,
  `kriteria_penilaian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian`
--

CREATE TABLE `rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian` (
  `id` int(11) NOT NULL,
  `id_rps_tugas_aktivitas_bobot_kriteria` int(11) NOT NULL,
  `body` varchar(50) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rps_unit_pembelajaran`
--

CREATE TABLE `rps_unit_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `kemampuan_akhir` text NOT NULL,
  `indikator` text NOT NULL,
  `bahan_kajian` text NOT NULL,
  `metode_pembelajaran` text NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `metode_penilaian` text NOT NULL,
  `bahan_ajar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(2, 'miku@mail.com', '$2y$12$iMNvVWwQF9B8OHBszv7xPuKKfgHWztKChpTNpBzczzuUKDKvycSV6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `fk_dosen_on_user` (`id_user`);

--
-- Indexes for table `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_dosen` (`id_dosen`),
  ADD KEY `fk_self_on_penyusun` (`id_penyusun`);

--
-- Indexes for table `rps_capaian_pembelajaran`
--
ALTER TABLE `rps_capaian_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_rps1` (`id_rps`);

--
-- Indexes for table `rps_gambaran_umum`
--
ALTER TABLE `rps_gambaran_umum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_rps2` (`id_rps`);

--
-- Indexes for table `rps_identitas`
--
ALTER TABLE `rps_identitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_rps3` (`id_rps`);

--
-- Indexes for table `rps_pelaksanaan_pembelajaran`
--
ALTER TABLE `rps_pelaksanaan_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_rps4` (`id_rps`);

--
-- Indexes for table `rps_prasyarat`
--
ALTER TABLE `rps_prasyarat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_rps5` (`id_rps`);

--
-- Indexes for table `rps_referensi`
--
ALTER TABLE `rps_referensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_rps6` (`id_rps`);

--
-- Indexes for table `rps_tugas_aktivitas`
--
ALTER TABLE `rps_tugas_aktivitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_rps7` (`id_rps`);

--
-- Indexes for table `rps_tugas_aktivitas_bobot_kriteria`
--
ALTER TABLE `rps_tugas_aktivitas_bobot_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_tugas_aktivitas` (`id_rps_tugas_aktivitas`);

--
-- Indexes for table `rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian`
--
ALTER TABLE `rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_bobot_kriteria` (`id_rps_tugas_aktivitas_bobot_kriteria`);

--
-- Indexes for table `rps_unit_pembelajaran`
--
ALTER TABLE `rps_unit_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_self_on_rps8` (`id_rps`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rps`
--
ALTER TABLE `rps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_capaian_pembelajaran`
--
ALTER TABLE `rps_capaian_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_gambaran_umum`
--
ALTER TABLE `rps_gambaran_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_identitas`
--
ALTER TABLE `rps_identitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_pelaksanaan_pembelajaran`
--
ALTER TABLE `rps_pelaksanaan_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_prasyarat`
--
ALTER TABLE `rps_prasyarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_referensi`
--
ALTER TABLE `rps_referensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_tugas_aktivitas`
--
ALTER TABLE `rps_tugas_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_tugas_aktivitas_bobot_kriteria`
--
ALTER TABLE `rps_tugas_aktivitas_bobot_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian`
--
ALTER TABLE `rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rps_unit_pembelajaran`
--
ALTER TABLE `rps_unit_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `fk_dosen_on_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `rps`
--
ALTER TABLE `rps`
  ADD CONSTRAINT `fk_self_on_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `fk_self_on_penyusun` FOREIGN KEY (`id_penyusun`) REFERENCES `dosen` (`id`);

--
-- Constraints for table `rps_capaian_pembelajaran`
--
ALTER TABLE `rps_capaian_pembelajaran`
  ADD CONSTRAINT `fk_self_on_rps1` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`);

--
-- Constraints for table `rps_gambaran_umum`
--
ALTER TABLE `rps_gambaran_umum`
  ADD CONSTRAINT `fk_self_on_rps2` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`);

--
-- Constraints for table `rps_identitas`
--
ALTER TABLE `rps_identitas`
  ADD CONSTRAINT `fk_self_on_rps3` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`);

--
-- Constraints for table `rps_pelaksanaan_pembelajaran`
--
ALTER TABLE `rps_pelaksanaan_pembelajaran`
  ADD CONSTRAINT `fk_self_on_rps4` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`);

--
-- Constraints for table `rps_prasyarat`
--
ALTER TABLE `rps_prasyarat`
  ADD CONSTRAINT `fk_self_on_rps5` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`);

--
-- Constraints for table `rps_referensi`
--
ALTER TABLE `rps_referensi`
  ADD CONSTRAINT `fk_self_on_rps6` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`);

--
-- Constraints for table `rps_tugas_aktivitas`
--
ALTER TABLE `rps_tugas_aktivitas`
  ADD CONSTRAINT `fk_self_on_rps7` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`);

--
-- Constraints for table `rps_tugas_aktivitas_bobot_kriteria`
--
ALTER TABLE `rps_tugas_aktivitas_bobot_kriteria`
  ADD CONSTRAINT `fk_self_on_tugas_aktivitas` FOREIGN KEY (`id_rps_tugas_aktivitas`) REFERENCES `rps_tugas_aktivitas` (`id`);

--
-- Constraints for table `rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian`
--
ALTER TABLE `rps_tugas_aktivitas_bobot_kriteria_indikator_penilaian`
  ADD CONSTRAINT `fk_self_on_bobot_kriteria` FOREIGN KEY (`id_rps_tugas_aktivitas_bobot_kriteria`) REFERENCES `rps_tugas_aktivitas_bobot_kriteria` (`id`);

--
-- Constraints for table `rps_unit_pembelajaran`
--
ALTER TABLE `rps_unit_pembelajaran`
  ADD CONSTRAINT `fk_self_on_rps8` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
