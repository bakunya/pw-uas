-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2023 at 09:54 PM
-- Server version: 10.3.37-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4703_pw_uas`
--
CREATE DATABASE IF NOT EXISTS `4703_pw_uas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4703_pw_uas`;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nik` decimal(16,0) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `id_user`, `nik`, `nama`) VALUES
(2, 4, '2147483647', 'miku'),
(5, 17, '111111111', 'hatsune');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps`
--

INSERT INTO `rps` (`id`, `id_dosen`, `id_penyusun`, `matkul`, `tgl_berlaku`, `tgl_disusun`, `kode_matkul`) VALUES
(6, 5, 5, 'matematik', '2023-01-04', '2023-01-03', '09121');

-- --------------------------------------------------------

--
-- Table structure for table `rps_capaian_pembelajaran`
--

CREATE TABLE `rps_capaian_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps_capaian_pembelajaran`
--

INSERT INTO `rps_capaian_pembelajaran` (`id`, `id_rps`, `body`) VALUES
(2, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ut saepe repudiandae cum aperiam asperiores sunt nisi optio esse exercitationem molestias ducimus voluptatum unde, blanditiis assumenda aliquid quaerat perferendis.     Sit, excepturi laudantium quae ipsum voluptas praesentium at iusto dolorem laboriosam saepe accusantium nemo aspernatur? Officiis in consequatur alias nemo quis possimus numquam, quidem ipsam ratione nesciunt placeat repellendus enim.');

-- --------------------------------------------------------

--
-- Table structure for table `rps_gambaran_umum`
--

CREATE TABLE `rps_gambaran_umum` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps_gambaran_umum`
--

INSERT INTO `rps_gambaran_umum` (`id`, `id_rps`, `body`) VALUES
(1, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ut saepe repudiandae cum aperiam asperiores sunt nisi optio esse exercitationem molestias ducimus voluptatum unde, blanditiis assumenda aliquid quaerat perferendis.     Sit, excepturi laudantium quae ipsum voluptas praesentium at iusto dolorem laboriosam saepe accusantium nemo aspernatur? Officiis in consequatur alias nemo quis possimus numquam, quidem ipsam ratione nesciunt placeat repellendus enim.'),
(2, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ut saepe repudiandae cum aperiam asperiores sunt nisi optio esse exercitationem molestias ducimus voluptatum unde, blanditiis assumenda aliquid quaerat perferendis.     Sit, excepturi laudantium quae ipsum voluptas praesentium at iusto dolorem laboriosam saepe accusantium nemo aspernatur? Officiis in consequatur alias nemo quis possimus numquam, quidem ipsam ratione nesciunt placeat repellendus enim.');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps_identitas`
--

INSERT INTO `rps_identitas` (`id`, `id_rps`, `semester`, `bobot_sks`, `detail_penilaian`) VALUES
(4, 6, 'kasjdh', 'dkasjdjkasd', 'kashdkjashd');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps_pelaksanaan_pembelajaran`
--

INSERT INTO `rps_pelaksanaan_pembelajaran` (`id`, `id_rps`, `minggu`, `kemampuan_akhir`, `indikator`, `penilaian`, `topik`, `strategi_belajar`, `waktu`) VALUES
(1, 6, 8, 'askdhkadhk', 'kjhaksdhakj', 'khkadhka', 'ksdhakshd', 'khdksahdk', 8),
(2, 6, 8, 'askdhkadhk', 'kjhaksdhakj', 'khkadhka', 'ksdhakshd', 'khdksahdk', 8),
(3, 6, 8, 'jajshd', 'kakdh', 'khakdak', 'haskdhaksj', 'khdaskdhk', 8),
(4, 6, 9, 'adaksdskj', 'kjhakjsdhajks', 'kjhkajsdkjas', 'kjhsakdkajsh', 'khaskdhkajshdka', 8),
(5, 6, 8, 'ajsdkajshd', 'kjhdkdkas', 'kjhaksdhajks', 'khaksjdhasjk', 'kjhaksjdhasjk', 8),
(6, 6, 8, 'sdkajhdkjashd', 'kjhdaskdhajks', 'khdaksdhakjs', 'khdaskdhakjs', 'kajhsdkjsahd', 8),
(7, 6, 8, 'ajsndkjasdkj', 'kdaskdakjsdh', 'kjhdakjdhajk', 'haksjdhkjahd', 'kjhaskjhdjkasd', 9);

-- --------------------------------------------------------

--
-- Table structure for table `rps_prasyarat`
--

CREATE TABLE `rps_prasyarat` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps_prasyarat`
--

INSERT INTO `rps_prasyarat` (`id`, `id_rps`, `body`) VALUES
(2, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ut saepe repudiandae cum aperiam asperiores sunt nisi optio esse exercitationem molestias ducimus voluptatum unde, blanditiis assumenda aliquid quaerat perferendis.     Sit, excepturi laudantium quae ipsum voluptas praesentium at iusto dolorem laboriosam saepe accusantium nemo aspernatur? Officiis in consequatur alias nemo quis possimus numquam, quidem ipsam ratione nesciunt placeat repellendus enim.');

-- --------------------------------------------------------

--
-- Table structure for table `rps_referensi`
--

CREATE TABLE `rps_referensi` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps_referensi`
--

INSERT INTO `rps_referensi` (`id`, `id_rps`, `body`) VALUES
(1, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ut saepe repudiandae cum aperiam asperiores sunt nisi optio esse exercitationem molestias ducimus voluptatum unde, blanditiis assumenda aliquid quaerat perferendis.     Sit, excepturi laudantium quae ipsum voluptas praesentium at iusto dolorem laboriosam saepe accusantium nemo aspernatur? Officiis in consequatur alias nemo quis possimus numquam, quidem ipsam ratione nesciunt placeat repellendus enim.'),
(2, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ut saepe repudiandae cum aperiam asperiores sunt nisi optio esse exercitationem molestias ducimus voluptatum unde, blanditiis assumenda aliquid quaerat perferendis.     Sit, excepturi laudantium quae ipsum voluptas praesentium at iusto dolorem laboriosam saepe accusantium nemo aspernatur? Officiis in consequatur alias nemo quis possimus numquam, quidem ipsam ratione nesciunt placeat repellendus enim.'),
(3, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus commodi ut saepe repudiandae cum aperiam asperiores sunt nisi optio esse exercitationem molestias ducimus voluptatum unde, blanditiis assumenda aliquid quaerat perferendis.     Sit, excepturi laudantium quae ipsum voluptas praesentium at iusto dolorem laboriosam saepe accusantium nemo aspernatur? Officiis in consequatur alias nemo quis possimus numquam, quidem ipsam ratione nesciunt placeat repellendus enim.');

-- --------------------------------------------------------

--
-- Table structure for table `rps_tugas_aktivitas`
--

CREATE TABLE `rps_tugas_aktivitas` (
  `id` int(11) NOT NULL,
  `id_rps` int(11) NOT NULL,
  `tugas_aktivitas` text NOT NULL,
  `kemampuan_akhir` text NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `bobot` text NOT NULL,
  `kriteria_penilaian` text NOT NULL,
  `indikator_penilaian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps_tugas_aktivitas`
--

INSERT INTO `rps_tugas_aktivitas` (`id`, `id_rps`, `tugas_aktivitas`, `kemampuan_akhir`, `waktu`, `bobot`, `kriteria_penilaian`, `indikator_penilaian`) VALUES
(4, 6, 'dlajdlasjd', 'laskdjalsjd', '1', 'jdskjdf', 'kjsakjdhajsk', 'kjaksjhdjkasd'),
(5, 6, 'asdjaksdjasd', 'asldjalsjd', '1', 'jaskhdkajshd', 'kjdakshdkjasd', 'ajhdkjashdkj'),
(6, 6, 'sjdkjshdk', 'khdkadkjah', 'khkdahdkjasjkd', 'kjhkjasdjkashd', 'jhdjkahdjakdhk', 'kjhkajsdhkjashd'),
(7, 6, 'jkahdkashd', 'khakhdkajsh', 'khdkjahdkjasjdk', 'khkahdkjashd', 'kjhkajsdhjka', 'kjhdkjad'),
(8, 6, 'jhkjhdkjashdk', 'jhkjajkdajk', 'khksadjkashd', 'kjhjkasdkjashd', 'kjhkjdjkahd', 'kjhdkajsdhjkad');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps_unit_pembelajaran`
--

INSERT INTO `rps_unit_pembelajaran` (`id`, `id_rps`, `kemampuan_akhir`, `indikator`, `bahan_kajian`, `metode_pembelajaran`, `waktu`, `metode_penilaian`, `bahan_ajar`) VALUES
(1, 6, 'jkhdkjshd', 'kjkasdjkas', 'khdkjadjkas', 'kjdhkajdjkasd', 'khdkjahdjkas', 'jsdkjashd', 'kjhdkajshdjks'),
(2, 6, 'jakhdkjashd', 'khdaksdkjas', 'kjhdkasdjkasd', 'jhdkajdhkjahd', 'kjhdajdajksd', 'kjdhkkjasdkja', 'kahdkahda'),
(3, 6, 'kahsdkjashd', 'kjdkasjdjka', 'kjdkadkja', 'dakjsdhkajsdh', 'kjhdakjdhajk', 'khdkajshdkjah', 'kjahdkashdkajs'),
(4, 6, 'kjahsdkahsdkj', 'kjhdaskjdjkasdkj', 'jhaskjdhkajd', 'kjhdaksjdajsk', 'kjdh', 'khjkdjka', 'hdakjdhjksa'),
(5, 6, 'jkahdkjashd', 'kjdasjkhdkjashd', 'kjhksahdkajsh', 'kjhakjsdakshd', 'kjahsdkjashd', 'jadhkjashd', 'hdajkhdjkdh'),
(6, 6, 'jadkjashdjk', 'kjhdaskjdhajks', 'khakjshdakjdhajks', 'kjhaksjdhasjkhd', 'hakjdhajksdh', 'kjhaskjdhasjk', 'hdakjdhasjk'),
(7, 6, 'ajshdjkashd', 'kjhkajshdjka', 'kjhdaksjhdakjs', 'khdkasjhdjk', 'kjhdkashdkjdh', 'kjhakjsdhaskj', 'akhdakjsdhjkas'),
(8, 6, 'jkhadkjhask', 'kjhdaskjdhajks', 'kjhakjsdhjka', 'kjhaksjdajks', 'kjdaskjdhajks', 'jhdakjsdhajk', 'haskdhakjshd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(4, 'miku@kawaii.com', '$2y$12$6Fx.XY.hISf1YnGOBit8tO5YH7RbUxvSC5F4JIUVbysE66VMj/3qS'),
(17, 'hatsune@mail.com', '$2y$12$7euIUq4RzUuI/J6b8VsvZeqANCxkh5UK/CGhk3h2KizpCIbKtDlIu');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rps`
--
ALTER TABLE `rps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rps_capaian_pembelajaran`
--
ALTER TABLE `rps_capaian_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rps_gambaran_umum`
--
ALTER TABLE `rps_gambaran_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rps_identitas`
--
ALTER TABLE `rps_identitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rps_pelaksanaan_pembelajaran`
--
ALTER TABLE `rps_pelaksanaan_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rps_prasyarat`
--
ALTER TABLE `rps_prasyarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rps_referensi`
--
ALTER TABLE `rps_referensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rps_tugas_aktivitas`
--
ALTER TABLE `rps_tugas_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rps_unit_pembelajaran`
--
ALTER TABLE `rps_unit_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `fk_self_on_rps1` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rps_gambaran_umum`
--
ALTER TABLE `rps_gambaran_umum`
  ADD CONSTRAINT `fk_self_on_rps2` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rps_identitas`
--
ALTER TABLE `rps_identitas`
  ADD CONSTRAINT `fk_self_on_rps3` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rps_pelaksanaan_pembelajaran`
--
ALTER TABLE `rps_pelaksanaan_pembelajaran`
  ADD CONSTRAINT `fk_self_on_rps4` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rps_prasyarat`
--
ALTER TABLE `rps_prasyarat`
  ADD CONSTRAINT `fk_self_on_rps5` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rps_referensi`
--
ALTER TABLE `rps_referensi`
  ADD CONSTRAINT `fk_self_on_rps6` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rps_tugas_aktivitas`
--
ALTER TABLE `rps_tugas_aktivitas`
  ADD CONSTRAINT `fk_self_on_rps7` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rps_unit_pembelajaran`
--
ALTER TABLE `rps_unit_pembelajaran`
  ADD CONSTRAINT `fk_self_on_rps8` FOREIGN KEY (`id_rps`) REFERENCES `rps` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
